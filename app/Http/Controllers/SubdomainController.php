<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Development;
use App\Models\Subdomain;
use App\Models\User;
use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    //
    public $page = 1;
    public $pages = 1;

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
                return view('landing_page.development', ["development" => $development]);
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

    function dashboard($subdomain, $subdomain2)
    {
        $subdomain = Subdomain::where('subdomain', $subdomain . "." . $subdomain2)->first();
        $type = $subdomain->subdomainable_type;

        switch ($type) {
            case "App\Models\User":
                $user = User::find($subdomain->subdomainable->id);
                return $this->getUserType($user);
                break;
            case "App\Models\Development":
                $development = Development::find($subdomain->subdomainable->id);
                return view('landing_page.development', ["development" => $development]);
            default:
                # code...
                break;
        }
    }

    public function syncSubdomains()
    {
        $subdomains = Subdomain::all();
        $subdomainsLocal = $this->getSubdomainsLocal($subdomains);
        if ($subdomainsLocal) {
            foreach ($subdomainsLocal as $key => $subdomain) {
                $this->addDNS($subdomain->subdomain);
            }
        } else {
            return "sync success";
        }
    }

    private function getSubdomainsLocal($subdomains)
    {
        $response = $this->getSubdomains($this->page);
        $linodeSubdomains = collect(json_decode(json_encode($response->data), true));
        $this->page = $response->page;
        $this->pages = $response->pages;

        $subdomainsNotFound = collect();

        foreach ($subdomains as $key => $subdomain) {

            $subdomainFound = count($linodeSubdomains->where('name', strtolower($subdomain->subdomain))->values()) > 0 ? true : false;
            if (!$subdomainFound) {
                $subdomainsNotFound->push($subdomain);
            }
        }
        if (count($subdomainsNotFound) > 0) {
            if ($this->page < $this->pages) {
                logger("entre");
                $this->page++;
                $subdomainsNotFound->push($this->getSubdomainsLocal($subdomainsNotFound));
            }
        }


        if (count($subdomainsNotFound) > 0) {
            return $subdomainsNotFound;
        }
        return null;
    }

    private function getSubdomains($page)
    {

        $url = 'https://api.linode.com/v4/domains/2335969/records?page=' . $page;
        $header = array("Authorization: Bearer 3314a935d434235467b5b3ab99d82ac32b28ebc5ed0a1090850d732b4fe0cc2a", "Content-Type: application/json");
        $response = CurlHelper::call($url, 'GET', [], $header);
        return json_decode($response["response"]);
    }

    private function addDNS($subdomain)
    {
        $url = 'https://api.linode.com/v4/domains/2335969/records';
        $data = [
            'type' => 'A',
            'name' => strtolower($subdomain),
            'target' => '45.79.23.241',
            'priority' => 0,
            'weight' => 0,
            'port' => 0,
            'service' => null,
            'protocol' => null,
            'ttl_sec' => 0
        ];
        $header = array("Authorization: Bearer 3314a935d434235467b5b3ab99d82ac32b28ebc5ed0a1090850d732b4fe0cc2a", "Content-Type: application/json");
        $response = CurlHelper::call($url, 'POST', $data, $header);
        if ($response["success"]) {
            return $response['response'];
        }
        logger($response['response']);
    }
}
