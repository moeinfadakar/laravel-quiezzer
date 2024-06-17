<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class addAnswersController extends Controller
{
    function addAnswer(Request $request){

        $question = new Question();
        $question->name = $request["text"];
        $question->save();

return redirect("/addCorrectAnswer");





    }
}
