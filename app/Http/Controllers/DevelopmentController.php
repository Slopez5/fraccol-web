<?php

namespace App\Http\Controllers;

use App\Models\Development;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    //
    public function index()
    {
        $developments = Development::all();
        return view('realEstates.developments.index', ["developments" => $developments]);
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function show($id)
    {
        $development = Development::find($id);
        return view('realEstates.developments.show',["development"=>$development]);
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function developmentConfiguration($id)
    {
        $development = Development::with(['lotTypes','lotTypes.paymentPlans','metadata'])->where('id','=',$id)->get()->first();
        return view('realEstates.developments.configurations.index',["development"=>$development]);
    }

    /**
     * Agregar tipos de lote
     */
    public function assignLoteType(){

    }

    /**
     * Eliminar tipo de lote
     */
    public function unassignLoteType() {

    }

    /**
     * Agregar planes de financiamiento por tipo de lote
     */
    public function assignPaymentPlanToLoteType() {

    }

    /**
     * Eliminar planes de financiamiento por tipo de lote
     */
    public function unassignPaymentPlanToLoteType() {

    }

    /**
     * Asignar contrato
     */
    public function assignContractoToDevelopment() {

    }

    /**
     * Configuración de manzanas y lotes
     */
    public function loteConfiguration() {

    }

    /**
     * Agregar manzanas y lotes
     */
    public function createLote(){
        return view('realEstates.developments.configurations.lotes.create');
    }

    /**
     * editar manzanas y lotes
     */

    /**
     * actualizar manzanas y lotes
     */

    /**
     * eliminar manzanas y lotes
     */

    /**
     * Agregar metadatos de lote
     */

    /**
     * editar metadatos de lote
     */

    /**
     * actualizar metadatos de lote
     */

    /**
     * eliminar metadatos de lote
     */
}
