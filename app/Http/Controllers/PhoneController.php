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
        return redirect()->route('phone.index');
    }

    public function show($id)
    {
        $phone = DB::table('phones')->where('id',$id)->first();
        return view('phone.detail',compact('phone'));
    }

    public function edit($id)
    {
        $phone = DB::table('phones')->where('id',$id)->first();

        return view('phone.update',compact(['id','phone']));

    }

    public function update(Request $request, $id)
    {

        $data = $request->only('name','quantity','price');
//        dd($data);
        DB::table('phones')->where('id',$id)->update($data);
        return redirect()->route('phone.index');
    }

    public function destroy($id)
    {
        DB::table('phones')->where('id',$id)->delete();
        return redirect()->route('phone.index');
}}
