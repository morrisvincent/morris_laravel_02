<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="/css/style.css" href="">
  </head>
  <body>
{{-- Navbar Inizio --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          <a class="nav-link" href="actors">Actors</a>
          <a class="nav-link" href="films">Film</a>
          
        </div>
      </div>
    </div>
  </nav>
{{-- Navbar Fine --}}

    <h1 class="display-1 text-center">Actors</h1>


    <div class="container">
        <div class="row">


            @foreach($attori as $attore)
            <div class="col-12 col-md-4 mt-3">

                <div class="card" style="width: 18rem;">
                    <img src="{{$attore['pic']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$attore['name']}}</h5>
                      <p class="card-text">{{$attore['bio']}} {{$attore['age']}} anni</p>
                      <a href="{{route('actorFilmography',['id' => $attore['id']])}}" class="btn btn-primary">Filmography</a>
                    </div>
                  </div>

            </div>
            @endforeach



        </div>
    </div>







   


    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
  </body>
</html>