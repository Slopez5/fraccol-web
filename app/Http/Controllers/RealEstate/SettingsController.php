<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //

    public function expenseCategories()
    {
        $expenseCategories = ExpenseCategory::all();
        return view('realEstates.settings.expenseCategories.index', compact('expenseCategories'));
    }

    public function createExpenseCategory()
    {
        return view('realEstates.settings.expenseCategories.create');
    }

    public function storeExpenseCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        ExpenseCategory::create($request->all());

        return redirect()->route('realEstate.settings.expenseCategories');
    }



    public function editExpenseCategory(ExpenseCategory $expenseCategory)
    {
        return view('realEstates.settings.expenseCategories.edit', compact('expenseCategory'));
    }

    public function updateExpenseCategory(Request $request, ExpenseCategory $expenseCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $expenseCategory->update($request->all());

        return redirect()->route('realEstate.settings.expenseCategories');
    }

    public function deleteExpenseCategory($id)
    {
        $expenseCategory = ExpenseCategory::find($id);
        $expenseCategory->delete();

        return redirect()->route('realEstate.settings.expenseCategories');
    }

    public function propertyTypes() {
        return view('realEstates.settings.propertyTypes.index');
    }


    public function loteTypes()
    {
        return view('realEstates.settings.loteTypes.index');
    }

    public function paymentPlans()
    {
        return view('realEstates.settings.paymentPlans.index');
    }

    public function counties()
    {
        return view('realEstates.settings.counties.index');
    }

    public function contracts()
    {
        return view('realEstates.settings.contracts.index');
    }
}
