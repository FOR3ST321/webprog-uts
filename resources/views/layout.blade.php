<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

    <style>
        body {
            background-image: url('/img/bg.png');
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

    </style>
    <title>Happy Book Store</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">HAPPY BOOK STORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item <?= $activeNav == 'home' ? 'active' : '' ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown  <?= $activeNav == 'category' ? 'active' : '' ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($categories as $a)
                            <a class="dropdown-item <?= isset($activeSubNav) && $activeSubNav == $a->category ? 'active' : '' ?>"
                                href="/category/{{ $a->id }}">{{ $a->category }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item  <?= $activeNav == 'contact' ? 'active' : '' ?>">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 7vh">
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>

            <div class="col-4">
                <div class="d-flex justify-content-end" style="box-shadow: 10px 11px 35px -7px rgba(0,0,0,0.41);">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-header">
                            <strong>Category</strong>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $item)
                                <li class="list-group-item"><a href="/category/{{ $item->id }}">{{ $item->category }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="footer d-flex align-items-center bg-dark">
        <p class="text-light" style="margin:10px">Copyright By &copy; Happy Book Store</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
