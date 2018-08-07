<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class semesterController extends Controller
{

    //showing category update page
    public function update($id){
        $semester = Semester::find($id);
        return view('admin.semester.update_semester',compact('semester'));

    }

    //storing updated semester
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
        return redirect('admin/semester-data');
    }

    //deleting semester
    public function destroy($id){
      Semester::where('id',$id)->delete($id);
        return redirect('admin/semester-data');
    }
}
