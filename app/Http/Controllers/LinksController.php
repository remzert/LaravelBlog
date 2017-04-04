<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\RedirectResponse;

use App\Http\Requests;

use \Input;
use App\link;



class LinksController extends Controller
{
    public function Show($id)
    {
        $link = Link::FindOrFail($id);
        //return new RedirectResponse($link->url, 301);
        return redirect($link->url, 301);
    }
    
    public function Create()
    {
        return view('links.create');
    }
    
    public function Store()
    {
        $url = Input::get('url');
        $link= Link::FirstOrCreate(['url'=> $url]);
        /*$link = Link::where('url', $url)->first();
        if(!$link)
        {
            $link= Link::create(['url'=>$url]);
        }*/
        
        
        
       /* dd($link);
        dd(\Input::get('url') );*/
        
        return view('links.success', compact('link'));
    }
}
            

