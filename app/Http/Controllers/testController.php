<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class testController extends Controller
{
    function words($id)
    {
        $ID = $id;
        $Question = Question::find($id);

        return view("test",
            [
                "question" => $Question
            ]);
    }

    function check(Request $request)
    {
        $question_num = Question::all()->count();

        session::put('allme', $question_num);

        $questionId = $request["questionId"];
        $userChoose = $request["userAnswer"];
        $correctChooseId = Answer::where('question_id', '=', $questionId)->Where('true_id', '=', 1)->first()->id;

        if ($userChoose == $correctChooseId) {

            $userScore = Session::get("User_score");
            $userScore++;
            Session::put("User_score", $userScore);

        } else {



        }


       $questionId++;
        if ($questionId != $question_num + 1){


            return redirect("/test/$questionId");


        }else{

            return redirect("/Result");

        }



}

         function enter(request $request){

            $enter = new Question();
            $enter->name = $request["text"];
            $enter->save();

            return redirect("/addAnswersView");

         }


         function  addAnswersprocess(Request $req){

        $javab =  $req["answer"];

        foreach ($javab as $jvb){

            $JAVABS = new Answer();
            $JAVABS->text = $req["answer"];
            $JAVABS->true_id = $req["selection"];
            $JAVABS->question_id = Session::get("all" );

        }


         }




}
