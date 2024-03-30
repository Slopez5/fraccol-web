<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   // Users
   public function createUser()
   {
       return view('realEstates.users.create');
   }

   public function storeUser(Request $request)
   {
       return redirect()->route('realEstate.users');
   }

   public function editUser($id)
   {
       return view('realEstates.users.edit');
   }

   public function updateUser(Request $request, $id)
   {
       return redirect()->route('realEstate.users');
   }

   public function deleteUser($id)
   {
       return redirect()->route('realEstate.users');
   }

   public function showUser($id)
   {
       return view('realEstates.users.show');
   }
}
