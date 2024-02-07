<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $comments =[
            [
                'comment' => 'This is the first comment',
            ],
        ];

        $rates = [
            [
                'rate' => 'This is the second rate',
            ]
        ];

        return view('feed',[
        'comments' => $comments,
        'rates' => $rates,
    ]);
    }
}
