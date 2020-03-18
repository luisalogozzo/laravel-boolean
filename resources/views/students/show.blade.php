@extends('layouts.layout')

@section ('main')
  <div class="container">
    <div class="student">
      <div class="main-info">
        <a class="student-foto" href="{{route('student.show', ['slug' => $thisStudent['slug']] )}}">
          <img src="{{$thisStudent['foto']}}" alt="">
        </a>
        <div class="student-job">
          <h3>{{$thisStudent['nome']}} (anni: {{$thisStudent['eta']}})</h3>
          <h4>Lavora presso {{$thisStudent['azienda']}} come {{$thisStudent['ruolo']}}</h4>
        </div>
      </div>
      <p>{{$thisStudent['descrizione']}}</p>
    </div>
  </div>
@endsection
