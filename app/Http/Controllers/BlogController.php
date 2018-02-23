<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['things'] = [
            'title' => 'Servisanais',
            'services' => ['Web Design', 'Programming', 'Systems']
        ];

        //dd($data['things']['title']);

        return view('pages.home', $data);
    } 
}
