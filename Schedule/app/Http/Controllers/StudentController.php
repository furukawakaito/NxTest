<?php 

namespace App\Http\Controller;

class StudentController extends Controller{


    public function top(){
        return view('top');
    }

    public function search(Request $request){
        $query = $request->query();
        $result = Schedule::select("SELECT * FROM users WHERE name = ?", [$request]);
    }
}