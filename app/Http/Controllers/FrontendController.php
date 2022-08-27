<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request) {
        return view('pages.frontend.index');
    }

    public function car_vehicle(Request $request) {
        return view('pages.frontend.car_vehicle');
    }

    public function motor_vehicle(Request $request) {
        return view('pages.frontend.motor_vehicle');
    }

    public function house(Request $request) {
        return view('pages.frontend.house');
    }

    public function inventory(Request $request) {
        return view('pages.frontend.inventory');
    }

    public function invoice(Request $request) {
        return view('pages.frontend.invoice');
    }

    public function corporate(Request $request) {
        return view('pages.frontend.corporate');
    }
}


