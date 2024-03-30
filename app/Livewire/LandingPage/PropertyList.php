<?php

namespace App\Livewire\LandingPage;

use App\Models\Development;
use App\Models\Unit;
use Livewire\Component;

class PropertyList extends Component
{
    public $search;
    public $properties = [];

    public function mount()
    {
        $developments = Development::all()
        ->map(function ($development) {
            return [
                'id' => $development->id,
                'name' => $development->name,
                'location' => $development->location,
                'area' => $development->total_land_area,
                'total_lots' => $development->total_lots,
                'available_lots' => $development->available_lots,
                'price' => $development->lotes->min('price'),
                'isFeatured' => false,
                'isAvailable' => false,
                'isSale' => false,
                'hasDetails' => false,
                'hasGallery' => false,
                'hasVideo' => false,
                'services' => [],
                'logo' => $development->logo,
                'blueprint' => $development->blueprint,
                'start_date' => $development->start_date,
                'end_date' => $development->end_date,
                'sort_description' => $development->sort_description,
                'full_description' => $development->full_description,
                'status' => $development->status,
                'image' => $development->image,
            ];
        });


        $units = Unit::all()->map(function ($unit) {
            return [
                'id' => $unit->id,
                'name' => $unit->name,
                'development_id' => $unit->development_id,
                'price' => $unit->price,
                'area' => $unit->area,
                'bedrooms' => $unit->bedrooms,
                'bathrooms' => $unit->bathrooms,
                'garage' => $unit->garage,
                'isFeatured' => false,
                'isAvailable' => false,
                'isSale' => false,
                'hasDetails' => false,
                'hasGallery' => false,
                'hasVideo' => false,
                'services' => [],
                'logo' => $unit->development->logo,
                'blueprint' => $unit->development->blueprint,
                'start_date' => $unit->development->start_date,
                'end_date' => $unit->development->end_date,
                'sort_description' => $unit->development->sort_description,
                'full_description' => $unit->development->full_description,
                'status' => $unit->development->status,
                'image' => $unit->development->image,
            ];
        });

        $developments = $developments->merge($units);

        $this->properties = $developments->toArray();
    }

    public function render()
    {
        return view('livewire.landing-page.property-list');
    }

    public function searchProperty()
    {
        $developments = Development::where('name', 'like', '%' . $this->search . '%')
        ->orWhere('location', 'like', '%' . $this->search . '%')
        ->get()
        ->map(function ($development) {
            return [
                'id' => $development->id,
                'name' => $development->name,
                'location' => $development->location,
                'area' => $development->total_land_area,
                'total_lots' => $development->total_lots,
                'available_lots' => $development->available_lots,
                'price' => $development->lotes->min('price'),
                'isFeatured' => false,
                'isAvailable' => false,
                'isSale' => false,
                'hasDetails' => false,
                'hasGallery' => false,
                'hasVideo' => false,
                'services' => [],
                'logo' => $development->logo,
                'blueprint' => $development->blueprint,
                'start_date' => $development->start_date,
                'end_date' => $development->end_date,
                'sort_description' => $development->sort_description,
                'full_description' => $development->full_description,
                'status' => $development->status,
                'image' => $development->image,
            ];
        });
        $units = Unit::where('name', 'like', '%' . $this->search . '%')->orWhere('area', 'like', '%' . $this->search . '%')->get()->map(function ($unit) {
            return [
                'id' => $unit->id,
                'name' => $unit->name,
                'development_id' => $unit->development_id,
                'price' => $unit->price,
                'area' => $unit->area,
                'bedrooms' => $unit->bedrooms,
                'bathrooms' => $unit->bathrooms,
                'garage' => $unit->garage,
                'isFeatured' => false,
                'isAvailable' => false,
                'isSale' => false,
                'hasDetails' => false,
                'hasGallery' => false,
                'hasVideo' => false,
                'services' => [],
                'logo' => $unit->development->logo,
                'blueprint' => $unit->development->blueprint,
                'start_date' => $unit->development->start_date,
                'end_date' => $unit->development->end_date,
                'sort_description' => $unit->development->sort_description,
                'full_description' => $unit->development->full_description,
                'status' => $unit->development->status,
                'image' => $unit->development->image,
            ];
        });
        $developments = $developments->merge($units);
        $this->properties = $developments->toArray();
    }
}
