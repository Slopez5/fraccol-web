<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    // Development

    public function createDevelopment()
    {
        return view('realEstates.developments.create');
    }

    public function storeDevelopment(Request $request)
    {
        return redirect()->route('realEstate.developments');
    }

    public function editDevelopment($id)
    {
        return view('realEstates.developments.edit');
    }

    public function updateDevelopment(Request $request, $id)
    {
        return redirect()->route('realEstate.developments');
    }

    public function deleteDevelopment($id)
    {
        return redirect()->route('realEstate.developments');
    }

    public function showDevelopment($id)
    {
        return view('realEstates.developments.show');
    }

    public function developmentLots($id)
    {
        return view('realEstates.developments.lots.index');
    }

    public function developmentMetadata($id)
    {
        return view('realEstates.developments.metadata.index');
    }

    public function developmentLoteTypes($id)
    {
        return view('realEstates.developments.loteTypes.index');
    }

    public function developmentLoteTypePaymentPlans($developmentId, $loteTypeId)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.index');
    }

    // Development -> Lotes

    public function createDevelopmentLot($developmentId)
    {
        return view('realEstates.developments.lots.create');
    }

    public function storeDevelopmentLot(Request $request, $developmentId)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function editDevelopmentLot($developmentId, $id)
    {
        return view('realEstates.developments.lots.edit');
    }

    public function updateDevelopmentLot(Request $request, $developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function deleteDevelopmentLot($developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function showDevelopmentLot($developmentId, $id)
    {
        return view('realEstates.developments.lots.show');
    }

    // Development -> metadata

    public function createDevelopmentMetadata($developmentId)
    {
        return view('realEstates.developments.metadata.create');
    }

    public function storeDevelopmentMetadata(Request $request, $developmentId)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function editDevelopmentMetadata($developmentId, $id)
    {
        return view('realEstates.developments.metadata.edit');
    }

    public function updateDevelopmentMetadata(Request $request, $developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function deleteDevelopmentMetadata($developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function showDevelopmentMetadata($developmentId, $id)
    {
        return view('realEstates.developments.metadata.show');
    }

    // Development -> lote types

    public function createDevelopmentLoteType($developmentId)
    {
        return view('realEstates.developments.loteTypes.create');
    }

    public function storeDevelopmentLoteType(Request $request, $developmentId)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function editDevelopmentLoteType($developmentId, $id)
    {
        return view('realEstates.developments.loteTypes.edit');
    }

    public function updateDevelopmentLoteType(Request $request, $developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function deleteDevelopmentLoteType($developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function showDevelopmentLoteType($developmentId, $id)
    {
        return view('realEstates.developments.loteTypes.show');
    }

    // Development -> lote types -> payment plans

    public function createDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.create');
    }

    public function storeDevelopmentLoteTypePaymentPlan(Request $request, $developmentId, $loteTypeId)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }

    public function editDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId, $id)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.edit');
    }

    public function updateDevelopmentLoteTypePaymentPlan(Request $request, $developmentId, $loteTypeId, $id)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }

    public function deleteDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId, $id)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }

    public function showDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId, $id)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.show');
    }





}
