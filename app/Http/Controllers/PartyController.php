<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Partie;
use DB;

class PartyController extends Controller
{
    public function index(){
        $parties = Partie::all();
        return view('party.index',compact('parties'));
    }
    public function add(){
        return view('party.add');
    }
    public function create(Request $request){
        $request -> validate([
            'party_type' => 'required',
            'full_name'=>'required',
            'phone_no' => 'required|max:11',
            'branch_address' =>'required|max:255',
            'ifsc_code' => 'required',
        ]);
        $data = $request->all();

        unset($data['_token']);
        Partie::create($data);
        //dd($test);
        return redirect()->route('party.add')->withStatus("Party create successfully");
    }
    // public function edit($id){
    //     $userinfo = Userinfo::findOrFail($id);
    //     return view("dashboard.edit", compact('userinfo'));
    // }
    public function edit($id){
        $data = Partie::findOrFail($id);
        return view("party.edit",compact('data'));
    }
    // public function update($id,Request $request){
    //     $request -> validate([
           
    //     ]);

    //     $data =$request->all();
    //     unset($data['_token']);
    //     unset($data['_method']);
    //     Partie::where('id',$id)->update($data);
    //     //Partie::update($data);
    //     return redirect()->route('party.index')->withStatus("Party update successfully");
       
    // }
    public function update(Request $request){
        $partyid = $request->id;
         $request->validate([
            'party_type' => 'required',
            'full_name'=>'required',
            'phone_no' => 'required|max:11',
            'branch_address' =>'required|max:255',
            'ifsc_code' => 'required',
        ]);
        Partie::findOrFail($partyid)->update([
            'party_type' => $request->party_type,
            'full_name' => $request->full_name,
            'phone_no' => $request->phone_no,
            'branch_address' => $request->branch_address,
            'ifsc_code' =>$request->ifsc_code,
            'bank_name' => $request->bank_name,
            'account_no' => $request->account_no,
            'address' => $request->address,
            'account_holder_name' =>$request->account_holder_name
        ]);
        return redirect()->route('party.index')->withStatus("Party update successfully");
    
    }
    public function delete($id){
        Partie::findOrFail($id)->delete();
        return redirect()->route('party.index')->withStatus("Party update successfully");
       }
}
