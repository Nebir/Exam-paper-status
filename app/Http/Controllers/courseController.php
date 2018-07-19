<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class courseController extends Controller
{
    //showing create ccourse page
    public function create(){
        $courses = Course::all();
        return view('courses.create',compact('courses'));
    }

    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'course_name' => 'required',
            'course_code' => 'required',
            'course_credit' => 'required',
        ]);

        $course = new Course();
        $course->name = $request->input('course_name');
        $course->course_code = $request->input('course_code');
        $course->course_credit= $request->input('course_credit');

        $course->save();
        $notification = [
            'message' => 'Course Added Successfully.!',
            'alert-type' => 'success'
        ];
        return redirect('/courses')->with($notification);

    }

    //showing category update page
    public function update($id){
        $course = Course::find($id);
        return view('courses.update',compact('course'));

    }

    //storing updated course
    public function edit(Request $request,$id){

        //validation
        $this->validate($request,[
            'course_name' => 'required',
            'course_code' => 'required',
            'course_credit' => 'required',
        ]);

        $data = array(
            'name' => $request->input('course_name'),
            'course_code' => $request->input('course_code'),
            'course_credit' => $request->input('course_credit'),
        );
        //updating in database
        Course::where('id',$id)->update($data);
        $notification = [
            'message' => 'Course Updated Sucessfully.!',
            'alert-type' => 'success'
        ];

        return redirect('/courses')->with($notification);
    }

    //deleting course
    public function destroy($id){
        Course::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Course Deleted Sucessfully.!',
            'alert-type' => 'info'
        ];
        return redirect('/courses')->with($notification);
    }
}
