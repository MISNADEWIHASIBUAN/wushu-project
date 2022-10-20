<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function Home()
    {
        return view('pages.home');
    }

    public function News()
    {
        return view('pages.news');
    }

    public function NewsDetail()
    {
        return view('pages.news-detail');
    }

    public function Galeries()
    {
        return view('pages.galeries');
    }

    public function GaleriesDetail()
    {
        return view('pages.galeries-detail');   
    }

    public function About($who)
    {
        $view = 'about-';
        if($who == Str::lower('8thWJWC')){
            $view .= Str::lower('8thWJWC');
        }elseif($who == Str::lower('IWUF')){
            $view .= Str::lower('IWUF');
        }else{
            $view .= 'tangerang';
        }

        return view('pages.' . $view);
    }

    public function Competition($what)
    {
        $view = 'competition-';
        if($what == 'numbers'){
            $view .= 'numbers';
        }elseif($what == 'schedules'){
            $view .= 'schedules';
        }else{
            $view .= 'medals';
        }

        return view('pages.' . $view);
    }
}
