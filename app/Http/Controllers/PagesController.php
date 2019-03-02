<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function uniq(){
        return view('pages.uniq');
    }
    public function board_Dir(){
        return view('pages.board_Dir');
    }
    public function manager(){
        return view('pages.manager');
    }
    public function admission(){
        return view('pages.admission');
    }
    public function trainProgs(){
        return view('pages.trainProgs');
    }
    public function professinal(){
        return view('pages.professinal');
    }
    public function trianDelivery(){
        return view('pages.trianDelivery');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function register(){
        return view('pages.register');
    }
    
    
}
