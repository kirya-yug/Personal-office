@extends('__layout')

@section('content')
    @foreach ($obj as $objs)
        <div class="row col-10 g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">{{$objs->Name}}</strong>
                <h3 class="mb-0">{{$objs->Title}}</h3>
                <div class="mb-1 text-muted">{{$objs->Date}}</div>
                <p class="mb-auto">{{$objs->Body}}</p>
            </div>
        </div>
    @endforeach
@endsection
