<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Lead;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype == 'executive')
            {
                $current_id = Auth::id();
                $leads = Lead::all();
                return view('executive.executivehome', compact('leads', 'current_id'));
            }
            else if($usertype == 'admin')
            {
                return view('admin.adminhome');
            }
            else
            {
                return redirect()->back();
            }
        }
    }
}
