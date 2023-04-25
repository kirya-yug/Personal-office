@extends('__layout')

@section('content')
  <div class="row col-10">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ФИО</th>
          <th scope="col">Номер телефона</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
        <tbody>
          @foreach ($obj as $objs)
          <tr>
            <td>{{$objs->Name}}</td>
            <td>{{$objs->Tel_Num}}</td>
            <td>{{$objs->Email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
@endsection
