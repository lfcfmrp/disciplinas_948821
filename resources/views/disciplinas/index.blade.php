<u1>
 @foreach($disciplinas as $disciplina)
     <li>
     <a href="/disciplinas/{{$disciplina->id}}">
     {{$disciplina->titulo}}</li>
     @endforeach
</u1>