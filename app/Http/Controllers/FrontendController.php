<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collateral;

class FrontendController extends Controller
{
    public function index(Request $request) {
        return view('pages.frontend.index');
    }

    public function motor_vehicle(Request $request) {
        $dataMotorVehicle = Collateral::all();
        return view('pages.frontend.motor_vehicle', compact('dataMotorVehicle'));
    }

    public function car_vehicle(Request $request) {
        $dataCarVehicle = Collateral::all();
        return view('pages.frontend.car_vehicle', compact('dataCarVehicle'));
    }

    public function house(Request $request) {
        $dataHouse = Collateral::all();
        return view('pages.frontend.house', compact('dataHouse'));
    }

    public function inventory(Request $request) {
        $dataInventory = Collateral::all();
        return view('pages.frontend.inventory' , compact('dataInventory'));
    }

    public function invoice(Request $request) {
        $dataInvoice = Collateral::all();
        return view('pages.frontend.invoice', compact('dataInvoice'));
    }

    public function corporate(Request $request) {
        $dataCorporate = Collateral::all();
        return view('pages.frontend.corporate', compact('dataCorporate'));
    }
}


