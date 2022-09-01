<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collateral;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function index(Request $request) {
        return view('pages.frontend.index');
    }


    //UTAMA

    public function motor_vehicle(Request $request) {
        $nilai_motor_vehicles = DB::table('collaterals')->where('nilai_motor_vehicle', '>', 1)->get();
        // $dataMotorVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.motor_vehicle', compact('coll_id', 'nilai_motor_vehicles'));
    }

    public function car_vehicle(Request $request) {
        $nilai_car_vehicles = DB::table('collaterals')->where('nilai_car_vehicle', '>', 1)->get();
        // $dataCarVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.car_vehicle', compact('nilai_car_vehicles', 'coll_id'));
    }

    public function house(Request $request) {
        $nilai_houses = DB::table('collaterals')->where('nilai_house_land', '>', 1)->get();
        // $dataHouse = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.house', compact('nilai_houses', 'coll_id'));
    }

    public function inventory(Request $request) {
        $nilai_inve = DB::table('collaterals')->where('nilai_inv', '>', 1)->get();
        // $dataInventory = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.inventory' , compact('nilai_inve', 'coll_id'));
    }

    public function invoice(Request $request) {
        $nilai_invoices = DB::table('collaterals')->where('nilai_invoice', '>', 1)->get();
        // $dataInvoice = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.invoice', compact('nilai_invoices', 'coll_id'));
    }

    public function corporate(Request $request) {
        $nilai_corporates = DB::table('collaterals')->where('nilai_corporate_guarantie', '>', 1)->get();
        // $dataCorporate = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.corporate', compact('nilai_corporates', 'coll_id'));
    }

    //TAMBAHAN

    public function motor_vehicle_tambahan(Request $request) {
        $nilai_motor_vehicles = DB::table('collaterals')->where('nilai_motor_vehicle', '>', 1)->get();
        // $dataMotorVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.motor_vehicle_tambahan', compact('nilai_motor_vehicles', 'coll_id'));
    }
    public function car_vehicle_tambahan(Request $request) {
        $nilai_car_vehicles = DB::table('collaterals')->where('nilai_car_vehicle', '>', 1)->get();
        // $dataCarVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.car_vehicle_tambahan',compact('nilai_car_vehicles', 'coll_id'));
    }
    public function house_tambahan(Request $request) {
        $nilai_houses = DB::table('collaterals')->where('nilai_house_land', '>', 1)->get();
        // $dataHouse = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.house_tambahan',compact('nilai_houses', 'coll_id'));
    }
    public function invoice_tambahan(Request $request) {
        $nilai_invoices = DB::table('collaterals')->where('nilai_invoice', '>', 1)->get();
        // $dataInvoice = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.invoice_tambahan', compact('nilai_invoices', 'coll_id'));
    }
    public function inventory_tambahan(Request $request) {
        $nilai_inve = DB::table('collaterals')->where('nilai_inv', '>', 1)->get();
        // $dataInventory = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.inventory_tambahan', compact('nilai_inve', 'coll_id'));
    }
    public function corporate_tambahan(Request $request) {
        $nilai_corporates = DB::table('collaterals')->where('nilai_corporate_guarantie', '>', 1)->get();
        // $dataCorporate = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        return view('pages.frontend.corporate_tambahan', compact('nilai_corporates', 'coll_id'));
    }
}


