<?php

namespace App\Http\Controllers;

use App\Price;
use App\Employees;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments   = Payment::all();
        $prices     = Price::all();
        $employeess = Employees::all();

        return view('data.payment.index', compact('payments','prices','employeess'));
    }
    public function create()
    {
        $payments   = Payment::all();
        $prices     = Price::all();
        $employeess = Employees::all();
        return view('data.payment.create', compact('payments','prices','employeess'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'employees_id'  => 'required',
            'price_id'      => 'required',
            'no_rek'        => 'required',
            'tgl_transfer'  => 'required',
        ]);
        $payments = Payment::create([
            'employees_id'    => $request->employees_id,
            'price_id'        => $request->price_id,
            'no_rek'          => $request->no_rek,
            'tgl_transfer'    => $request->tgl_transfer,
        ]);

        $payments->save();

        return redirect()->back()->with(['success' => 'data pembayaran berhasil dibuat' ]);
    }
}
