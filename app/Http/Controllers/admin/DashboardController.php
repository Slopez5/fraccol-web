<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Http\Request;
use App\Charts\ChartJS;
use App\Charts\Highcharts;

class DashboardController extends Controller
{
    //
    function dashboard(){
        $developments = Development::with('realEstatesAgency')->get();
        
        return view('admin.home',[
            "developments" => $developments,
            "saleschart"=>$this->salesChart(),
            "developmentTypesChart"=>$this->developmentTypesChart(),
            "developmentsChart"=>$this->developmentsChart()
        ]);
    }

    function salesChart() {
        $salesChart = new ChartJS();
        $salesChart->labels(['Enero', 'Febrero', 'Marzo','Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre','Octubre', 'Noviembre', 'Diciembre']);
        $salesChart->dataset('El encanto','line',[1, 2, 3,4,5,6,7,8,9,10,11,12])->fill(false);
        return $salesChart;
    }
    function developmentTypesChart() {
        $salesChart = new ChartJS();
        $salesChart->labels(['Residencial', 'Campestre',]);
        $salesChart->dataset('DE LOA','bar',[15, 10])->fill(false);
        return $salesChart;
    }
    function developmentsChart() {
        $salesChart = new ChartJS();
        $salesChart->labels(['Enero', 'Febrero', 'Marzo','Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre','Octubre', 'Noviembre', 'Diciembre']);
        $salesChart->dataset('El encanto','pie',[1, 2, 3,4,5,6,7,8,9,10,11,12])->fill(false);
        return $salesChart;
    }
}
