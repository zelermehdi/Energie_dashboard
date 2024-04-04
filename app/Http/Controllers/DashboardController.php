<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Alert;
use App\Models\Maintenance;
use App\Models\Installation;
use Illuminate\Http\Request;
use App\Models\EnergyProduction;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $installationsCount = Installation::count();
        $recentEnergyProduction = EnergyProduction::orderBy('date', 'desc')->take(10)->get();
        $activeAlertsCount = Alert::where('status', 'open')->count();
        $usersCount = User::count(); 
        $maintenanceCount = Maintenance::where('status', '!=', 'completed')->count(); 
        $totalEnergyGenerated = EnergyProduction::sum('energy_generated'); 

        return view('dashboard', compact('installationsCount', 'recentEnergyProduction', 'activeAlertsCount', 'usersCount', 'maintenanceCount', 'totalEnergyGenerated'));
    }
    public function energyProductionChart(Request $request)
{
    App::setLocale('fr');
    
    $end = $request->input('end_date') ? Carbon::createFromFormat('Y-m-d', $request->input('end_date')) : Carbon::now();
    $start = $request->input('start_date') ? Carbon::createFromFormat('Y-m-d', $request->input('start_date')) : $end->copy()->subMonths(24);
    
    $energyProductions = EnergyProduction::whereBetween('date', [$start, $end])
                                ->orderBy('date', 'asc')
                                ->get();
    
    if ($energyProductions->isEmpty()) {
        // Aucune occurrence trouvée
        Log::info('Aucune production d\'énergie trouvée pour la période spécifiée.', ['start' => $start, 'end' => $end]);
        Session::flash('message', 'Aucune occurrence trouvée pour la période spécifiée.');
        Session::flash('alert-type', 'info');
    } else {
        // Des occurrences ont été trouvées
        Log::info('Productions d\'énergie récupérées avec succès.', ['count' => $energyProductions->count()]);
        Session::flash('message', 'Productions d\'énergie récupérées avec succès. Nombre d\'occurrences : ' . $energyProductions->count());
        Session::flash('alert-type', 'success');
    }
    
    $labels = [];
    $data = [];
    
    foreach ($energyProductions as $production) {
        $carbonDate = Carbon::parse($production->date);
        $labels[] = $carbonDate->format('F Y');
        $data[] = $production->energy_generated;
    }
    
    $chartData = [
        'labels' => $labels,
        'datasets' => [
            [
                'label' => "Production d'énergie (kWh)",
                'data' => $data,
                'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                'borderColor' => 'rgba(54, 162, 235, 1)',
                'borderWidth' => 1,
            ],
        ],
    ];
    
    return view('charts.energy_production', compact('chartData'));
}
}

