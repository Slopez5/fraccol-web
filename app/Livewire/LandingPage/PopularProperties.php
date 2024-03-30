<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class PopularProperties extends Component
{
    public $properties = [
        [
            'name' => 'Villa',
            'price' => '1,000,000',
            'location' => 'Los Angeles, CA',
            'area' => 3000,
            'image' => 'https://scontent.fclq2-1.fna.fbcdn.net/v/t39.30808-6/427035268_368382309278473_9080707202385874024_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH0vGddRDZL5C5rXgqq_dDaBfx1F9-0h0AF_HUX37SHQKFsF_PlBjjzURVVcscBFS56jHwtNyu7iopdlGH0mi0D&_nc_ohc=up-KW5v6sY4AX_0xxiE&_nc_ht=scontent.fclq2-1.fna&oh=00_AfDbGxn3x-aLTaKytXkyRUXVaof0RfwtFCPyO2I2-a41ig&oe=6608EC63',
            'delay'=> 150,
            "isFeatured" => false,
            "isSale" => false,
            "hasCompare" => false,
            "hasShare" => false,
            "hasFavorite" => false,
            "services" => [
                [
                    "name"=>"agua",
                    "icon"=>"fal fa-droplet"
                ],
                [
                    "name"=>"luz",
                    "icon"=>"fal fa-droplet"
                ],
                [
                    "name"=>"calles",
                    "icon"=>"fal fa-droplet"
                ]
            ]
        ],
        [
            'name' => 'Apartment',
            'price' => '500,000',
            'location' => 'Los Angeles, CA',
            'area' => 1500,
            'image' => 'https://scontent.fclq2-1.fna.fbcdn.net/v/t39.30808-6/411425072_335029065947131_5935120821472294402_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH7-FL121HFMEbfEnwnT-bpl9_RiucL036X39GK5wvTfolA4xWUC3KD-4KBwECyZS4nqhzjlSNix9peh6ZlgrsC&_nc_ohc=l4xvrfHeymQAX9-wFlY&_nc_ht=scontent.fclq2-1.fna&oh=00_AfD6uErrwg6luXbjCukg7TcA0WwcJijAGD6TTIbLMcQyvQ&oe=6608E606',
            'delay'=> 150,
            "isFeatured" => false,
            "isSale" => false,
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
        return view('livewire.landing-page.popular-properties');
    }
}
