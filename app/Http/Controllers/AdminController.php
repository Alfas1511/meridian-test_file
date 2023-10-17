<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function changeExecutive($id)
    {
        $leads = Lead::all();
        $users = User::find($id);
        return view('admin.admin_changeexecutive', compact('users', 'leads'));
    }

    public function updateExe($id)
    {
        $users = User::find($id);
        $users->update([
            'name' => request('name'),
            'email' => request('email')
        ]);
        return redirect()->route('admin.executives');
    }

    public function viewLeads()
    {
        $leads = Lead::all();
        $excludeValue = 'admin';
        $users = User::where('name', '!=', $excludeValue)->get();
        $categories = Category::all();
        return view('admin.admin_viewlLeads', compact('leads', 'users', 'categories'));

    }

    public function editExecutives($id)
    {
        $users = User::find($id);
        return view('admin.admin_editExecutives', compact('users'));
    }

    public function changeStatus($id)
    {
        $users = User::find($id);
        if ($users->usertype == 'executive' && $users->status == 'active') {
            $users->update([
                'status' => 'inactive',
            ]);
        } else if ($users->usertype == 'executive' && $users->status == 'inactive') {
            $users->update([
                'status' => 'active',
            ]);
        }
        return redirect()->back()
            ->with('message', 'Status changed successfully!!');
        ;
    }


    public function manageExecutives()
    {
        $excludeValue = 'admin';
        $users = User::where('name', '!=', $excludeValue)->get();
        return view('admin.admin_manageExecutives', compact('users'));
    }
}