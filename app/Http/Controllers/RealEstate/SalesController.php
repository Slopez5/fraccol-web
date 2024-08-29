<?php

namespace App\Http\Controllers\RealEstate;

use App\Classes\RoleType;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Development;
use App\Models\Lead;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;

class SalesController extends Controller
{

    public function createSale()
    {
       
        return view('realEstates.sales.create');
    }

    public function storeSale(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $sale = new Sale();
        $sale->name = $request->name;
        $sale->price = $request->price;
        $sale->description = $request->description;
        $sale->save();

        return redirect()->route('realEstate.sale.create')->with('success', 'Sale created successfully');
    }

    public function editSale($id)
    {
        $sale = Sale::find($id);
        return view('real-estate.sale.edit', compact('sale'));
    }

    public function updateSale(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $sale = Sale::find($id);
        $sale->name = $request->name;
        $sale->price = $request->price;
        $sale->description = $request->description;
        $sale->save();

        return redirect()->route('realEstate.sale.edit', $id)->with('success', 'Sale updated successfully');
    }

    public function deleteSale($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return redirect()->route('realEstate.sale.create')->with('success', 'Sale deleted successfully');
    }

    public function showSale($id)
    {
        $sale = Sale::find($id);
        return view('real-estate.sale.show', compact('sale'));
    }
}
