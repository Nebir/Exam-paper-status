<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class semesterController extends Controller
{
    //showing create ccourse page
    public function create(){
        $semesters = Semester::all();
        return view('semesters.create',compact('semesters'));
    }

    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'name' => 'required',
            'short_form' => 'required',

        ]);

        $semester = new Semester();
        $semester->name = $request->input('name');
        $semester->short_form = $request->input('short_form');


        $semester->save();
        $notification = [
            'message' => 'Semester Added Successfully.!',
            'alert-type' => 'success'
        ];
        return redirect('/semester')->with($notification);

    }

    //showing category update page
    public function update($id){
        $semester = Semester::find($id);
        return view('semester.update',compact('semester'));

    }

    //storing updated course
    public function edit(Request $request,$id){

        //validation
        $this->validate($request,[
            'name' => 'required',
            'short_form' => 'required',
        ]);

        $data = array(
            'name' => $request->input('name'),
            'short_form' => $request->input('short_form'),
        );
        //updating in database
        Semester::where('id',$id)->update($data);
        $notification = [
            'message' => 'Semester Updated Sucessfully.!',
            'alert-type' => 'success'
        ];

        return redirect('/semester')->with($notification);
    }

    //deleting course
    public function destroy($id){
      Semester::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Semester Deleted Sucessfully.!',
            'alert-type' => 'info'
        ];
        return redirect('/Semester')->with($notification);
    }
}
