<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ResultController extends Controller
{

    function  result(){

        $all_questions = Question::all()->count();
        Session::put("all" , $all_questions);
        $userScore = Session::get("User_score");

        $saveArray = [ "user" => $userScore  , "num" => $all_questions ];

        return view('result',[ "messages" => $saveArray ]);
    }

}
