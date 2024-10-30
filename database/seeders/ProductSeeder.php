<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'Sofa', 'price' => 1500, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Refrigerator', 'price' => 800, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Washing Machine', 'price' => 600, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Microwave Oven', 'price' => 300, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Television', 'price' => 1200, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Queen Bed Frame', 'price' => 700, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Office Desk', 'price' => 400, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Dining Table', 'price' => 900, 'style' => 'Traditional', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Coffee Table', 'price' => 250, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Bookshelf', 'price' => 350, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Armchair', 'price' => 600, 'style' => 'Traditional', 'material' => 'Fabric', 'color_palette' => 'Dark', 'quality' => 'Standard'],
            ['name' => 'Nightstand', 'price' => 150, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Dresser', 'price' => 700, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Bed Mattress', 'price' => 800, 'style' => 'Modern', 'material' => 'Foam', 'color_palette' => 'Neutral', 'quality' => 'Premium'],
            ['name' => 'Desk Lamp', 'price' => 100, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Entertainment Center', 'price' => 1000, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Bar Stool', 'price' => 200, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Floor Lamp', 'price' => 150, 'style' => 'Traditional', 'material' => 'Metal', 'color_palette' => 'Dark', 'quality' => 'Standard'],
            ['name' => 'Area Rug', 'price' => 300, 'style' => 'Modern', 'material' => 'Fabric', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Wall Art', 'price' => 200, 'style' => 'Modern', 'material' => 'Canvas', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Shower Curtain', 'price' => 30, 'style' => 'Modern', 'material' => 'Fabric', 'color_palette' => 'Dark', 'quality' => 'Standard'],
            ['name' => 'Coffee Maker', 'price' => 150, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Toaster', 'price' => 80, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Blender', 'price' => 120, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Cookware Set', 'price' => 200, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Cutlery Set', 'price' => 50, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Pots and Pans Set', 'price' => 250, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Dishwasher', 'price' => 1200, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Premium'],
            ['name' => 'Vacuum Cleaner', 'price' => 300, 'style' => 'Modern', 'material' => 'Plastic', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Iron', 'price' => 80, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Curtains', 'price' => 100, 'style' => 'Modern', 'material' => 'Fabric', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Bedside Lamp', 'price' => 75, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Pet Bed', 'price' => 100, 'style' => 'Modern', 'material' => 'Fabric', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Wall Clock', 'price' => 50, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Fan', 'price' => 150, 'style' => 'Modern', 'material' => 'Plastic', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Air Purifier', 'price' => 200, 'style' => 'Modern', 'material' => 'Plastic', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Plant Pot', 'price' => 25, 'style' => 'Modern', 'material' => 'Ceramic', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Outdoor Patio Set', 'price' => 1500, 'style' => 'Modern', 'material' => 'Wood', 'color_palette' => 'Neutral', 'quality' => 'Standard'],
            ['name' => 'Fire Pit', 'price' => 400, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Dark', 'quality' => 'Standard'],
            ['name' => 'Grill', 'price' => 300, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Dark', 'quality' => 'Standard'],
            ['name' => 'Garden Tools Set', 'price' => 100, 'style' => 'Modern', 'material' => 'Metal', 'color_palette' => 'Dark', 'quality' => 'Standard'],
            ['name' => 'Storage Shed', 'price' => 700, 'style' => 'Traditional', 'material' => 'Metal', 'color_palette' => 'Dark', 'quality' => 'Standard'],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'price' => $product['price'],
                'style' => $product['style'],
                'material' => $product['material'],
                'color_palette' => $product['color_palette'],
                'quality' => $product['quality'],
            ]);
        }
    }
}
