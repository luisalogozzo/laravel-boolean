@extends('layouts.layout')

@section ('main')
  <form class="" action="index.html" method="post">
    <input id="name" type="text" name="name" value="" placeholder="nome">
    <input id="age" type="number" name="age" value="" placeholder="etá">
    <select name="gender" id='gender'>
      <option value="">All</option>
      <option value="uomo">Uomo</option>
      <option value="donna">Donna</option>
    </select>
    <input id="submit" type="button" name="submit" value="SUBMIT">
  </form>
  <div class="container">
      @foreach ($students as $key => $student)
        <div class="student">
            <div class="main-info">
              <a class="student-foto" href="">
                <img src="{{$student->foto}}" alt="">
              </a>
              <div class="student-job">
                <h3>{{$student->name}} (anni: {{$student->age}})</h3>
                <h4>Lavora presso {{$student->azienda}} come {{$student->ruolo}}</h4>
              </div>
            </div>
            <p>{{$student->descrizione}}</p>
          </div>
      @endforeach
  </div>
  <script id="student-template" type="text/x-handlebars-template">
    <div class="student">
        <div class="main-info">
          <a class="student-foto" href="">
            <img src="@{{foto}}" alt="">
          </a>
          <div class="student-job">
            <h3>@{{name}} anni: @{{age}}</h3>
            <h4>Lavora presso @{{azienda}} come @{{ruolo}}</h4>
          </div>
        </div>
        <p>@{{descrizione}}</p>
      </div>
</script>
@endsection
