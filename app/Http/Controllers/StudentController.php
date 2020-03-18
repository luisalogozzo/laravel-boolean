<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;
  private $genders;
  public function __construct()
  {
    $this->students = config('students.students');
    $this->genders = config('students.genders');
  }


  public function Index()
  {

    $data = [
      'students' => $this->students,
      'genders' =>  $this->genders,
    ];


    return view('students.index', $data);
  }

  public function Show($slug)
  {
    $find = false;
    $thisStudent = [];
    foreach ($this->students as $student) {
     if($student['slug'] == $slug) {
       $find = true;
       $thisStudent = $student;
     }
    }
    if ($find) {
      return view('students.show', compact('thisStudent'));
    } else {
      abort('404');
    }

    // foreach ($this->students as $studente) {
    //   if($studente['slug'] == $slug) {
    //     return view('students.show', compact('thisStudent'));
    //   } else {
    //     abort('404');
    //   }
    // }
  }
  public function GetById($id)
  {
    foreach ($this->student as $key => $student) {
      if($key == $id) {

      } else {
        abort('404');
      }
    }
  }
}
