<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->

</head>

<body>

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Lập trình backend-web 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="p-2 text-dark nav-link" href="/companies">Companies</a>
            </li>
            <li class="nav-item">
                <a class="p-2 text-dark nav-link" href="/trainers">Trainers</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form action="/search" class="form-inline my-2 my-lg-0">
            <input name="name" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Companies</h1>

</div>

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Web</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <th scope="row">{!! $company->company_id !!}</th>
                    <td>{!! $company->company_name !!}</td>
                    <td>{!! $company->company_web !!}</td>
                    <td>{!! $company->company_phone !!}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $companies->render() !!}
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Companies</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of companies</a></li>





                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Trainers</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of trainers
                        </a></li>



                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>



                </ul>
            </div>
        </div>
    </footer>
</div>





</body></html>
