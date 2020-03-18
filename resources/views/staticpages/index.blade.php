@extends('layouts.layout')

@section ('main')
  <div class="filter">
    <select name="filter" id='filter'>
      @foreach ($genders as $gender)
        <option value="{{$gender}}">{{$gender == 'm' ? 'uomo' : 'donna'}}</option>

      @endforeach
    </select>
  </div>
  <div class="student">
    @foreach ($students as $key => $student)
      {{-- <a class="student" href="{{route('student.show'), ['slug' => $student['slug']]}}"> --}}

          <div class="main-info">
            <div class="student-foto">
              <img src="{{$student['foto']}}" alt="">
            </div>
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
