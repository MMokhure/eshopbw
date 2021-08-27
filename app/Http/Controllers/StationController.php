<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class StationController extends Controller
{
    public function addStation(Request $request){   
        $querry = DB::table('stations')->insert([
            'station_name' => $request->input('station_name'),
            'station_location'=> $request->input('station_location'),
            'No_of_workrooms' => $request->input('No_of_workrooms')
        ]);

        if($querry){
            return back()->with('success', 'Station have been successfuly inserted');
        }else{
            return back()->with('fail', 'Something went went');
        }
}

}
