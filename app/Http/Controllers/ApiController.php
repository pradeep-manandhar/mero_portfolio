<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    public function randomImage(){
        $response = Http::withoutVerifying()->get('https://dog.ceo/api/breeds/image/random');
            if($response->successful()){
                $data=$response->json();
                $imageUrl=$data['message'];

                return view('dogs.random',compact('imageUrl'));
            }
            return view('dogs.random')->with('error','Failed to load image');
    }
}
