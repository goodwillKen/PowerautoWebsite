<?php
/**
 * includes/product_data.php
 * Master Product Database
 * Contains all product data, specs, images, and document links.
 * Updated to use assets/images/products/ structure.
 */

// Placeholder for PDF links
$dummyPdf = 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf';

// Define the base path for product images
if (!defined('prod_img_base')) {
    define('prod_img_base', 'assets/images/products/');
}

$catalog = [
    // 1. KITS
    'kits' => [
        [
            'title' => 'Tipper & Transport Kits',
            'open' => true,
            'products' => [
                [
                    'model' => 'KIT-TIPPER-S (Small Rigid)',
                    'image' => prod_img_base . '10-11-kits-header.webp',
                    'description' => 'Complete hydraulic kit for Small Rigid tippers. Matched components for reliable daily operation.',
                    'specs' => [
                        'Application' => 'Small Rigid Tipper',
                        'Includes' => 'PTO, Pump, Valve, Hoist, Tank'
                    ],
                    'docs' => [['name' => 'Kit Brochure', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ],
                [
                    'model' => 'KIT-TIPPER-HD (Heavy Duty)',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=HD+Tipper+Kit',
                    'description' => 'Heavy duty kit for Truck & Dog applications. Features high-performance piston pump and alloy tank options.',
                    'specs' => [
                        'Application' => 'Heavy Duty / Dog Trailer',
                        'Includes' => 'PTO, Piston Pump, Valve, Hoist, Alloy Tank'
                    ],
                    'docs' => [['name' => 'Tech Sheet', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ]
            ]
        ],
        [
            'title' => 'Specialized Application Kits',
            'products' => [
                [
                    'model' => 'KIT-HOOK (Hook Lift)',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Hook+Lift+Kit',
                    'description' => 'High-flow hydraulic kit designed specifically for 20-tonne hook lift systems.',
                    'specs' => [
                        'Capacity' => '20 Tonne',
                        'Includes' => 'PTO, Bent Axis Pump, Valve Bank, Controls'
                    ],
                    'docs' => [['name' => 'Schematic', 'url' => $dummyPdf, 'icon' => 'fas fa-project-diagram text-blue-500']]
                ],
                [
                    'model' => 'KIT-CRANE (Crane Truck)',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Crane+Kit',
                    'description' => 'Variable displacement pump kit for crane trucks requiring precise control and cooling.',
                    'specs' => [
                        'Application' => 'Crane Truck',
                        'Includes' => 'PTO, Piston Pump, Oil Cooler, Tank'
                    ],
                    'docs' => [['name' => 'Install Guide', 'url' => $dummyPdf, 'icon' => 'fas fa-tools text-green-500']]
                ]
            ]
        ]
    ],

    // 2. PTOs
    'pto' => [
        [
            'title' => 'Side Mount PTOs',
            'open' => true,
            'products' => [
                [
                    'model' => 'PA850 / 851 Series',
                    'image' => prod_img_base . '10-01-pto-header.webp',
                    'description' => '8-Bolt heavy duty PTO for Eaton, Mack, and ZF transmissions. The industry standard for tippers.',
                    'specs' => [
                        'Mounting' => '8 Bolt Bottom',
                        'Torque' => '450 Nm',
                        'Application' => 'Tippers, General'
                    ],
                    'docs' => [['name' => 'Service Manual', 'url' => $dummyPdf, 'icon' => 'fas fa-book text-red-500']]
                ],
                [
                    'model' => 'PA3800 / Deep Reach',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Deep+Reach',
                    'description' => 'Side mount PTO designed for Isuzu and Hino transmissions requiring deep reach gears.',
                    'specs' => [
                        'Mounting' => '6 Bolt Side',
                        'Torque' => '300 Nm',
                        'Application' => 'Japanese Trucks'
                    ],
                    'docs' => [['name' => 'Fitment Guide', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ]
            ]
        ],
        [
            'title' => 'Specialized PTOs',
            'products' => [
                [
                    'model' => 'PA4000 Hotshift',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=PA4000+Hotshift',
                    'description' => 'Hotshift PTO for Allison Automatics. Wet clutch design allows engagement while moving.',
                    'specs' => [
                        'Mounting' => '10 Bolt / 6 Bolt',
                        'Torque' => '580 Nm',
                        'Application' => 'Waste, Agitators'
                    ],
                    'docs' => [['name' => 'Wiring Diagram', 'url' => $dummyPdf, 'icon' => 'fas fa-bolt text-yellow-500']]
                ],
                [
                    'model' => 'PA3900 Rear Mount',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Rear+Mount',
                    'description' => 'High torque rear-mount PTO for heavy haulage and high-power pumping applications.',
                    'specs' => [
                        'Mounting' => 'Rear Mount',
                        'Torque' => '600 Nm+',
                        'Application' => 'Heavy Haulage'
                    ],
                    'docs' => []
                ]
            ]
        ]
    ],

    // 3. PUMPS
    'pumps' => [
        [
            'title' => 'Gear Pumps',
            'open' => true,
            'products' => [
                [
                    'model' => 'POW Series',
                    'image' => prod_img_base . '10-02-pumps-header.webp',
                    'description' => 'Robust 3-piece cast iron gear pump. Bi-rotational with pressure balanced thrust blocks.',
                    'specs' => [
                        'Type' => 'Gear (Cast Iron)',
                        'Max Pressure' => '250 Bar',
                        'Displacement' => '20cc - 100cc'
                    ],
                    'docs' => [['name' => 'POW Datasheet', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ],
                [
                    'model' => 'A Series',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Alloy+Pump',
                    'description' => 'Aluminium gear pump for lighter duty applications.',
                    'specs' => [
                        'Type' => 'Gear (Aluminium)',
                        'Max Pressure' => '210 Bar',
                        'Displacement' => 'Variable'
                    ],
                    'docs' => []
                ]
            ]
        ],
        [
            'title' => 'Piston Pumps',
            'products' => [
                [
                    'model' => 'PUA Series',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=PUA+Pump',
                    'description' => 'High performance bent-axis piston pump. Compact size for tight chassis spaces.',
                    'specs' => [
                        'Type' => 'Bent Axis',
                        'Max Pressure' => '400 Bar',
                        'Displacement' => '40cc - 110cc'
                    ],
                    'docs' => [['name' => 'PUA Specs', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ],
                [
                    'model' => 'Q Series',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Q+Series',
                    'description' => 'High efficiency pump for continuous duty applications like live floors.',
                    'specs' => [
                        'Type' => 'High Efficiency',
                        'Max Pressure' => '280 Bar',
                        'Application' => 'Live Floor'
                    ],
                    'docs' => []
                ]
            ]
        ]
    ],

    // 4. VALVES
    'valves' => [
        [
            'title' => 'Transport Valves',
            'open' => true,
            'products' => [
                [
                    'model' => 'VA87 Series',
                    'image' => prod_img_base . '10-03-valves-header.webp',
                    'description' => 'Industry standard tipper valve with proportional lowering control.',
                    'specs' => [
                        'Type' => 'Tipper Valve',
                        'Flow' => '140 LPM',
                        'Pressure' => '250 Bar',
                        'Operation' => 'Air'
                    ],
                    'docs' => [['name' => 'Valve Spec Sheet', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ],
                [
                    'model' => 'VA210 Diverter',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=VA210',
                    'description' => 'Compact diverter valve for switching between two circuits (e.g. Tipper and Crane).',
                    'specs' => [
                        'Type' => 'Compact Valve',
                        'Flow' => '180 LPM',
                        'Feature' => 'Dual Pressure Settings'
                    ],
                    'docs' => [['name' => 'Installation Info', 'url' => $dummyPdf, 'icon' => 'fas fa-tools text-blue-500']]
                ],
                [
                    'model' => 'Hose Burst Valve',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Burst+Valve',
                    'description' => 'Safety check valve for lifting cylinders.',
                    'specs' => [
                        'Type' => 'Safety Valve',
                        'Feature' => 'AS1418.8 Compliant'
                    ],
                    'docs' => []
                ]
            ]
        ],
        [
            'title' => 'Directional Control',
            'products' => [
                [
                    'model' => 'Q75 Monoblock',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Q75+Valve',
                    'description' => 'Robust monoblock valve bank.',
                    'specs' => [
                        'Type' => 'Monoblock',
                        'Flow' => '80 LPM',
                        'Feature' => 'High Resistance'
                    ],
                    'docs' => []
                ]
            ]
        ]
    ],

    // 5. HOISTS
    'hoists' => [
        [
            'title' => 'Tipping Hoists',
            'open' => true,
            'products' => [
                [
                    'model' => 'Well Mount Series',
                    'image' => prod_img_base . '10-05-hoists-header.webp',
                    'description' => 'Multi-stage hoists for dog trailers. Hard chromed stages for durability.',
                    'specs' => ['Stages' => '3-5', 'Mount' => 'Well / Trunnion'],
                    'docs' => [['name' => 'Hoist Chart', 'url' => $dummyPdf, 'icon' => 'fas fa-chart-bar text-green-500']]
                ],
                [
                    'model' => 'Underbody Series',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Underbody+Hoist',
                    'description' => 'Compact hoists for 2-way tippers.',
                    'specs' => ['Stroke' => '800-2000mm', 'Mount' => 'Eye / Trunnion'],
                    'docs' => [['name' => 'Fitment Guide', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ]
            ]
        ],
        [
            'title' => 'Cylinders',
            'products' => [
                [
                    'model' => 'Air Cylinder',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Air+Cylinder',
                    'description' => 'Pneumatic cylinder for tailgate locking mechanisms.',
                    'specs' => [
                        'Type' => 'Tailgate Lock',
                        'Action' => 'Spring Return'
                    ],
                    'docs' => []
                ]
            ]
        ]
    ],

    // 6. CONTROLS
    'controls' => [
        [
            'title' => 'Pneumatic Controls',
            'open' => true,
            'products' => [
                [
                    'model' => 'Air Switch (PTO/Tip)',
                    'image' => prod_img_base . '10-06-controls-header.webp',
                    'description' => 'Dashboard mounted air switch with safety interlock and automatic kick-out.',
                    'specs' => ['Function' => 'PTO / Raise / Lower', 'Safety' => 'Interlock'],
                    'docs' => [['name' => 'Air Circuit Diagram', 'url' => $dummyPdf, 'icon' => 'fas fa-project-diagram text-blue-500']]
                ]
            ]
        ],
        [
            'title' => 'Radio Remotes',
            'products' => [
                [
                    'model' => 'Scanreco G2B',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Scanreco',
                    'description' => 'Proportional radio remote for cranes and tilt trays. We offer in-house pairing and programming.',
                    'specs' => ['Range' => '100m', 'Control' => 'Proportional'],
                    'docs' => [['name' => 'Programming Guide', 'url' => $dummyPdf, 'icon' => 'fas fa-laptop-code text-purple-500']]
                ]
            ]
        ]
    ],

    // 7. TANKS
    'tanks' => [
        [
            'title' => 'Hydraulic Tanks',
            'open' => true,
            'products' => [
                [
                    'model' => 'Side Mount Aluminium',
                    'image' => prod_img_base . '10-04-tanks-header.webp',
                    'description' => 'Square aluminium tanks complete with straps, rubbers, and filler breathers.',
                    'specs' => ['Capacity' => '150L - 250L', 'Material' => 'Aluminium'],
                    'docs' => [['name' => 'Dimension Drawing', 'url' => $dummyPdf, 'icon' => 'fas fa-ruler-combined text-blue-500']]
                ],
                [
                    'model' => 'Rear Mount Steel',
                    'image' => 'https://placehold.co/400x400/f3f4f6/6b7280?text=Rear+Tank',
                    'description' => 'Steel slimline tanks designed for behind-cab mounting.',
                    'specs' => ['Capacity' => '80L - 200L', 'Material' => 'Steel'],
                    'docs' => [['name' => 'Mounting Template', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ]
            ]
        ]
    ],

    // 8. FILTRATION
    'filtration' => [
        [
            'title' => 'Filters',
            'open' => true,
            'products' => [
                [
                    'model' => 'Return Line Filter',
                    'image' => prod_img_base . '10-08-filters-header.webp',
                    'description' => 'Tank-top mounted return filter to ensure clean oil returns to the reservoir.',
                    'specs' => ['Rating' => '10 Micron', 'Flow' => 'Up to 300 LPM'],
                    'docs' => [['name' => 'Element Cross-Ref', 'url' => $dummyPdf, 'icon' => 'fas fa-list text-green-500']]
                ]
            ]
        ]
    ],

    // 9. HOSES
    'hoses' => [
        [
            'title' => 'Fittings & Couplings',
            'open' => true,
            'products' => [
                [
                    'model' => 'Quick Release Couplings',
                    'image' => prod_img_base . '10-07-hoses-header.webp',
                    'description' => 'Flat face and poppet style couplings for trailers and attachments.',
                    'specs' => ['Type' => 'ISO 16028', 'Pressure' => '350 Bar'],
                    'docs' => [['name' => 'Thread Chart', 'url' => $dummyPdf, 'icon' => 'fas fa-table text-blue-500']]
                ]
            ]
        ]
    ],

    // 10. BODY COMPONENTS
    'body_components' => [
        [
            'title' => 'Body Hardware',
            'open' => true,
            'products' => [
                [
                    'model' => '2-Way Tailgate Kit',
                    'image' => prod_img_base . '10-09-body-header.webp',
                    'description' => 'Complete hinge kit for side-swing and top-swing tailgates.',
                    'specs' => ['Finish' => 'Raw / Zinc', 'Includes' => 'Pins, Bushes, Catches'],
                    'docs' => [['name' => 'Fabrication Guide', 'url' => $dummyPdf, 'icon' => 'fas fa-tools text-red-500']]
                ]
            ]
        ]
    ],

    // 11. MAINTENANCE
    'maintenance' => [
        [
            'title' => 'Service Kits',
            'open' => true,
            'products' => [
                [
                    'model' => 'Seal & Repair Kits',
                    'image' => prod_img_base . '10-12-spares-header.webp',
                    'description' => 'Genuine seal kits for Hydreco pumps, valves, and hoists.',
                    'specs' => ['Type' => 'O-Rings / Seals', 'Origin' => 'Genuine'],
                    'docs' => [['name' => 'Service Manual', 'url' => $dummyPdf, 'icon' => 'fas fa-book text-red-500']]
                ]
            ]
        ]
    ],

    // 12. WINCH
    'winch' => [
        [
            'title' => 'Hydraulic Winches',
            'open' => true,
            'products' => [
                [
                    'model' => 'H10P Series',
                    'image' => prod_img_base . '10-10-winch-header.webp',
                    'description' => '10,000lb hydraulic planetary winch with automatic brake.',
                    'specs' => ['Rating' => '10,000lb', 'Drive' => 'Hydraulic'],
                    'docs' => [['name' => 'Winch Manual', 'url' => $dummyPdf, 'icon' => 'fas fa-file-pdf text-red-500']]
                ]
            ]
        ]
    ]
];
?>