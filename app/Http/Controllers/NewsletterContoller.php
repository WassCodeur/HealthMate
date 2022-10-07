<?php

namespace App\Http\Controllers;
use App\models\Newsletter;
use Illuminate\Http\Request;
use App\models\User;
use App\controller\NewsletterController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\controller\UserAuthController;

class NewsletterContoller extends Controller
{
    public function newsletter(request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters',
        ]);
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $res = $newsletter->save();
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