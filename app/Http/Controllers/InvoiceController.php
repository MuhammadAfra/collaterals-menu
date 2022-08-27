<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collateral;

class InvoiceController extends Controller
{
    public function index(Request $request) {
        return view('pages.frontend.index');
    }

    public function create(Request $request) {
        return view('pages.frontend.invoice');
    }

    public function store(Request $request) {
        // return $request->all();

        $data = $request->all();
        Collateral::create($data);

        return redirect()->route('invoice');
    }
}
