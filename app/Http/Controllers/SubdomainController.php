<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\DashboardController;
use App\Models\Development;
use App\Models\Subdomain;
use App\Models\User;
use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    //

    function index($subdomain)
    {
        $subdomain = Subdomain::where('subdomain', $subdomain)->first();
        $type = $subdomain->subdomainable_type;

        switch ($type) {
            case "App\Models\User":
                $user = User::find($subdomain->subdomainable->id);
                return $this->getUserType($user);
                break;
            case "App\Models\Development":
                $development = Development::find($subdomain->subdomainable->id);
                return view('welcome');
            default:
                # code...
                break;
        }
    }

    private function getUserType(User $user)
    {
        switch ($user->role->id) {
            case 1:
                //admin
                $dashboard = new DashboardController();
                return $dashboard->dashboard();
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                break;
            case 5:
                break;
            case 6:
                break;
            default:

                break;
        };
    }

    function dashboard($subdomain)
    {
        $subdomain = Subdomain::where('subdomain', $subdomain)->get();
    }
}
