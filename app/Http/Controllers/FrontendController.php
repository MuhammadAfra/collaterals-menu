<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collateral;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.frontend.index');
    }


    //UTAMA

    public function motor_vehicle(Request $request)
    {
        $nilai_motor_vehicles = DB::table('collaterals')->where('nilai_motor_vehicle', '>', 1)->get();
        // $dataMotorVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;
        // $debitur_id = Collateral::pluck('debitur_id')->last();
        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.motor_vehicle', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_motor_vehicles'));
    }

    public function car_vehicle(Request $request)
    {
        $nilai_car_vehicles = DB::table('collaterals')->where('nilai_car_vehicle', '>', 1)->get();
        // $dataCarVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.car_vehicle', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_car_vehicles'));
    }

    public function house(Request $request)
    {
        $nilai_houses = DB::table('collaterals')->where('nilai_house_land', '>', 1)->get();
        // $dataHouse = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.house', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_houses'));
    }

    public function inventory(Request $request)
    {
        $nilai_inve = DB::table('collaterals')->where('nilai_inv', '>', 1)->get();
        // $dataInventory = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.inventory', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_inve'));
    }

    public function invoice(Request $request)
    {
        $nilai_invoices = DB::table('collaterals')->where('nilai_invoice', '>', 1)->get();
        // $dataInvoice = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.invoice', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_invoices'));
    }

    public function corporate(Request $request)
    {
        $nilai_corporates = DB::table('collaterals')->where('nilai_corporate_guarantie', '>', 1)->get();
        // $dataCorporate = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.corporate', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_corporates'));
    }

    //TAMBAHAN

    public function motor_vehicle_tambahan(Request $request)
    {
        $nilai_motor_vehicles = DB::table('collaterals')->where('nilai_motor_vehicle', '>', 1)->get();
        // $dataMotorVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.motor_vehicle_tambahan', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_motor_vehicles'));
    }
    public function car_vehicle_tambahan(Request $request)
    {
        $nilai_car_vehicles = DB::table('collaterals')->where('nilai_car_vehicle', '>', 1)->get();
        // $dataCarVehicle = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.car_vehicle_tambahan', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_car_vehicles'));
    }
    public function house_tambahan(Request $request)
    {
        $nilai_houses = DB::table('collaterals')->where('nilai_house_land', '>', 1)->get();
        // $dataHouse = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.house_tambahan', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_houses'));
    }
    public function invoice_tambahan(Request $request)
    {
        $nilai_invoices = DB::table('collaterals')->where('nilai_invoice', '>', 1)->get();
        // $dataInvoice = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.invoice_tambahan', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_invoices'));
    }
    public function inventory_tambahan(Request $request)
    {
        $nilai_inve = DB::table('collaterals')->where('nilai_inv', '>', 1)->get();
        // $dataInventory = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.inventory_tambahan', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_inve'));
    }
    public function corporate_tambahan(Request $request)
    {
        $nilai_corporates = DB::table('collaterals')->where('nilai_corporate_guarantie', '>', 1)->get();
        // $dataCorporate = Collateral::all();
        $coll_id = Collateral::pluck('coll_id')->last() + 1;

        $produk_id = DB::table('product')->pluck('id')->last();
        $debitur_id = DB::table('debitur')->pluck('id')->last();
        $partner_id = DB::table('partner')->pluck('id')->last();

        return view('pages.frontend.corporate_tambahan', compact('coll_id', 'partner_id', 'produk_id', 'debitur_id', 'nilai_corporates'));
    }
}
