<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class departmentController extends Controller
{
    //showing create ccourse page
    public function create(){
        $department = Department::all();
        return view('departments.create',compact('departments'));
    }

    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'name' => 'required',
        ]);

        $department = new Course();
        $department->name = $request->input('name');

        $department->save();
        $notification = [
            'message' => 'Department Added Successfully.!',
            'alert-type' => 'success'
        ];
        return redirect('/departments')->with($notification);

    }

    //showing category update page
    public function update($id){
        $department = Department::find($id);
        return view('department.update',compact('department'));

    }

    //storing updated course
    public function edit(Request $request,$id){

        //validation
        $this->validate($request,[
            'name' => 'required',
        ]);

        $data = array(
            'name' => $request->input('name'),

        );
        //updating in database
        Department::where('id',$id)->update($data);
        $notification = [
            'message' => 'Department Updated Sucessfully.!',
            'alert-type' => 'success'
        ];

        return redirect('/departments')->with($notification);
    }

    //deleting course
    public function destroy($id){
        Department::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Department Deleted Sucessfully.!',
            'alert-type' => 'info'
        ];
        return redirect('/departments')->with($notification);
    }
}
