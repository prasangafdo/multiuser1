<?php

namespace App\Http\Controllers;

use App\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        echo "This is index";
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
        $sender =Sender::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'sender_address'=>$request->input('sender_address'),
            'password'=>$request->input('password'),//Not encrypting. Need to check. 
            //Add approval later              
        ]);

        if($sender){
            return redirect()->route('senders.index');
        }
        // echo $request->input('name'). "<br>";
        // echo $request->input('email'). "<br>";
        // echo $request->input('sender_address'). "<br>";
        // echo $request->input('password'). "<br>";
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
       //Redirect to login after registration
        
    }
    public function login()
    {
       return view('senders.login');
       //Remove this route later
      // echo "This is login";
        
    }

    public function log(Request $request)
    {
      // return view('senders.login');
       //Remove this route later
       $email = $request->input('email');
       $password = $request->input('password');

      $select = DB::select('select * from senders where email=? and password=?', [$email, $password]);//Traditional select query
       //print_r ($select);

       if(count($select)){//Counting data
            //These codes are just for debugging
            // echo "<h2> You are logged in. <h2/>";
            // foreach ($select as $senders){
            // echo $senders->name;   
            //}
            return view('senders.show', ['senders'=> $select]);    
       }
       else
       return back();
    }
}
