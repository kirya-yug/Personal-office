@extends('__layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ФИО</th>
                            <th scope="col">Непройденый тест</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($obj as $objs)
                            <tr>
                                <td>{{ $objs->Name }}</td>
                                <td>{{ $objs->Test_Name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Выберите тест
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach ($testName as $testNames)
                            <li><a class="dropdown-item" id="dropdownMenuButton1"
                                    href="/Test-Check/{{ $testNames->Test_Name }}">{{ $testNames->Test_Name }}</a></li>
                               
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
