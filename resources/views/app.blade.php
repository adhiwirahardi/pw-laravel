<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhi's Portfolio</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"    >
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#contact">Contact</a>
                </li>
                </ul>
                </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Bootstrap JS and other scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your custom scripts -->
    @yield('scripts')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="https://api.whatsapp.com/send?phone=6281918888689">Phone Number: +628918888689</a>
                </div>
                <div class="col-md-6">
                    <a href="https://www.linkedin.com/adhiwirahardi" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin" style="font size: 35px">Linkedin</i></a><span style="margin-left: 20px"></span>
                    <a href="https://www.instagram.com/superaaaay" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram" style="font size: 35px">Instagram</i></a><span style="margin-left: 20px"></span>
                    <a href="https://github.com/adhiwirahardi" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" style="font size: 35px">github</i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
