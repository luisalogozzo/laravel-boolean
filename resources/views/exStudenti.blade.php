@include('partials._header')
<div class="container">
  @foreach ($data as $key => $student)
    <a class="student" href="{{route('studentDetail')}}">
      <div>
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
      </div>
    </a>

  @endforeach
</div>

@include('partials._footer')
