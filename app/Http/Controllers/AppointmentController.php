<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\User;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AppointmentController;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function appointment(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'department' => 'required',
            'doctor' => 'required',
            'message' => 'required',
        ]);
        $appointment = new Appointment;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->date = $request->date;
        $appointment->departement = $request->department;
        $appointment->doctor = $request->doctor;
        $appointment->message = $request->message;
        $res = $appointment->save();
        if($res){
            if($res)
            {
                if (session()->has('LoggedUser')) {
                    $users = User::where('id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $users
                    ];
                    return view('home', $data);
                } 
                else {
                    return redirect('/')->with('fail', 'Vous devez vous connecter');
                }
                
            }else{
            return back()->with('fail', 'Quelque chose s\'est mal passé');
        }
}
}}