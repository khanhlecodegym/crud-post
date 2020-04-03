<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><i class="fas fa-anchor mr-2"></i><strong>CodeGym</strong> Hue</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor02" style="">
            <ul class="navbar-nav mr-auto d-flex align-items-center">
                <li class="nav-item">
                <a class="nav-link" href="./index.html">Intro <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Examples </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./landing.html">Home Landing</a>
                    <a class="dropdown-item" href="./login.html">User Login</a>
                    <a class="dropdown-item" href="./blog.html">Blog Index</a>
                    <a class="dropdown-item" href="./page.html">Sample Page</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="docs.html">Docs</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item">
                    <a  class="nav-item" href="{{ route('cart.checkout') }}"><span class="iconbox iconmedium fill rounded-circle bg-success text-white shadow border-0"><i class="fas fa-cart-arrow-down"></i></span></a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- End Navbar -->
