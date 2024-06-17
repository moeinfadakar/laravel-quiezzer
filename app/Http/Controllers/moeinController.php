<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class moeinController extends Controller
{ function pro(Request $request){



    $all_rows = Question::all()->count();
               $nums = $request["answer"];

               foreach($nums as $num ){
                   $ANS = new Answer();
                   $ANS->text = $num ;
                   $ANS->question_id = $all_rows + 1 ;
                   $ANS->true_id = $request["selection"];
                   $ANS->save();


               }






}
}
