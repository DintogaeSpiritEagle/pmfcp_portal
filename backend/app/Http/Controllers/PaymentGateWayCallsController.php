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
        $success = "Successful payment.";
        $failed = "Failed payment.";
        $testvar = 'just testing';

        return Jetstream::inertia()->render($request, 'Donations/Donate', [
            'test' => $success,
            'test2' => $failed,
            'test3' => $testvar
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

        // 1. Make an IPG request call to the endoint
        $endpoint_request_url = config('ipg.request_url_endpoint');
        $endpoint_callback_url = config('ipg.callback_url_endpoint');

        // 2. Get the response and save it in a json structure
        // 3. If Success payment, then save response in the DB, and send confirmation message to the screen.
        // 4. If Failed payment, then save response in the DB, and send failure message to the screen.

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
