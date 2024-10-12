<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\ActivityType;
use App\Models\Address;
use App\Models\Contract;
use App\Models\Country;
use App\Models\ExpenseCategory;
use App\Models\InvoiceStatus;
use App\Models\LoteStatus;
use App\Models\LoteType;
use App\Models\PaymentMethod;
use App\Models\PaymentPlan;
use App\Models\PaymentStatus;
use App\Models\PropertyType;
use App\Models\RealEstateAgency;
use App\Models\RealEstateBranch;
use App\Models\UnitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    //

    public function activityCategories()
    {
        $activityCategories = ActivityType::all();
        return view('realEstates.settings.activityCategories.index', compact('activityCategories'));
    }

    public function createActivityCategory()
    {
        return view('realEstates.settings.activityCategories.create');
    }

    public function storeActivityCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        ActivityType::create($request->all());

        return redirect()->route('realEstate.settings.activityCategories');
    }

    public function editActivityCategory(ActivityType $activityCategory)
    {
        return view('realEstates.settings.activityCategories.edit', compact('activityCategory'));
    }

    public function updateActivityCategory(Request $request, ActivityType $activityCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $activityCategory->update($request->all());

        return redirect()->route('realEstate.settings.activityCategories');
    }

    public function deleteActivityCategory($id)
    {
        $activityCategory = ActivityType::find($id);
        $activityCategory->delete();

        return redirect()->route('realEstate.settings.activityCategories');
    }

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

    public function realEstateAgencies()
    {
        $realEstateAgencies = Auth::user()->realEstates;
        return view('realEstates.settings.realEstateAgencies.index', compact('realEstateAgencies'));
    }

    public function createRealEstateAgency()
    {
        return view('realEstates.settings.realEstateAgencies.create');
    }

    public function storeRealEstateAgency(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);

        $realEstateAgency = new RealEstateAgency();
        $realEstateAgency->admin()->associate($user);
        $realEstateAgency->name = $request->name;
        $realEstateAgency->email = $request->email;
        $realEstateAgency->phone = $request->phone;
        if ($request->website) {
            $realEstateAgency->website = $request->website;
        }
        $realEstateAgency->save();
        return redirect()->route('realEstate.settings.realEstateAgencies');
    }

    public function editRealEstateAgency($id)
    {
        $realEstateAgency = RealEstateAgency::find($id);
        return view('realEstates.settings.realEstateAgencies.edit', compact('realEstateAgency'));
    }

    public function updateRealEstateAgency(Request $request, $id)
    {
        $realEstateAgency = RealEstateAgency::find($id);
        $realEstateAgency->name = $request->name;
        $realEstateAgency->email = $request->email;
        $realEstateAgency->phone = $request->phone;
        if ($request->website) {
            $realEstateAgency->website = $request->website;
        }
        $realEstateAgency->save();
        return redirect()->route('realEstate.settings.realEstateAgencies');
    }

    public function deleteRealEstateAgency($id)
    {
        $realEstateAgency = RealEstateAgency::find($id);
        $realEstateAgency->delete();
        return redirect()->route('realEstate.settings.realEstateAgencies');
    }

    public function realEstateBranches()
    {
        $realEstateBranches = Auth::user()->realEstates->first()->branches;
        return view('realEstates.settings.realEstateBranches.index', compact('realEstateBranches'));
    }

    public function createRealEstateBranch()
    {
        return view('realEstates.settings.realEstateBranches.create');
    }

    public function storeRealEstateBranch(Request $request)
    {
        $user = Auth::user();
        
        

        logger($request->all());

        $realEstateBranch = new RealEstateBranch();
        $realEstateBranch->realEstate()->associate($user->realEstates->first());
        $realEstateBranch->name = $request->name;
        $realEstateBranch->email = $request->email;
        $realEstateBranch->phone = $request->phone;
        $address = new Address();
        $address->street = $request->street;
        $address->neighborhood = $request->neighborhood;
        $address->country_id = $request->country;
        $address->state_id = $request->state;
        $address->city_id = $request->city;
        $address->zip_code = $request->zip_code;
        $address->save();
        $realEstateBranch->address()->associate($address);
        
        $realEstateBranch->save();
        return redirect()->route('realEstate.settings.realEstateBranches');
    }

    public function editRealEstateBranch($id)
    {
        $realEstateBranch = RealEstateBranch::find($id);
        return view('realEstates.settings.realEstateBranches.edit', compact('realEstateBranch'));
    }

    public function updateRealEstateBranch(Request $request, $id)
    {
        $realEstateBranch = RealEstateBranch::find($id);
        $realEstateBranch->name = $request->name;
        $realEstateBranch->email = $request->email;
        $realEstateBranch->phone = $request->phone;
        $address = $realEstateBranch->address;
        $address->street = $request->street;
        $address->neighborhood = $request->neighborhood;
        $address->country_id = $request->country;
        $address->state_id = $request->state;
        $address->city_id = $request->city;
        $address->zip_code = $request->zip_code;
        $address->save();
        $realEstateBranch->address()->associate($address);
    }

    public function deleteRealEstateBranch($id)
    {
        $realEstateBranch = RealEstateBranch::find($id);
        $realEstateBranch->delete();
        return redirect()->route('realEstate.settings.realEstateBranches');
    }

    

    public function invoiceStatuses()
    {
        $invoiceStatuses = InvoiceStatus::all();
        return view('realEstates.settings.invoiceStatuses.index', compact('invoiceStatuses'));
    }

    public function createInvoiceStatus()
    {
        return view('realEstates.settings.invoiceStatuses.create');
    }

    public function storeInvoiceStatus(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        InvoiceStatus::create($request->all());

        return redirect()->route('realEstate.settings.invoiceStatuses');
    }

    public function editInvoiceStatus(InvoiceStatus $invoiceStatus)
    {
        return view('realEstates.settings.invoiceStatuses.edit', compact('invoiceStatus'));
    }

    public function updateInvoiceStatus(Request $request, InvoiceStatus $invoiceStatus)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $invoiceStatus->update($request->all());

        return redirect()->route('realEstate.settings.invoiceStatuses');
    }

    public function deleteInvoiceStatus($id)
    {
        $invoiceStatus = InvoiceStatus::find($id);
        $invoiceStatus->delete();

        return redirect()->route('realEstate.settings.invoiceStatuses');
    }

    public function loteStatuses()
    {
        $loteStatuses = LoteStatus::all();
        return view('realEstates.settings.loteStatuses.index', compact('loteStatuses'));
    }

    public function createLoteStatus()
    {
        return view('realEstates.settings.loteStatuses.create');
    }

    public function storeLoteStatus(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        LoteStatus::create($request->all());

        return redirect()->route('realEstate.settings.loteStatuses');
    }

    public function editLoteStatus(LoteStatus $loteStatus)
    {
        return view('realEstates.settings.loteStatuses.edit', compact('loteStatus'));
    }

    public function updateLoteStatus(Request $request, LoteStatus $loteStatus)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $loteStatus->update($request->all());

        return redirect()->route('realEstate.settings.loteStatuses');
    }

    public function deleteLoteStatus($id)
    {
        $loteStatus = LoteStatus::find($id);
        $loteStatus->delete();

        return redirect()->route('realEstate.settings.loteStatuses');
    }

    public function loteTypes()
    {
        
        $loteTypes = LoteType::all();
        return view('realEstates.settings.loteTypes.index', compact('loteTypes'));
    }

    public function createLoteType()
    {
        return view('realEstates.settings.loteTypes.create');
    }

    public function storeLoteType(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        LoteType::create($request->all());

        return redirect()->route('realEstate.settings.loteTypes');
    }

    public function editLoteType(LoteType $loteType)
    {
        return view('realEstates.settings.loteTypes.edit', compact('loteType'));
    }

    public function updateLoteType(Request $request, LoteType $loteType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $loteType->update($request->all());

        return redirect()->route('realEstate.settings.loteTypes');
    }

    public function deleteLoteType($id)
    {
        $loteType = LoteType::find($id);
        $loteType->delete();

        return redirect()->route('realEstate.settings.loteTypes');
    }

    public function paymentPlans()
    {
        return view('realEstates.settings.paymentPlans.index');
    }

    public function createPaymentPlan()
    {
        return view('realEstates.settings.paymentPlans.create');
    }

    public function storePaymentPlan(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        PaymentPlan::create($request->all());

        return redirect()->route('realEstate.settings.paymentPlans');
    }

    public function editPaymentPlan(PaymentPlan $paymentPlan)
    {
        return view('realEstates.settings.paymentPlans.edit', compact('paymentPlan'));
    }

    public function updatePaymentPlan(Request $request, PaymentPlan $paymentPlan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $paymentPlan->update($request->all());

        return redirect()->route('realEstate.settings.paymentPlans');
    }

    public function deletePaymentPlan($id)
    {
        $paymentPlan = PaymentPlan::find($id);
        $paymentPlan->delete();

        return redirect()->route('realEstate.settings.paymentPlans');
    }

    public function paymentMethods()
    {
        return view('realEstates.settings.paymentMethods.index');
    }

    public function createPaymentMethod()
    {
        return view('realEstates.settings.paymentMethods.create');
    }

    public function storePaymentMethod(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        PaymentMethod::create($request->all());

        return redirect()->route('realEstate.settings.paymentMethods');
    }

    public function editPaymentMethod(PaymentMethod $paymentMethod)
    {
        return view('realEstates.settings.paymentMethods.edit', compact('paymentMethod'));
    }

    public function updatePaymentMethod(Request $request, PaymentMethod $paymentMethod)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $paymentMethod->update($request->all());

        return redirect()->route('realEstate.settings.paymentMethods');
    }

    public function deletePaymentMethod($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        $paymentMethod->delete();

        return redirect()->route('realEstate.settings.paymentMethods');
    }


    public function paymentStatuses()
    {
        return view('realEstates.settings.paymentStatuses.index');
    }

    public function createPaymentStatus()
    {
        return view('realEstates.settings.paymentStatuses.create');
    }

    public function storePaymentStatus(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        PaymentStatus::create($request->all());

        return redirect()->route('realEstate.settings.paymentStatuses');
    }

    public function editPaymentStatus(PaymentStatus $paymentStatus)
    {
        return view('realEstates.settings.paymentStatuses.edit', compact('paymentStatus'));
    }

    public function updatePaymentStatus(Request $request, PaymentStatus $paymentStatus)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $paymentStatus->update($request->all());

        return redirect()->route('realEstate.settings.paymentStatuses');
    }

    public function deletePaymentStatus($id)
    {
        $paymentStatus = PaymentStatus::find($id);
        $paymentStatus->delete();

        return redirect()->route('realEstate.settings.paymentStatuses');
    }

    public function countries()
    {
        return view('realEstates.settings.countries.index');
    }

    public function createCountry()
    {
        return view('realEstates.settings.countries.create');
    }

    public function storeCountry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
        ]);

        Country::create($request->all());

        return redirect()->route('realEstate.settings.countries');
    }

    public function editCountry(Country $country)
    {
        return view('realEstates.settings.countries.edit', compact('country'));
    }

    public function updateCountry(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
        ]);

        $country->update($request->all());

        return redirect()->route('realEstate.settings.countries');
    }

    public function deleteCountry($id)
    {
        $country = Country::find($id);
        $country->delete();

        return redirect()->route('realEstate.settings.countries');
    }

    public function contracts()
    {
        return view('realEstates.settings.contracts.index');
    }

    public function createContract()
    {
        return view('realEstates.settings.contracts.create');
    }

    public function storeContract(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        Contract::create($request->all());

        return redirect()->route('realEstate.settings.contracts');
    }

    public function editContract(Contract $contract)
    {
        return view('realEstates.settings.contracts.edit', compact('contract'));
    }

    public function updateContract(Request $request, Contract $contract)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $contract->update($request->all());

        return redirect()->route('realEstate.settings.contracts');
    }

    public function deleteContract($id)
    {
        $contract = Contract::find($id);
        $contract->delete();

        return redirect()->route('realEstate.settings.contracts');
    }

    public function unitTypes()
    {
        return view('realEstates.settings.unitTypes.index');
    }

    public function createUnitType()
    {
        return view('realEstates.settings.unitTypes.create');
    }

    public function storeUnitType(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        UnitType::create($request->all());

        return redirect()->route('realEstate.settings.unitTypes');
    }

    public function editUnitType(UnitType $unitType)
    {
        return view('realEstates.settings.unitTypes.edit', compact('unitType'));
    }

    public function updateUnitType(Request $request, UnitType $unitType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $unitType->update($request->all());

        return redirect()->route('realEstate.settings.unitTypes');
    }

    public function deleteUnitType($id)
    {
        $unitType = UnitType::find($id);
        $unitType->delete();

        return redirect()->route('realEstate.settings.unitTypes');
    }

    public function propertyTypes()
    {
        return view('realEstates.settings.propertyTypes.index');
    }

    public function createPropertyType()
    {
        return view('realEstates.settings.propertyTypes.create');
    }

    public function storePropertyType(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        PropertyType::create($request->all());

        return redirect()->route('realEstate.settings.propertyTypes');
    }

    public function editPropertyType(PropertyType $propertyType)
    {
        return view('realEstates.settings.propertyTypes.edit', compact('propertyType'));
    }

    public function updatePropertyType(Request $request, PropertyType $propertyType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $propertyType->update($request->all());

        return redirect()->route('realEstate.settings.propertyTypes');
    }

    public function deletePropertyType($id)
    {
        $propertyType = PropertyType::find($id);
        $propertyType->delete();

        return redirect()->route('realEstate.settings.propertyTypes');
    }




}
