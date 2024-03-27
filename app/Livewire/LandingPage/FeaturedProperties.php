<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class FeaturedProperties extends Component
{
    public $developments = [
        [
            "title" => "Agua Dulce",
            "isFeatured" => false,
            "isSale" => false,
            "location" => "Buenavista",
            "image" => 'https://scontent.fclq2-1.fna.fbcdn.net/v/t39.30808-6/406463485_324979473618757_4860560767295410393_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH7Zersi82DhI-OFfFVCp7dYhZDhMXHvV9iFkOExce9X-2loxI9skAUMVaIMrOc-CbCQZjmBbqqNCLYi1vmwakh&_nc_ohc=1Q2gm7zLtbUAX_jVt39&_nc_ht=scontent.fclq2-1.fna&oh=00_AfA6VOhNQIdHefXqf71FY0hy9hjT5oz-yQH17MB4Jw-WJw&oe=660968C9',
            "size" => "385",
            "price" => "120,000",
            "id" => 1,
            "video" => "",
            "hasVideo" => false,
            "hasGallery" => false,
            "hasDetails" => false,
            "hasCompare" => false,
            "hasShare" => false,
            "hasFavorite" => false,
            "services" => [
                [
                    "name"=>"agua",
                    "icon"=>"flaticon-bed"
                ],
                [
                    "name"=>"luz",
                    "icon"=>"flaticon-bed"
                ],
                [
                    "name"=>"calles",
                    "icon"=>"flaticon-bed"
                ]
            ]
        ],
        [
            "title" => "Rincon Rustico",
            "isFeatured" => false,
            "isSale" => false,
            "location" => "Cuauhtemoc",
            "image" => 'https://scontent.fclq2-1.fna.fbcdn.net/v/t39.30808-6/428344869_370271482422889_8647929420013222207_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFOKnq0XSoVemByEzboMRpiDjcf92T2VAcONx_3ZPZUB_m-_Pem2Ma2elrvabXYXXKznn5etnRq6aAFZh4j29fg&_nc_ohc=KHassBfVpEQAX_MKcon&_nc_ht=scontent.fclq2-1.fna&oh=00_AfBnnvZ7D-TMxfIjSrFObbQs1TcnCmdLvODef8DH19b3Dg&oe=6608E806',
            "size" => "300",
            "price" => "195,000",
            "id" => 1,
            "video" => "",
            "hasVideo" => false,
            "hasGallery" => false,
            "hasDetails" => false,
            "hasCompare" => false,
            "hasShare" => false,
            "hasFavorite" => false,
            "services" => [
                [
                    "name"=>"agua",
                    "icon"=>"flaticon-bed"
                ],
                [
                    "name"=>"luz",
                    "icon"=>"flaticon-bed"
                ],
                [
                    "name"=>"calles",
                    "icon"=>"flaticon-bed"
                ]
            ]
        ],
        [
            "title" => "Palmares",
            "isFeatured" => false,
            "isSale" => false,
            "location" => "Colima",
            "image" => 'https://scontent.fclq2-1.fna.fbcdn.net/v/t39.30808-6/428140959_370891542360883_6547434657277491595_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEuuEDDN3hhsFBocvOstHS6Mw-ZmrRi8k8zD5matGLyT_Sy4Q5bUp8wsjEPAN0tHKBWYl5_kKU-j-Oc6YEKTsZN&_nc_ohc=EF86EKKzbScAX-H3rjU&_nc_ht=scontent.fclq2-1.fna&oh=00_AfD7Pp0xBIPJeI2-UU-oBfoOyWVHq1q8HOerJEuBU4l_Ug&oe=660873ED',
            "size" => "200",
            "price" => "120,000",
            "id" => 1,
            "video" => "",
            "hasVideo" => false,
            "hasGallery" => false,
            "hasDetails" => false,
            "hasCompare" => false,
            "hasShare" => false,
            "hasFavorite" => false,
            "services" => [
                [
                    "name"=>"agua",
                    "icon"=>"flaticon-bed"
                ],
                [
                    "name"=>"luz",
                    "icon"=>"flaticon-bed"
                ],
                [
                    "name"=>"calles",
                    "icon"=>"flaticon-bed"
                ]
            ]
        ]
    ];

    public function render()
    {
        return view('livewire.landing-page.featured-properties');
    }
}
