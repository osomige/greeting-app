<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show($greeting)
    
    {

        switch ($greeting) {
            case 'morning':
                $big = '朝のあいさつ';
                $small = 'おはようございます';
                break;
            case 'afternoon':
                $big = '昼のあいさつ';
                $small = 'こんにちは';
                break;
            case 'evening':
                $big = '夕方のあいさつ';
                $small = 'こんばんは';
                break;
            case 'night':
                $big = '夜のあいさつ';
                $small = 'おやすみ';
                break;
            
            default:
                $big = '問題しかありません';
                $small = '問題しかありません';
    
                break;
        }
        return view('greeting.show',['big' => $big,'small' => $small]);
        
    }

    public function free($freeword)
    {
                $big = '自由なメッセージ';
                $small = $freeword;
            
            
            return view('greeting.free',['big' => $big,'small' => $small]);
    }

    public function random()

    {
        $array = ['おはよう','こんにちは','こんばんは','おやすみ'];
        $big = 'ランダムなメッセージ';
        $small = $array[array_rand($array)];
        return view('greeting.random',['big' => $big,'small' => $small]);
            
        
    }

}
