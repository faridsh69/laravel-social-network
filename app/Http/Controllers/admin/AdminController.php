<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getGallery()
    {
    	$gallery = \App\Models\Gallery::get();
    	return view('admin.gallery')->withGallery($gallery);
    }

    public function postGallery(Request $request)
    {
    	\Validator::make($request->all(), [
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'description' => 'required',
            'manager' => 'required',
        ])->validate();
        $data = $request->all();
        $user = \App\Models\Gallery::create([
            'title' => $data['title'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'description' => $data['description'],
            'manager' => $data['manager'],
        ]);
        $request->session()->flash('alert-success', 'گالری شما با موفقیت ثبت شد.');

        return redirect('/admin/gallery');
    } 
}
