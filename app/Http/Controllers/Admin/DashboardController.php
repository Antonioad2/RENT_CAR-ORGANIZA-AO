<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Car;
use App\Model\Driver;
use App\Model\Reserve;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('_admin.dashboard.crm.index');
    }
    public function analytics()
    {
        return view('_admin.dashboard.Analytics.index');
    }
    public function showSalesReport()
    {
        return view('_admin.reports.reserves.index');
    }
    public function reportsLeads()
    {
        //CONTAR TOTAL DE CARROS
        $totalCars = Car::count();

        //Carros com lugares maior que 8
        $carsWithMoreThanEigthSeats = Car::where('number_of_seats', '>', 8)->count();

        //Carros com lugares menor ou igual a 8
        $carsWithEightOrFewerSeats = Car::where('number_of_seats', '<=', 8)->count();

        //CATEGORIAS DE CARROS
        $luxuryCars = Car::where('category', 'Luxury')->count();
        $standardCars = Car::where('category', 'Standard')->count();
        $economyCars = Car::where('category', 'Economy')->count();

        //CALCULAR PORCENTAJES
        $luxuryPercentage = $totalCars > 0 ? round(($luxuryCars / $totalCars) * 100, 2) : 0;
        $standardPercentage = $totalCars > 0 ? round(($standardCars / $totalCars) * 100, 2) : 0;
        $economyPercentage = $totalCars > 0 ? round(($economyCars / $totalCars) * 100, 2) : 0;

        return view('_admin.reports.cars.index', compact(
            'totalCars',
            'luxuryPercentage',
            'standardPercentage',
            'economyPercentage',
            'carsWithMoreThanEigthSeats',
            'carsWithEightOrFewerSeats'
        ));
    }
    public function reportsProject()
    {
        //motorista sexo masculino
        $driversMale = Driver::where('gender','male')->count();
        //motorista sexo feminino   
        $driversFemale = Driver::where('gender','female')->count();
        //total de motoristas
        $totalDrivers = Driver::count();
        //motorista para reservas
        $driversReserved = Reserve::whereNotNull('driver_id')->distinct('driver_id')->count('driver_id');
        

        return view('_admin.reports.drivers.index', compact('driversMale','driversFemale','totalDrivers','driversReserved'));
    }
    public function reportsSales()
    {
        // Calcular o total de vendas (soma do total_amount das reservas)
        $totalReserves = Reserve::whereBetween('start_date', [
            now()->startOfMonth(),
            now()->endOfMonth()
        ])->sum('total_amount');

        // Passar a variável para a view
        return view('_admin.reports.reserves.index', compact('totalReserves'));
    }
        
   
}
