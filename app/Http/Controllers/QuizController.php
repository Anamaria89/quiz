<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Question;
use App\Answer;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    public function index()
    {

        $quizzes = Quiz::all();

        return view('quizzes.index', compact('quizzes'));
    }

    public function view($id)
    {
        $score = Answer::where('id', '>', 0)->sum('score');
        $answers = Answer::all();
        $score = Answer::where('id', '>', 0)->sum('score');
        // dd($score);
        $questions = Question::all();
        //  $quizQuestions = Quiz::find($id)->questions;
        $quizQuestions = Quiz::find($id)->questions;
        $idQ = $questions[1]->id;

        $questionId = Question::where('id', '>', 0)->get('id');

        return view('quizzes.view', compact('quizQuestions', 'score', 'answers'));
    }

    public function answer($id, Request $request)
    {

        // $quizQuestions = Quiz::find($id)->questions;
        $questions = Question::all();
        $idQ1 = $questions[0]->id;
        $id = 1;
        if ($id = 1) {
            if ($request->input('answer') == 30) {
                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ1;
                $answerOfQuestion->answer = 30;
                $answerOfQuestion->is_true = 'true';
                $answerOfQuestion->score = 20;
                $answerOfQuestion->save();
                Session::flash('message', 'Correct!');
                Session::flash('alert-class', 'alert-success');
            }
             if ($request->input('answer') != 30) {
                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ1;
                $answerOfQuestion->is_true = 'false';
                $answerOfQuestion->score = 0;
                $answerOfQuestion->save();
                Session::flash('message', 'Wrong!');
                Session::flash('alert-class', 'alert-danger');

            }


        }

        $idQ2 = $questions[1]->id;
        //$id = 1;
        if ($id = 1) {
            if ($request->input('answer') == 4) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ2;
                $answerOfQuestion->is_true = 'true';
                $answerOfQuestion->score = 20;
                $answerOfQuestion->save();
                Session::flash('message', 'Correct!');
                Session::flash('alert-class', 'alert-success');
            }

            if ($request->input('answer') != 4) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ2;
                $answerOfQuestion->is_true = 'false';
                $answerOfQuestion->score = 0;
                $answerOfQuestion->save();
                Session::flash('message', 'Wrong!');
                Session::flash('alert-class', 'alert-danger');

            }
        }
        $idQ3 = $questions[2]->id;
        //$id = 1;
        if ($id = 1) {
            if ($request->input('answer') == 15) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ3;
                $answerOfQuestion->is_true = 'true';
                $answerOfQuestion->score = 20;
                $answerOfQuestion->save();
                Session::flash('message', 'Correct!');
                Session::flash('alert-class', 'alert-success');
            }
            if ($request->input('answer') != 15) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ3;
                $answerOfQuestion->is_true = 'false';
                $answerOfQuestion->score = 0;
                $answerOfQuestion->save();
                Session::flash('message', 'Wrong!');
                Session::flash('alert-class', 'alert-danger');

            }
        }
        $idQ4 = $questions[3]->id;
        if ($id = 1) {
            if ($request->input('answer') == 9) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ4;
                $answerOfQuestion->is_true = 'true';
                $answerOfQuestion->score = 20;
                $answerOfQuestion->save();
                Session::flash('message', 'Correct!');
                Session::flash('alert-class', 'alert-success');
            }
            if ($request->input('answer') != 9) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ4;
                $answerOfQuestion->is_true = 'false';
                $answerOfQuestion->score = 0;
                $answerOfQuestion->save();
                Session::flash('message', 'Wrong!');
                Session::flash('alert-class', 'alert-danger');

            }
        }

        $idQ5 = $questions[4]->id;
        //$id = 1;
        if ($id = 1) {
            if ($request->input('answer') == 59) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ5;
                $answerOfQuestion->is_true = 'true';
                $answerOfQuestion->score = 20;
                $answerOfQuestion->save();
                Session::flash('message', 'Correct!');
                Session::flash('alert-class', 'alert-success');
            }
            if ($request->input('answer') != 59) {

                $answerOfQuestion = Answer::updateOrCreate(['answer' => $request->input('answer')]);
                $answerOfQuestion->question_id = $idQ5;
                $answerOfQuestion->is_true = 'false';
                $answerOfQuestion->score = 0;
                $answerOfQuestion->save();
                Session::flash('message', 'Wrong!');
                Session::flash('alert-class', 'alert-danger');

            }
        }


        return redirect()->route('quizzes.view', ['id' => $id]);
    }


}
