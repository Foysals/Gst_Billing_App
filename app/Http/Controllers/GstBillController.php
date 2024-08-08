<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gst_bills;
use DB;

class GstBillController extends Controller
{
    public function index(){
        return view("gst-bill.index");
    }
    public function add(){
        return view("gst-bill.add");
    }
    public function create(){
        $request -> validate([
            'invoice_date'=>'required',
            'invoice_no'=>'required',
            'total_amount'=> 'required',
        ]);
        $gstData = $request->all();
        unset($gstData['_token']);
        Gst_bills::create($gstData);
        return redirect()->route('gst.add')->withStatus("Party create successfully");
    }
    public function print(){
        return view("gst-bill.print");
    }
}
