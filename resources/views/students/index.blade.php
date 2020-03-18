@extends('layouts.layout')

@section ('main')
  <div class="filter">
    <select name="filter" id='filter'>
      <option value="all">All</option>
      <option value="uomo">Uomo</option>
      <option value="donna">Donna</option>
    </select>
  </div>
  <div class="container">
    <div class="student">
      @foreach ($students as $key => $student)

            <div class="main-info">
              <a class="student-foto" href="{{route('student.show', ['slug' => $student['slug']] )}}">

                <img src="{{$student['foto']}}" alt="">
              </a>



              <div class="student-job">
                <h3>{{$student['nome']}} (anni: {{$student['eta']}})</h3>
                <h4>Lavora presso {{$student['azienda']}} come {{$student['ruolo']}}</h4>
              </div>
            </div>
            <p>{{$student['descrizione']}}</p>
        {{-- </a> --}}
      @endforeach
    </div>
  </div>




@endsection
