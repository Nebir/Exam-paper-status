<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        /*$datas = [];
        $datas = [
            "educationTraining"=> EduData::select('id','title','featured','treanding', 'editors_pick')->get(),
            "events"=> Event::select('id','title','featured','treanding','editors_pick')->get(),
            "reportPublications"=> Publication::select('id','title','featured','treanding', 'editors_pick')->get(),
            "fundingOpportunities"=> DonorData::select('id','title','featured','treanding', 'editors_pick')->get()
        ];*/
        // return $datas;
        return view('admin.index');
    }
}
