<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionsModel;

class QuestionController extends Controller
{
    //

    public function index(){
       $questions = QuestionsModel::get_all();
      // dd($questions);
        return view('questions.index', compact('questions'));
    }

    public function create(){
        return view('questions.create');
    }

    public function store(Request $request){
        $data = $request->all();
       unset($data['_token']);

       $question = QuestionsModel::save($data);
       if($question){
            return view('questions.index');
       }
    }
}
