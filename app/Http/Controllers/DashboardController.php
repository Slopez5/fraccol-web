<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $tabFilterItemSaleData = [
            "propertyType" => ['Departamento', 'Casa', 'Local comercial'],
            "location" => ['Colima', 'Cuauhtemoc', 'Comala', 'Villa de alvarez'],
            "bedrooms" => 1,
            "bathrooms" => 1,
            "amenities" => [
                [
                    [
                        "id" => 1,
                        "name" => "Aire Acondicionado"
                    ],
                    [
                        "id" => 2,
                        "name" => "Alberca"
                    ],
                    [
                        "id" => 3,
                        "name" => "Calefacción Central"
                    ],
                    [
                        "id" => 4,
                        "name" => "Cuarto de Lavado"
                    ],
                    [
                        "id" => 5,
                        "name" => "Gimnasio"
                    ],
                    [
                        "id" => 6,
                        "name" => "Alarma"
                    ],
                    [
                        "id" => 7,
                        "name" => "Cubierta de Ventanas"
                    ],
                ],
                [
                    [
                        "id" => 8,
                        "name" => "WiFi"
                    ],
                    [
                        "id" => 9,
                        "name" => "Cable de TV"
                    ],
                    [
                        "id" => 10,
                        "name" => "Secadora"
                    ],
                    [
                        "id" => 11,
                        "name" => "Microondas"
                    ],
                    [
                        "id" => 12,
                        "name" => "Lavadora"
                    ],
                    [
                        "id" => 13,
                        "name" => "Refrigerador"
                    ],
                    [
                        "id" => 14,
                        "name" => "Ducha Exterior"
                    ]
                ]
            ]

        ];
        $tabFilterItemRentData = [
            "propertyType" => ['Departamento', 'Casa', 'Local comercial'],
            "location" => ['Colima', 'Cuauhtemoc', 'Comala', 'Villa de alvarez'],
            "bedrooms" => 1,
            "bathrooms" => 1,
            "amenities" => []

        ];
        $tabFilterItemDevelopmentData = [
            "propertyType" => ['Departamento', 'Casa', 'Local comercial'],
            "location" => ['Colima', 'Cuauhtemoc', 'Comala', 'Villa de alvarez'],
            "bedrooms" => 1,
            "bathrooms" => 1,
            "amenities" => []

        ];
        return view('landingPage.realEstate.index', ["tabFilterItemSaleData" => $tabFilterItemSaleData, "tabFilterItemRentData" => $tabFilterItemRentData, "tabFilterItemDevelopmentData" => $tabFilterItemDevelopmentData]);
    }

    public function propertyList(Request $request) {
        return view('landingPage.realEstate.development.developmentDetails');
    }
}
