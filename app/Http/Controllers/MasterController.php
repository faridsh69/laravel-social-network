<?php

namespace App\Http\Controllers;
use App\Notifications\ForgetPassword;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function getOrder()
    {
        return view('order');
    }
    
    public function getArtWork($id = false)
    {
        if($id)
        {
            return view('art-work-view');
        }
        else{
            return view('art-work');
        }
    }   

    public function getArtist($id = false)
    {
        if($id)
        {
            $gallery = "";
            return view('artist-view')->withGallery($gallery);
        }
        else{
            $galleries ='';
            return view('artist');
        }
    }

    public function getGallery($id = false)
    {
        if($id)
        {
            $gallery = "";
            return view('gallery-view')->withGallery($gallery);
        }
        else{
            $galleries = '';
            return view('gallery')->withGalleries($galleries);
        }
    }   

    public function getExibition()
    {
        return view('exibition');
    }

    public function getHome() 
    {
        \Meta::set('title','home page');
        return view('home');
    }

    public function getLog()
    {
        $logFile = file(storage_path().'/logs/laravel.log');
        $logFile = collect($logFile)->reverse();
        \Log::info('first log!');

        \Meta::set('title','log');
        return view('admin.log')->withLog($logFile);
    }

    public function getShop($id)
    {
        \Meta::set('title','3D shop');
		return view('shop')->withImageId($id);    	
    }

    public function getLocation()
    {
        \Meta::set('title','location');
        return view('location');      
    }

    public function getChat()
    {
        $chats = \App\Models\Chat::get();
        
        \Meta::set('title','chat');
        return view('chat')->withChats($chats);      
    }

    public function postChat(Request $request)
    {
        \Validator::make($request->all(), [
            'message' => 'required',
        ])->validate();
        \App\Models\Chat::create(['message' => $request->message, 'sender' => \Auth::id(), 'receiver' => 1 ]);
        $request->session()->flash('alert-success', 'پیغامت رفت.');
        
        return redirect('chat');      
    }

    public function deleteChat($id, Request $request)
    {
        $request->session()->flash('alert-success', 'پیغام با موفقیت حدف شد.');
        \App\Models\Chat::where('id', $id)->delete();

        return redirect('chat');    
    }

    public function getVerificateId($id)
    {
        dd('ایمیل شما تایید شد.');
    }

    public function getLanguage($language)
    {
        session()->put('locale', $language);
        
        return redirect()->back();
    }
}
