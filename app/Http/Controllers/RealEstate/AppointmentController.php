<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
     // Appointments

     public function createAppointment()
     {
         return view('realEstates.appointments.create');
     }
 
     public function storeAppointment(Request $request)
     {
         return redirect()->route('realEstate.appointments');
     }
 
     public function editAppointment($id)
     {
         return view('realEstates.appointments.edit');
     }
 
     public function updateAppointment(Request $request, $id)
     {
         return redirect()->route('realEstate.appointments');
     }
 
     public function deleteAppointment($id)
     {
         return redirect()->route('realEstate.appointments');
     }
 
     public function showAppointment($id)
     {
         return view('realEstates.appointments.show');
     }
}
