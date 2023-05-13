<?php

namespace App\Http\Controllers;

use App\Models\trad;
use App\Http\Requests\StoretradRequest;
use App\Http\Requests\UpdatetradRequest;

class TradController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trads = trad::latest()->get();
        return view("trads", compact('trads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretradRequest $request)
    {

        trad::create([
            "user_id" => $request->user_id,
            "trade_type" => $request->trad_type,
            "open_price" => $request->open_price,
            "position_amount" => $request->amount,
            "status" => 'open',
            "market" => $request->market,
            "tp" => $request->tp,
            "sl" => $request->sl,
            "user_id" => 1,
        ]);
        return redirect()->route("trads");
    }

    /**
     * Display the specified resource.
     */
    public function show(trad $trad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($trad)
    {
        $trad = trad::findOrFail($trad);
        return view("edit", compact('trad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetradRequest $request, $trad)
    {
        $trad = trad::findOrFail($trad);
        $trad->user_id = $request->user_id;
        $trad->trade_type = $request->trad_type;
        $trad->open_price = $request->open_price;
        $trad->position_amount = $request->amount;
        $trad->status = 'open';
        $trad->market = $request->market;
        $trad->tp = $request->tp;
        $trad->sl = $request->sl;
        $trad->user_id = 1;
        $trad->save();
        return redirect()->route("trads");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($trad)
    {
        trad::findOrFail($trad)->delete();
        return redirect()->route("trads");
    }
}
