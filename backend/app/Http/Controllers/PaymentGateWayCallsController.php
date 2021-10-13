<?php

namespace App\Http\Controllers;

use App\Models\PaymentGateWayCalls;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class PaymentGateWayCallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Jetstream::inertia()->render($request, 'Donate', [
            'test' => "Render the Donations form page here",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentGateWayCalls  $paymentGateWayCalls
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentGateWayCalls $paymentGateWayCalls)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentGateWayCalls  $paymentGateWayCalls
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentGateWayCalls $paymentGateWayCalls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentGateWayCalls  $paymentGateWayCalls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentGateWayCalls $paymentGateWayCalls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentGateWayCalls  $paymentGateWayCalls
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentGateWayCalls $paymentGateWayCalls)
    {
        //
    }
}
