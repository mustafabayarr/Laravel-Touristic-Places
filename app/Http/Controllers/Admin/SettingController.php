<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Setting::first();
        //print_r($data);
        if($data===null){ //if setting table is empty add one record
            $data = new Setting();
            $data->title = 'project';
            $data->save();
            $data = Setting::first();
        }
        return view('back.setting_edit',['data' => $data]);
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $id= $request->input('id');
        $place = Setting::find($id);

        $place->title = $request->input('title');
        $place->keywords = $request->input('keywords');
        $place->description = $request->input('description');
        $place->company = $request->input('company');
        $place->address = $request->input('address');
        $place->phone = $request->input('phone');
        $place->fax = $request->input('fax');
        $place->email = $request->input('email');
        $place->smtpserver = $request->input('smtpserver');
        $place->smtpemail = $request->input('smtpemail');
        $place->smtppassword = $request->input('smtppassword');
        $place->smtpport = $request->input('smtpport');
        $place->facebook = $request->input('facebook');
        $place->instagram = $request->input('instagram');
        $place->twitter = $request->input('twitter');
        $place->youtube = $request->input('youtube');
        $place->aboutus = $request->input('aboutus');
        $place->contact = $request->input('contact');
        $place->references = $request->input('references');
        $place->status = $request->input('status');
        $place->save();
        return redirect()->route('admin_setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
