<?php

namespace App\Http\Controllers;

use App\Models\Collateral;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request) {
        return view('pages.frontend.index');
    }

    public function store(Request $request) {

        $data = $request->all();
        Collateral::create($data);

        return redirect()->route('car_vehicle')->with('success', 'Data Berhasil diMasukkan!');
    }
}
