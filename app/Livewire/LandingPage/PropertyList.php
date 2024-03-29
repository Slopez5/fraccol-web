<?php

namespace App\Livewire\LandingPage;

use App\Models\Development;
use Livewire\Component;

class PropertyList extends Component
{
    public $search;
    public $properties = [];

    public function render()
    {
        return view('livewire.landing-page.property-list');
    }

    public function searchProperty()
    {
        $developments = Development::where('name', 'like', '%' . $this->search . '%')->orWhere('location', 'like', '%' . $this->search . '%')->get()->map(function ($development) {
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
                'real_estate' => $development->realEstatesAgency->name,
                'branch' => $development->realEstatesBranch->name,
                // 'subdomain' => $development->subdomain->subdomain,
                'lot_types' => $development->lotTypes->map(function ($lotType) {
                    return [
                        'id' => $lotType->id,
                        'name' => $lotType->name,
                        'price' => $lotType->pivot->price,
                    ];
                }),
                'lots' => $development->lotes->map(function ($lot) {
                    return [
                        'id' => $lot->id,
                        'lot_number' => $lot->lot_number,
                        'lot_type' => $lot->lotType->name,
                        'price' => $lot->price,
                        'status' => $lot->status,
                    ];
                }),
                'images' => $development->images->map(function ($image) {
                    return [
                        'id' => $image->id,
                        'image' => $image->image,
                    ];
                }),
                'payment_plans' => $development->paymentPlans->map(function ($paymentPlan) {
                    return [
                        'id' => $paymentPlan->id,
                        'name' => $paymentPlan->name,
                        'price_per_sqm' => $paymentPlan->pivot->price_per_sqm,
                        'down_payment' => $paymentPlan->pivot->down_payment,
                    ];
                }),
                'contracts' => $development->contracts->map(function ($contract) {
                    return [
                        'id' => $contract->id,
                        'contract_number' => $contract->contract_number,
                        'contract_date' => $contract->contract_date,
                        'contract_type' => $contract->contract_type,
                        'contract_status' => $contract->contract_status,
                        'contract_file' => $contract->contract_file,
                    ];
                }),
                'appointments' => $development->appointments->map(function ($appointment) {
                    return [
                        'id' => $appointment->id,
                        'appointment_date' => $appointment->appointment_date,
                        'appointment_time' => $appointment->appointment_time,
                        'appointment_status' => $appointment->appointment_status,
                    ];
                }),
            ];
        });
        logger($developments->toArray());
        $this->properties = $developments->toArray();
    }
}
