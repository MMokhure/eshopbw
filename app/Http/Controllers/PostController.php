<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $desktops = Desktop::all();
        return view('desktops.index', compact('desktops'));
    }

public function create(){
    return view('desktops.create');
}

public function store(Request $request){   
        $querry = DB::table('desktops')->insert([
            'model' => $request->input('model'),
            'mserial'=> $request->input('mserial'),
            'gserial' => $request->input('gserial'),
            'ram'=> $request->input('ram'),
            'rom'=> $request->input('rom'),
            'operating_system'=> $request->input('operating_system'),
            'status'=> $request->input('status'),
            'others'=> $request->input('others')
        ]);

        if($querry){
            return back()->with('success', 'Data have been successfuly inserted');
        }else{
            return back()->with('fail', 'Something went went');
        }
}

public function storeLaptop(Request $request){   
    $querry = DB::table('laptops')->insert([
        'model' => $request->input('model'),
        'mserial'=> $request->input('mserial'),
        'gserial' => $request->input('gserial'),
        'ram'=> $request->input('ram'),
        'rom'=> $request->input('rom'),
        'operating_system'=> $request->input('operating_system'),
        'status'=> $request->input('status'),
        'others'=> $request->input('others')
    ]);

    if($querry){
        return back()->with('success', 'Data have been successfuly inserted');
    }else{
        return back()->with('fail', 'Something went went');
    }
}

public function addScanner(Request $request){   
    $querry = DB::table('scanners')->insert([
        'model' => $request->input('model'),
        'mserial'=> $request->input('mserial'),
        'gserial' => $request->input('gserial'),
        'type'=> $request->input('type'),
        'status'=> $request->input('status'),
        'others'=> $request->input('others')
    ]);

    if($querry){
        return back()->with('success', 'Data have been successfuly inserted');
    }else{
        return back()->with('fail', 'Something went went');
    }
}



    public function show(){
        return view('desktops.show',compact('desktop'));
    }

    public function edit(){
        return view('desktops.edit',compact('desktop'));
    }

    public function update(Request $request, Desktop $post){
        $request ->validate ([
            'model' => 'required',
            'mserial' => 'required',
            'gserial' => 'required',
            'ram' => 'required',
            'rom' => 'required',
            'operating_system' => 'required',
            'status' => 'required',
            'others' => 'required',
        ]);
        $desktop::update($request->all());

        return redirect()->route('desktops.index')->with('success','Post updated successfully');
    }

    public function destory(Desktop $desktop){
        $desktot->delete();

       return redirect()->route('desktops.index')
                       ->with('success','post deleted successfully');
    }
}
