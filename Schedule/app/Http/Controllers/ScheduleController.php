<?php 

namespace App\Http\Controller;

class ScheduleController extends Controller{


    public function top(){

        return view('scheduleTop');
    }

    public function search(Request $request){
        $query = $request->query();
        $result = Schedule::select("SELECT * FROM users WHERE name = ?", [$request]);
        return view('search',$request);
    }

    public function create(){

    }

    public function update(Request $request){

    }

    public function delete(Request $request){
        
    }
}