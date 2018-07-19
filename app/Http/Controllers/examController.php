<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;

class examController extends Controller
{
    //showing create exam page
    public function create(){
        $exams = Exam::all();
        return view('exams.create',compact('exams'));
    }

    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'exam_date' => 'required',
            'result_publish_date' => 'required',

        ]);

        $exam = new Course();
        $exam->exam_date = $request->input('exam_date');
        $exam->result_publish_date = $request->input('result_publish_date');


        $exam->save();
        $notification = [
            'message' => 'Exam Added Successfully.!',
            'alert-type' => 'success'
        ];
        return redirect('/exams')->with($notification);

    }

    //showing exam update page
    public function update($id){
        $exam = Exam::find($id);
        return view('exams.update',compact('exam'));

    }

    //storing updated exam
    public function edit(Request $request,$id){

        //validation
        $this->validate($request,[
            'exam_date' => 'required',
            'result_publish_date' => 'required',
        ]);

        $data = array(
            'exam_date' => $request->input('exam_date'),
            'result_publish_date' => $request->input('result_publish_date'),
        );
        //updating in database
        Exam::where('id',$id)->update($data);
        $notification = [
            'message' => 'Exam Updated Sucessfully.!',
            'alert-type' => 'success'
        ];

        return redirect('/exams')->with($notification);
    }

    //deleting exam
    public function destroy($id){
        Exam::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Exam Deleted Sucessfully.!',
            'alert-type' => 'info'
        ];
        return redirect('/exams')->with($notification);
    }
}
