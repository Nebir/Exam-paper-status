<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseTeacher;

class CourseTeacherController extends Controller
{
    //showing teacher update page
    public function update($id){
        $teacher = CourseTeacher::find($id);

        return view('admin.teacher.update_teacher',compact('teacher'));

    }

    //storing updated teacher
    public function edit(Request $request,$id){
        //validation
        $this->validate($request,[
            'name' => 'required',
            'email'   => 'required',
            'password'   => 'required'
        ]);

        $data = array(
            'name' => $request->input('name'),
            'email'   =>  $request->input('name'),
            'password'   =>  $request->input('name')
        );
        //updating in database
        CourseTeacher::where('id',$id)->update($data);

        return redirect('admin/teachers-data');
    }

    //deleting teacher
    public function destroy($id){
        CourseTeacher::where('id',$id)->delete($id);
        return redirect('admin/teachers-data');
    }
}
