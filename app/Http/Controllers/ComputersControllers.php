<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Computer;

class ComputersControllers extends Controller
{
    public function index(){
    $computers = Computer::all();
        
        return view('ComputersViews.index',['computers'=>$computers]);
    }

  
    public function create(){
        return view('ComputersViews.create');

    }

 
    public function store(Request $request){

        $request->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>'required|integer',
        ]);

        $computer = new Computer();
        $computer->computer_name = $request->input('computer-name');
        $computer->computer_origin = $request->input('computer-origin');
        $computer->computer_price = $request->input('computer-price');
        $computer->save();
        return redirect()-> route('ComputersPath.index');

    }


    public function show($id){
         return view('ComputersViews.show',[
            'computer' =>Computer::FindOrFail($id)]);

    }


    public function edit($id){
        return view('ComputersViews.edit',[
            'computer' =>Computer::FindOrFail($id)]);

    }


    public function update(Request $request, $id){
        $request->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>'required|integer',
        ]);

        $to_computer = Computer::FindOrFail($id);
        $to_computer->computer_name = $request->input('computer-name');
        $to_computer->computer_origin = $request->input('computer-origin');
        $to_computer->computer_price = $request->input('computer-price');
        $to_computer->save();
        return redirect()-> route('ComputersPath.index');
    }
    
   
    public function destroy($id){
        $delet_computer =Computer::FindOrFail($id);
        $delet_computer->delete();
        return redirect()-> route('ComputersPath.index');
    }
}
