<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CouriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view();
        echo "This is courier index";
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
        $sender =Courier::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'courier_address'=>$request->input('courier_address'),
            'password'=>$request->input('password'),//Not encrypting. Need to check. 
            //Add approval later              
        ]);

        if($sender){
            return redirect()->route('couriers.login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $courier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courier $courier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courier $courier)
    {
        //
    }

    public function register()
    {
       return view('couriers.register');
       //Redirect to login after registration
        
    }
    public function login()
    {
       return view('couriers.login');
       //Remove this route later
      // echo "This is login";
        
    }

    public function home(Request $request)
    {
      // return view('senders.login');
       //Remove this route later
       $email = $request->input('email');
       $password = $request->input('password');

      $select = DB::select('select * from couriers where email=? and password=?', [$email, $password]);//Traditional select query
       //print_r ($select);

       if(count($select)){//Counting data
            //These codes are just for debugging
            // echo "<h2> You are logged in. <h2/>";
            // foreach ($select as $senders){
            // echo $senders->name;   
            //}
            return view('couriers.show', ['couriers'=> $select]);    
       }
       else
       return back();
    }
}
