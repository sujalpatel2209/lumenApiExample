<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Exception;

class StudentController extends Controller {

//    use RESTActions;

    public function add(Request $request)
    {
      try{
        $student = new Student();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->birthdate = $request->birthdate;
        $student->city = $request->city;
        $student->state = $request->state;
        $student->country1 = $request->country;
        if($student->save()){
          $result = array('code' => 200, 'message' => 'Student Added Successfully');
        }
        return response()->json($result);
      } catch(Exception $e){
        return response()->json($e);
      }
    }

    public function remove($id)
    {
      try{
        $studentRemove = Student::destroy($id);
        if($studentRemove){
          $result = array('code' => 200, 'message' => 'Student Remove Successfully');
        }
        return response()->json($result);
      } catch (Exception $e){
        return response()->json($e);
      }
    }
}
