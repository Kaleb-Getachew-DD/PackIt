import React, { useState } from "react";
import "./Packager.css";

const Packager = () => {
    const [category, setCategory] = useState("All");
    const [priorityItems, setPriorityItems] = useState([]);
    const [style, setStyle] = useState("");
    const [material, setMaterial] = useState([]);
    const [colorPalette, setColorPalette] = useState([]);
    const [quality, setQuality] = useState("");
    const [type, setType] = useState("");
    const [budget, setBudget] = useState("");

    const itemsList = [
        "Sofa",
        "Queen Bed Frame",
        "Office Desk",
        "Dining Table",
        "Washing Machine",
        "Microwave Oven",
        "Television",
        "Armchair",
        "Nightstand",
        "Refrigerator",
    ];

    const handleCheckboxChange = (e, setter, state) => {
        const { value, checked } = e.target;
        if (checked) setter([...state, value]);
        else setter(state.filter((item) => item !== value));
    };

    const handleGeneratePackage = () => {
        console.log({
            category,
            priorityItems,
            style,
            material,
            colorPalette,
            quality,
            type,
            budget,
        });
        alert("Package Generated! Check the console for details.");
    };

    return (
        <div className="Kcontainer">
            <h1 className="Kheader">Package</h1>
            <div className="Kgrid-container">
                {/* Category */}
                <div className="Kgrid-item">
                    <label>Category</label>
                    <select
                        value={category}
                        onChange={(e) => setCategory(e.target.value)}
                    >
                        <option value="All">All</option>
                        <option value="Living Room">Living Room</option>
                        <option value="Bedroom">Bedroom</option>
                        <option value="Kitchen">Kitchen</option>
                    </select>
                </div>

                {/* Your Priority Items */}
                <div className="Kgrid-item">
                    <label>Your Priority Items</label>
                    {itemsList.map((item, index) => (
                        <div key={index}>
                            <input
                                type="checkbox"
                                value={item}
                                onChange={(e) =>
                                    handleCheckboxChange(
                                        e,
                                        setPriorityItems,
                                        priorityItems
                                    )
                                }
                            />
                            {item}
                        </div>
                    ))}
                </div>

                {/* Style */}
                <div className="Kgrid-item">
                    <label>Style</label>
                    <select
                        value={style}
                        onChange={(e) => setStyle(e.target.value)}
                    >
                        <option value="">Select Style</option>
                        <option value="Modern">Modern</option>
                        <option value="Traditional">Traditional</option>
                        <option value="Normal">Normal</option>
                    </select>
                </div>

                {/* Material */}
                <div className="Kgrid-item">
                    <label>Material</label>
                    {["Wood", "Metal", "Fabric"].map(
                        (materialOption, index) => (
                            <div key={index}>
                                <input
                                    type="checkbox"
                                    value={materialOption}
                                    onChange={(e) =>
                                        handleCheckboxChange(
                                            e,
                                            setMaterial,
                                            material
                                        )
                                    }
                                />
                                {materialOption}
                            </div>
                        )
                    )}
                </div>

                {/* Color Palette */}
                <div className="Kgrid-item">
                    <label>Color Palette</label>
                    {["Neutral", "Dark", "White"].map((color, index) => (
                        <div key={index}>
                            <input
                                type="checkbox"
                                value={color}
                                onChange={(e) =>
                                    handleCheckboxChange(
                                        e,
                                        setColorPalette,
                                        colorPalette
                                    )
                                }
                            />
                            {color}
                        </div>
                    ))}
                </div>

                {/* Quality */}
                <div className="Kgrid-item">
                    <label>Quality</label>
                    <select
                        value={quality}
                        onChange={(e) => setQuality(e.target.value)}
                    >
                        <option value="">Select Quality</option>
                        <option value="Premium">Premium</option>
                        <option value="Luxury">Luxury</option>
                        <option value="Standard">Standard</option>
                    </select>
                </div>

                {/* Type */}
                <div className="Kgrid-item">
                    <label>Type</label>
                    <select
                        value={type}
                        onChange={(e) => setType(e.target.value)}
                    >
                        <option value="">Select Type</option>
                        <option value="Second Hand">Second Hand</option>
                        <option value="New">New</option>
                        <option value="Refurbished">Refurbished</option>
                    </select>
                </div>

                {/* Budget */}
                <div className="Kgrid-item">
                    <label>Budget</label>
                    <input
                        type="text"
                        value={budget}
                        onChange={(e) => setBudget(e.target.value)}
                        placeholder="Enter Budget"
                    />
                </div>
            </div>

            <button className="Kgenerate-button" onClick={handleGeneratePackage}>
                Generate Package
            </button>
        </div>
    );
};

export default Packager;
