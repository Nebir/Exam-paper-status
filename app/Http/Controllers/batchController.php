<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use App\Department;

class batchController extends Controller
{

    //showing batch update page
    public function update($id){
        $batch = Batch::find($id);
        return view('admin.batch.update_batch',compact('batch'));

    }

    //storing updated exam
    public function edit(Request $request,$id){

        //validation
        $this->validate($request,[
            'session' => 'session',
        ]);

        $data = array(
            'session' => $request->input('session'),

        );
        //updating in database
        Batch::where('id',$id)->update($data);
        return redirect('batch.data');
    }

    //deleting exam
    public function destroy($id){
        Batch::where('id',$id)->delete($id);
        return redirect('batch.data');
    }
}
