<?php

namespace App\Http\Controllers;

use App\Tbl_question;
use App\Tbl_answer;
use Cookie;
use Illuminate\Http\Request;

class TblQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        $answers = Tbl_answer::where('answer_id_question',0)->get();
        return view('admin.answer.addquestion',compact('answers'));
    }
    public function create(Request $request)
    {
        // $request->validate([
        //     'question' => 'required',
        // ],
        // [
        //     'question.required' => 'Vui lòng nhập câu hỏi'
        // ]);
        if($request->question)
        {
            $question = Tbl_question::create([
                'question_content' => $request->question,
            ]);
            if($request->answer)
            {
                $answer = Tbl_answer::create([
                    'answer_id_question' => $question->id,
                    'answer_content' => $request->answer
                ]);
            }
            if($request->answer_select)
            {
                $answer = Tbl_answer::where('answer_content',$request->answer_select)->first();
                $answer->answer_id_question = $question->id;
                $answer->save();
            }
            session()->flash('status','Thêm câu trả lời thành công');
        }
        else
        {
            if($request->answer)
            {
                $answer = Tbl_answer::create([
                    'answer_id_question' => 0,
                    'answer_content' => $request->answer
                ]);
            }
            if($request->answer_select)
            {
                $answer = Tbl_answer::create([
                    'answer_id_question' => 0,
                    'answer_content' => $request->answer_select
                ]);
            }
            session()->flash('status','Thêm câu trả lời thành công');
        } 
        
        return redirect()->route('get.Addquestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbl_question  $tbl_question
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_question $tbl_question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbl_question  $tbl_question
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_question $tbl_question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbl_question  $tbl_question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_question $tbl_question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbl_question  $tbl_question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_question $tbl_question)
    {
        //
    }
}
