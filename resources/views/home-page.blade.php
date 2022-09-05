<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bacuag Water District</title>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/landingp-styles.css') }}" rel="stylesheet" />
</head>

<body>
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('assets/video/waterbg.mp4') }}" type="video/mp4" />
    </video>
    <div class="masthead">
        <div class="masthead-content text-white">

            <div class="text-center mb-2">
                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" width="120">
            </div>

            <div class="container">
                <h1 class="fst-italic lh-1 mb-4">"<span style="color: aqua">Conserve Water</span> Today for the Use of
                    Tommorow"</h1>
                <a href="{{ route('login') }}" class="btn bg-white text-dark">Login</a>
                {{-- <button class="btn bg-white text-dark">Login</button> --}}
            </div>
        </div>
    </div>

    <!-- Social Links -->
    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</body>

</html>
