<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExecutiveController extends Controller
{

    public function updateLead($id){
        $leads = Lead::find($id);
        $leads->update([
            'name' => request('lname'),
            'email' => request('email'),
            'std' => request('std'),
            'number' => request('number'),
            'category_name' =>request('category_name'),
            'remark' => request('remark'),
        ]);
        return redirect()-> route('home');

    }


    public function editpage($id){
        $leads = Lead::find($id);
        $categories = Category::all();
        return view('executive.executive_editLeads', compact('leads','categories'));
    }

    public function deleteLead($id){
        $leads = Lead::find($id);
        $leads -> delete();
        return redirect()->route('home')->with('message','Lead Deleted successfully!!');
    }

    public function storeLead(Request $request){
        $categories = Category::all();
        $current_id = Auth::id();
        $lead_name = request('lname');
        $lead_email = request('email');
        $lead_std = request('std');
        $lead_number = request('number');
        $category_id = request('category_id');
        $category_name = request('category_name');
        $lead_remark = request('remark');

        // request()->validate([
        //     'name' => 'required | min:3',
        //     'email' => 'required | email ',
        //     'std' => 'required | min:2 | max: 3',
        //     'number' => 'required | min:10'
        // ]);

        Lead::create([
            'name' => $lead_name,
            'email' => $lead_email,
            'std' => $lead_std,
            'number' => $lead_number,
            'category_id' => $category_id,
            'category_name' => $category_name,
            'user_id' => $current_id,
            'remark' => $lead_remark,
        ]);
        return redirect()-> route('home')->with('message','Data added succesfully');

    }

    public function addLead(){
        $categories = Category::all();
        $current_id = Auth::id();
        return view('executive.executive_addLeads', compact('categories', 'current_id'));
    }
}
