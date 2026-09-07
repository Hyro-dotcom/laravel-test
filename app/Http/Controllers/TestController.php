<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        return view('test', [
            'name' => 'Laravel Beginner',
            'topic' => 'controllers and Blade',
            'isLearning' => false,
            'skills' => [
                'Routes',
                'Controllers',
                'Blades',
            ],
        ]);
    }
}
