<?php

namespace App\Livewire\RealEstate\Sales;

use App\Classes\RoleType;
use App\Models\Activity;
use App\Models\Development;
use App\Models\Lead;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $developments = [];
    public $leads = [];
    public $agents = [];
    public $closers = [];
    public $activities = [];
    public $lotes = [];
    public $loteSelected;
    public $lotesSelected = [];

    public $development_id;
    public $lead_id;
    public $agent_id;
    public $closer_id;
    public $activity_id;


    public function updatedDevelopmentId()
    {
        $this->lotesSelected = [];
        $development = Development::find($this->development_id);
        $this->lotes = $development->lotes ?? [];
    }

    public function updatedloteSelected()
    {
        // Haz algo con el valor seleccionado, por ejemplo, imprimirlo
        if ($this->loteSelected != 0 && $this->loteSelected != null) {
            if (collect($this->lotesSelected)->contains('id', $this->loteSelected)) {
                session()->flash('error', 'Lot already selected.');
                return;
            }
            $this->lotesSelected[] = collect($this->lotes)->where('id', $this->loteSelected)->first();
            $this->lotesSelected = collect($this->lotesSelected)->sortBy('id')->values();
            $this->lotes = collect($this->lotes)->filter(function ($lote) {
                return $lote['id'] != $this->loteSelected;
            })->values();
            $this->loteSelected = null;
        }
    }

    public function removeLot($loteId)
    {
        $this->lotes[] = collect($this->lotesSelected)->where('id', $loteId)->first();
        $this->lotes = collect($this->lotes)->sortBy('id')->values();
        $this->lotesSelected = collect($this->lotesSelected)->filter(function ($lote) use ($loteId) {
            return $lote['id'] != $loteId;
        })->sortBy('id')->values();
    }


    public function mount()
    {
        $this->developments = Development::all();
        if ($this->developments->isEmpty()) {
            session()->flash('error', 'Please create a development first.');
            return redirect()->route('real-estate.developments.create');
        } else {
            $this->development_id = $this->developments->first()->id;
        }


        $this->leads = Lead::all();
        if ($this->leads->isEmpty()) {
            session()->flash('error', 'Please create a lead first.');
            return redirect()->route('real-estate.leads.create');
        } else {
            $this->lead_id = $this->leads->first()->id;
        }


        $this->agents = User::where('role_id', RoleType::REAL_ESTATE_AGENT)->get();
        if ($this->agents->isEmpty()) {
            $this->agent_id = null;
        } else {
            $this->agent_id = $this->agents->first()->id;
        }


        $this->closers = User::where('role_id', RoleType::DEVELOPMENT_MANAGER)->get();
        if ($this->closers->isEmpty()) {
            $this->closer_id = null;
        } else {
            $this->closer_id = $this->closers->first()->id;
        }


        $this->activities = Activity::all();
        if ($this->activities->isEmpty()) {
            $this->activity_id = null;
        } else {
            $this->activity_id = $this->activities->first()->id;
        }

        if ($this->development_id) {

            $development = Development::find($this->development_id);
            $this->lotes = $development->lotes ?? [];
        }
    }

    public function render()
    {
        return view('livewire.real-estate.sales.create');
    }
}
