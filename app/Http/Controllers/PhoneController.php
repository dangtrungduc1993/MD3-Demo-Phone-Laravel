<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhoneController extends Controller
{

    public function index()
    {
        $phones = DB::table("phones")->get();
        return view('phone.list',compact('phones'));
    }

    public function create()
    {
        return view('phone.create');
    }

    public function store(Request $request)
    {
        $data = $request->only('name','quantity','price');
        DB::table('phones')->insert($data);
        return redirect()->route('phone.list');
    }

    public function show($id)
    {
        $phone = DB::table('phones')->where('id',$id)->first();
        return view('phone.detail',compact('phone'));
    }

    public function edit($id)
    {
        return view('phone.update');
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('name','quantity','price');
        DB::table('phones')->where('id',$id)->update($data);
        return redirect()->route('phone.list');
    }

    public function destroy($id)
    {
        //
    }
}
