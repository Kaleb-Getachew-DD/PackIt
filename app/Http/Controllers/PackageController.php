<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\PackageGeneratorService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PackageController extends Controller
{
    private $packageGenerator;

    public function __construct(PackageGeneratorService $packageGenerator)
    {
        $this->packageGenerator = $packageGenerator;
    }

    public function generate(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'budget' => 'required|numeric|min:1',
                'essential_items' => 'required|array|min:1',
                'essential_items.*' => 'string',
                'preferences.style' => 'nullable|string',
                'preferences.material' => 'nullable|array|min:1',
                'preferences.material.*' => 'string',
                'preferences.color_palette' => 'nullable|array|min:1',
                'preferences.color_palette.*' => 'string',
                'preferences.quality' => 'nullable|string'
            ]);

            // Extract validated input
            $budget = $validated['budget'];
            $essentialItems = $validated['essential_items'];
            $userPreferences = [
                'style' => $validated['preferences']['style'] ?? null,
                'material' => $validated['preferences']['material'] ?? [],
                'color_palette' => $validated['preferences']['color_palette'] ?? [],
                'quality' => $validated['preferences']['quality'] ?? null,
            ];

            // Fetch all available products from the database
            $availableProducts = Product::all();

            // Generate the packages using the PackageGeneratorService
            $packages = $this->packageGenerator->generatePackages(
                $budget,
                $essentialItems,
                $userPreferences,
                $availableProducts
            );

            // Prepare the response data
            $response = [
                'packages' => array_map(function ($package) use ($budget) {
                    $totalPrice = collect($package['items'])->sum('price');
                    return [
                        'items' => $package['items'],
                        'total_price' => $totalPrice,
                        'similarity_score' => round($package['score'], 2),
                        'remaining_budget' => $budget - $totalPrice
                    ];
                }, $packages),
                'total_packages' => count($packages)
            ];

            // Return the response as JSON
            return response()->json($response, 200);

        } catch (ValidationException $e) {
            // Handle validation errors
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            // Handle unexpected errors
            return response()->json([
                'message' => 'An unexpected error occurred',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
