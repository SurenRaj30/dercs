<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DERCS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{URL::to('/login')}}" tabindex="-1" aria-disabled="true">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  <div class="container">
      @yield ('content')
  </div>
</body>
</html>