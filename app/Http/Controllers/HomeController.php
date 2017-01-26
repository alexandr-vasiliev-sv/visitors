<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.page', [
            'title' => 'Home page',
        ]);
    }

    public function contact()
    {
        return view('home.page', [
            'title' => 'Contact page',
        ]);
    }

    public function about()
    {
        return view('home.page', [
            'title' => 'About page',
        ]);
    }

    public function news()
    {
        return view('home.page', [
            'title' => 'News page',
        ]);
    }

    public function requests()
    {
        return view('home.page', [
            'title' => 'Requests page',
        ]);
    }

    public function online()
    {
        return view('home.page', [
            'title' => 'Online page',
        ]);
    }

    public function phones()
    {
        return view('home.page', [
            'title' => 'Phones page',
        ]);
    }

    public function chrome()
    {
        return view('home.page', [
            'title' => 'Chrome page',
        ]);
    }

    public function php()
    {
        return view('home.page', [
            'title' => 'Php page',
        ]);
    }

    public function mysql()
    {
        return view('home.page', [
            'title' => 'Mysql page',
        ]);
    }
}
