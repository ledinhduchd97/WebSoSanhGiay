<?php

namespace App\Http\Controllers;
use App\Tbl_question;
use App\Tbl_answer;
use Illuminate\Http\Request;

class TblAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Tbl_answer::all();
        return view('admin.answer.listanswer',compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Tbl_answer  $tbl_answer
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_answer $tbl_answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbl_answer  $tbl_answer
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $answer = Tbl_answer::findOrFail($id);
        // $answers = Tbl_answer::where('answer_id_question',0)->get();
        return view('admin.answer.editanswer',compact('answer'));
    }
    public function edit(Request $request, $id)
    {
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbl_answer  $tbl_answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $answer = Tbl_answer::findOrFail($id);
            if($answer)
            {
               $request->validate([
                // 'question' => 'required',
                'answer' => 'required',
                ],[
                    // 'question.required' => 'Vui lòng nhập câu hỏi',
                    'answer.required' => 'Vui lòng nhập câu trả lời'
                ]);
               // dd(1);
                if(Tbl_question::where('id',$answer->answer_id_question)->first())
                {
                    $question = Tbl_question::where('id',$answer->answer_id_question)->first();
                    dd($question->question_content);
                    $question->question_content = $request->question;
                    $question->save();
                }
                if($request->question)
                {
                    $question = Tbl_question::create([
                        'question_content' => $request->question
                    ]);
                    $answer->answer_id_question = $question->id;
                    $answer->save();
                }
                $answer->answer_content = $request->answer;
                session()->flash('status','Sửa thành công'); 
            }  
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbl_answer  $tbl_answer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = Tbl_answer::findOrFail($id);
        $answer->delete();
        return redirect()->route('get.Listanswer');
    }
}
