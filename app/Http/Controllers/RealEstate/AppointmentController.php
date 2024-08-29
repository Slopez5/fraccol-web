<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Development;
use App\Models\Lead;
use App\Models\User;
use App\Models\Appointment;
use App\Classes\RoleType;
use App\Models\ActivityType;

class AppointmentController extends Controller
{
    // Appointments

    public function createAppointment()
    {
        $developments = Development::all();
        $leads = Lead::all();
        $leadAgents = User::where('role_id', RoleType::REAL_ESTATE_AGENT )->get();
        $saleClosers = User::where('role_id', RoleType::DEVELOPMENT_MANAGER)->get();
        return view('realEstates.appointments.create', compact('developments', 'leads', 'leadAgents', 'saleClosers'));
    }

    public function storeAppointment(Request $request)
    {
        $request->validate([
            'appointment_date' => 'required'
        ]);
        $appointment = new Appointment();
        $appointment->development_id = $request['development_id'];
        if ($request['lead_id']) {
            $lead = Lead::find($request['lead_id']);
            //$appointment->lead_id = $request->lead_id;
            $appointment->customer_name =  $lead->first_name . ' ' . $lead->last_name;
            $appointment->customer_phone = $lead->phone;
            $appointment->customer_email = $lead->email;
        } else {
            $appointment->customer_name = $request['customer_name'];
            $appointment->customer_phone = $request['customer_phone'];
            $appointment->customer_email = $request['customer_email'];
        }
        $appointment->appointment_date = $request['appointment_date'];
        $appointment->status = $request['status'];
        $appointment->notes = $request['notes'];

        if ($request['lead_agent_id']) {
            $appointment->lead_agent_id = $request['lead_agent_id'];
        }
        if ($request['sale_closer_id']) {
            $appointment->sale_closer_agent_id = $request['sale_closer_id'];
        }

        $appointment->save();
        return redirect()->route('realEstate.appointments');
    }

    public function editAppointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->development;
        $developments = Development::all();
        return view('realEstates.appointments.edit', compact('appointment', 'developments'));
    }

    public function updateAppointment(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        $appointment->development_id = $request['development_id'];
        $appointment->customer_name = $request['customer_name'];
        $appointment->customer_phone = $request['customer_phone'];
        $appointment->customer_email = $request['customer_email'];
        $appointment->appointment_date = $request['appointment_date'];
        $appointment->notes = $request['notes'];
        $appointment->save();
        return redirect()->route('realEstate.appointments');
    }

    public function deleteAppointment($id)
    {
        return redirect()->route('realEstate.appointments');
    }

    public function showAppointment($id)
    {
        $appointment = Appointment::find($id);
        $activities = Appointment::all();
        $leads = Lead::all();
        $leadAgents = User::where('role_id', RoleType::REAL_ESTATE_AGENT )->get();
        $saleClosers = User::where('role_id', RoleType::DEVELOPMENT_MANAGER)->get();
        $activityTypes = ActivityType::all();
        return view('realEstates.appointments.show', compact('appointment', 'activities', 'leads', 'leadAgents', 'saleClosers', 'activityTypes'));
    }
}
