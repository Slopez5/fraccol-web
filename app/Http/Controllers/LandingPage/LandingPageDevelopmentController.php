<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingPageDevelopmentController extends Controller
{
    //
    public function index()
    {
        $development = json_decode(json_encode([
            "id" => 1,
            "name" => "Palmares",
            "header" => $this->getHeaderSection(),
            "development_info" => $this->getDevelopmentInfoSection(),
            "prices" => $this->getPricesSection(),
            "gallery" => $this->getGallerySection()
        ]));
        return view('landing_page.development', ["development" => $development]);
    }

    private function getHeaderSection()
    {
        $development_name = 'Fraccionamiento Palmares';
        $slogan = 'Bienvenido al lugar perfecto para descansar rodeado de naturaleza.';
        $images = [
            [
                "id" => 1,
                "image" => Storage::url('developments/Palmares/Foto_1.jpeg')
            ],
            [
                "id" => 2,
                "image" => Storage::url('developments/Palmares/Foto_2.jpeg')
            ],
            [
                "id" => 3,
                "image" => Storage::url('developments/Palmares/Foto_3.jpeg')
            ]
        ];
        return [
            "development_name" => $development_name,
            "slogan" => $slogan,
            "images" => $images
        ];
    }

    private function getDevelopmentInfoSection()
    {
        $welcome_info = "Bienvenido a Palmares, un lugar paradisíaco rodeado de naturaleza y tranquilidad. Nuestro fraccionamiento está ubicado en la hermosa ciudad de Colima, a solo 15 minutos del centro de Colima, lo que te permitirá disfrutar de la serenidad del campo sin sacrificar la comodidad de la vida urbana.";

        $outstanding_features = [
            [
                "id" => 1,
                "image" => Storage::url('developments/Palmares/Foto_4.jpeg'),
                "name" => "Extensas áreas verdes y paisajes impresionantes.",
                "description" => "Descubre un oasis natural en nuestro fraccionamiento, donde te rodearás de exuberantes áreas verdes y paisajes impresionantes. Sumérgete en la belleza de la naturaleza mientras disfrutas de un estilo de vida sereno y armonioso."
            ],
            [
                "id" => 2,
                "image" => Storage::url('developments/Palmares/Foto_5.jpeg'),
                "name" => "Toma de Agua",
                "description" => "Disfruta del privilegio de contar con una toma de agua propia en nuestro fraccionamiento. Garantizamos un suministro confiable y seguro para satisfacer todas tus necesidades diarias. Tu comodidad y bienestar son nuestra prioridad."
            ],
            [
                "id" => 3,
                "image" => Storage::url('developments/Palmares/Foto_6.jpeg'),
                "name" => "Luz",
                "description" => "Experimenta la comodidad y la seguridad de una iluminación excepcional en cada rincón de nuestro fraccionamiento. Con un sistema de iluminación eficiente y moderno, podrás disfrutar de noches tranquilas y seguras en medio de un ambiente iluminado y acogedor. Tu hogar estará siempre brillante en nuestro fraccionamiento."
            ],
            [
                "id" => 4,
                "image" => Storage::url('developments/Palmares/Foto_7.jpeg'),
                "name" => "Calles empedradas",
                "description" => "Recorre calles empedradas con encanto y carácter en nuestro fraccionamiento. Con un diseño que combina lo rústico y lo elegante, nuestras calles empedradas te brindarán una experiencia única y pintoresca al caminar o conducir por ellas. Disfruta de la belleza y durabilidad de nuestras calles empedradas, que añaden un toque distintivo a nuestro acogedor entorno campestre."
            ]
        ];

        $footer_info = "Descubre la armonía entre la vida moderna y la naturaleza en Palmares. ¡Ven y sé parte de nuestra comunidad!";

        return [
            "welcome_info" => $welcome_info,
            "outstanding_features" => $outstanding_features,
            "footer_info" => $footer_info
        ];
    }

    private function getGallerySection()
    {
        $photos = [
            [
                [
                    "id" => 1,
                    "photo" => Storage::url("/developments/Palmares/Foto_1.jpeg"),
                ],
                [
                    "id" => 2,
                    "photo" => Storage::url("/developments/Palmares/Foto_2.jpeg"),
                ],
                [
                    "id" => 3,
                    "photo" => Storage::url("/developments/Palmares/Foto_3.jpeg"),
                ]
            ],
            [
                [
                    "id" => 4,
                    "photo" => Storage::url("/developments/Palmares/Foto_4.jpeg"),
                ],
                [
                    "id" => 5,
                    "photo" => Storage::url("/developments/Palmares/Foto_5.jpeg"),
                ],
                [
                    "id" => 6,
                    "photo" => Storage::url("/developments/Palmares/Foto_6.jpeg"),
                ]
            ]
        ];
        return $photos;
    }

    public function getPricesSection()
    {
        $price_info = "En palmares, ofrecemos una variedad de terrenos disponibles para la construcción de tu casa de campo, todos ellos con diferentes medidas y ubicaciones. Nuestros precios se basan en el precio por metro cuadrado (m2) y varían según las características de cada lote.";
        $prices = [
            [
                "id" => 1,
                "lot_type" => "Precio Base",
                "price" => "$600 por m2",
                "image" => Storage::url('planos/Palmares.png'),
                "financings" => [
                    [
                        "id" => 1,
                        "period" => "Finaciado a 1 año:",
                        "price" => "$650 por m2"
                    ],
                    [
                        "id" => 2,
                        "period" => "Finaciado a 2 año:",
                        "price" => "$700 por m2"
                    ],
                    [
                        "id" => 3,
                        "period" => "Finaciado a 3 año:",
                        "price" => "$750 por m2"
                    ],
                    [
                        "id" => 4,
                        "period" => "Finaciado a 4 año:",
                        "price" => "$800 por m2"
                    ],
                    [
                        "id" => 5,
                        "period" => "Finaciado a 5 año:",
                        "price" => "$875 por m2"
                    ]
                ]
            ],
        ];

        return [
            "price_info" => $price_info,
            "prices" => $prices
        ];
    }
}
