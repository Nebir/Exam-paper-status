<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;

class batchController extends Controller
{
    //showing create exam page
    public function create(){
        $batchs = Batch::all();
        return view('batchss.create',compact('batchs'));
    }

    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'session' => 'session',


        ]);

        $batch = new Batch();
        $batch->session = $request->input('session');

        $batch->save();
        $notification = [
            'message' => 'batch Added Successfully.!',
            'alert-type' => 'success'
        ];
        return redirect('/batchs')->with($notification);

    }

    //showing exam update page
    public function update($id){
        $batch = Batch::find($id);
        return view('batchs.update',compact('batch'));

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
        $notification = [
            'message' => 'Batch Updated Sucessfully.!',
            'alert-type' => 'success'
        ];

        return redirect('/batchs')->with($notification);
    }

    //deleting exam
    public function destroy($id){
        Batch::where('id',$id)->delete($id);
        $notification = [
            'message' => 'Batch Deleted Sucessfully.!',
            'alert-type' => 'info'
        ];
        return redirect('/batchs')->with($notification);
    }
}
