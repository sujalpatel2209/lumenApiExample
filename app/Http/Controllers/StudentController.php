<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Exception;

class StudentController extends Controller {

//    use RESTActions;

    // Add Student Recoed POST Method Api
    public function add(Request $request)
    {
      try{
        $student = new Student();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->birthdate = $request->birthdate;
        $student->city = $request->city;
        $student->state = $request->state;
        $student->country = $request->country;
        if($student->save()){
          $result = array('code' => 200, 'message' => 'Student Added Successfully');
        }
        return response()->json($result);
      } catch(Exception $e){
        return response()->json($e);
      }
    }

    // Remove Student Record DELETE Method Api
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

    // Fetch all Student Record GET Method Api
    public function all()
    {
      try{
        $studentList = Student::all();
        $result = array('code' => 200, 'message' => 'Fetch Successfully', 'students' => $studentList);
        return response()->json($result);
      } catch (Exception $e){
        return response()->json($e);
      }
    }

    // Fetch Single User Record GET Method Api
    public function get($id)
    {
      try{
        $studentDetail = Student::where('id',$id)->get();
        $result = array('code' => 200, 'message' => 'Fetch Successfully', 'students' => $studentDetail);
        return response()->json($result);
      } catch (Exception $e){
        return response()->json($e);
      }
    }

    // Update Student Record PUT Method Api
    public function update(Request $request)
    {
      try{
        $data = array(
          'firstname' => $request->firstname,
          'lastname' => $request->lastname,
          'birthdate' => $request->birthdate,
          'city' => $request->city,
          'state' => $request->state,
          'country' => $request->country
        );
        $updateStudentRecord = Student::where('id',$request->id)->update($data);
        $result = array('code' => 200, 'message' => 'Record Updated Successfully');
        return response()->json($result);
      } catch (Exception $e){
        return response()->json($e);
      }
    }
}
