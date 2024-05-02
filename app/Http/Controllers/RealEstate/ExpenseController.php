<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{


    //expense create
    public function createExpense()
    {
        $categories = ExpenseCategory::all();
        return view('realEstates.expenses.create', compact('categories'));
    }

    //expense store
    public function storeExpense(Request $request)
    {
        $request->validate([
            'expense_name' => 'required',
            'expense_amount' => 'required',
            'expense_date' => 'required',
            'expense_description' => 'required',
        ]);

        return redirect()->route('expenses')->with('success', 'Expense created successfully');
    }

    //expense edit
    public function editExpense($id)
    {
        return view('realEstates.expenses.edit');
    }

    //expense update
    public function updateExpense(Request $request, $id)
    {
        $request->validate([
            'expense_name' => 'required',
            'expense_amount' => 'required',
            'expense_date' => 'required',
            'expense_description' => 'required',
        ]);

        return redirect()->route('expenses')->with('success', 'Expense updated successfully');
    }

    //expense delete
    public function deleteExpense($id)
    {
        return redirect()->route('expenses')->with('success', 'Expense deleted successfully');
    }

    //expense show
    public function showExpense($id)
    {
        return view('realEstates.expenses.show');
    }
}
