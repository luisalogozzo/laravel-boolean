<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;
  public function __construct()
  {
    $this->students = config('students.students');
  }
  public function age() {

    return response()->json($this->students);
  }

  public function getForAge($age)
  {
    $students = $this->students;

    $studentsFiltered = [];

    foreach ($students as $student) {
      if ($student['eta'] == $age) {
        $studentsFiltered[] = $student;
      }
    }

    return response()->json($studentsFiltered);
  }

public function filter(Request $request)
{
  $students = $this->students;
  $data = $request->all();
  $studentsFiltered = $students;
  foreach ($data as $key => $value) {
    $studentsFiltered = $this->filterBy($key, $value, $studentsFiltered);
  }
  return response()->json($studentsFiltered);
}

private function filterBy($type, $value, $array)
{
  $filtered = [];
  foreach ($array as $element) {
    if ($element[$type] == $value) {
      $filtered[] = $element;
    }
  }
  return $filtered;
}

}
