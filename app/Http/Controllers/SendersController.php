<?php

namespace App\Http\Controllers;

use App\Sender;
use Illuminate\Http\Request;

class SendersController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $parcel =Sender::create([
        //     'item'=>$request->input('item'),
        //     'pickup_address'=>$request->input('pickup_address'),
        //     'pickup_state'=>$request->input('pickup_state'),
        //     'delivery_address'=>$request->input('delivery_address'),
        //     'delivery_state'=>$request->input('delivery_state'),               
        //     'status'=>'available',               
        // ]);

        // if($parcel_sender){
        //     return redirect()->route('parcels.show', ['parcel'=>$parcel->id])
        //     ->with('success', 'Parcel added successfully');
        // }
        echo $request->input('name'). "<br>";
        echo $request->input('email'). "<br>";
        echo $request->input('sender_address'). "<br>";
        echo $request->input('password'). "<br>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function show(Sender $sender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function edit(Sender $sender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sender $sender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sender $sender)
    {
        //
    }

    public function register()
    {
       return view('senders.register');
        
    }
}
