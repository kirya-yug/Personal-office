<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  
   
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">

                <ul class="nav nav-pills flex-column mb-auto shadow-sm">
                  <a href="/Group-List" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <span class="fs-4">Югов Кирилл Павлович<br> ИСТб-19-2  </span>
                  </a>
                  <li class="nav-item">
                    <a href="/Group-List" class="nav-link link-dark " aria-current="page">             
                      Список группы
                    </a>
                  </li>
                  <li>
                    <a href="/Test-Check" class="nav-link link-dark " aria-current="page">
                      Контроль прохождения тестов
                    </a>
                  </li>
                  <li>
                    <a href="/Messages" class="nav-link link-dark" aria-current="page">
                      Объявления
                    </a>
                  </li>
                </ul>
              
            </div>
            <div class="col-9">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
