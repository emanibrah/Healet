<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    public function home(){

    return view ('home');
        }


    public function blog(){

    return view ('blog');
        }

    public function about(){

            return view ('about');
                }   

     public function shop(){

         return view ('shop');
             }  



}

