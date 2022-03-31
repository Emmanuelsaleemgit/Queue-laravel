<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\loginEmail;

class attendeesControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return "hello";
        // dispatch(function(){
          
        //         $details = [
        //           'subject' => 'your are invite in the event of ',
        //           'name' => 'emmanuel' ,
        //           'event' => 'your are invite in the event of ',
        //         ];

        //         Mail::to('emmanuel.saleem@448.studio')->send(new loginEmail($details));
            

        // })->delay(now()->addSeconds(value:3));


        // dispatch(new \App\Jobs\SendEmailJob())->delay(now()->addSeconds(value:50));
        $details = [
                      'subject' => 'your are invite in the event of ',
                      'name' => 'emmanuel' ,
                      'email' => 'emmanuel.saleem@448.studio' ,
                      'event' => 'your are invite in the event of ',
                    ];
    
        \App\Jobs\SendEmailJob::dispatch($details)->delay(now()->addSeconds(value:50));


        // $details = [
        //     'subject' => 'your are invite in the event of ',
        //     'name' => 'emmanuel' ,
        //     'event' => 'your are invite in the event of ',
        //   ];

        //   Mail::to('emmanuel.saleem@448.studio')->send(new loginEmail($details));
          return "email send to the gaven address";
      
       
            
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
