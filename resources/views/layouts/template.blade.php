<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://img.icons8.com/bubbles/452/disney-plus.png">
    <title> Page | @yield('title')</title>
</head>

<body>

    <!---Start Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="inicio">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Encanto_Disney_Logo.png/640px-Encanto_Disney_Logo.png" width="180" height="70" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de-nosotros">Acerca de Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactanos">Contacto</a>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-award text-info" viewBox="0 0 16 16">
                <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
            </svg>
            Soy un usuario Disney + </button>
    </nav>
    <!---End Navbar-->
    <div class="text-center">
        @yield('imagen')
    </div>
    <br />
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active list-group-item-dark">
                        Cras justo odio
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Disney +</a>
                    <a href="#" class="list-group-item list-group-item-action">Parques Tematicos</a>
                    <a href="#" class="list-group-item list-group-item-action">LUCA</a>
                    <a href="#" class="list-group-item list-group-item-action">Hoteles</a>
                    <a href="#" class="list-group-item list-group-item-action">Comunicados Oficiales</a>
                    <a href="#" class="list-group-item list-group-item-action">Comunicados Oficiales</a>
                    <a href="#" class="list-group-item list-group-item-action">Comunicados Oficiales</a>
                    <a href="#" class="list-group-item list-group-item-action">Comunicados Oficiales</a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="container-fluid  text-black" style="background-color: #e3f2fd;">
        <div class="row">
            <div class="col-md-4">
                <br />
                <p class="text-center"> &copy; Disney Inc. Todos los Derechos Reservados.</p>
            </div>
            <div class="col-md-5">
                <br />
                <img src="https://iconape.com/wp-content/png_logo_vector/cib-facebook.png" width="30" height="30" alt=""> | Facebook
                <img src="https://seeklogo.com/images/I/instagram-logo-A807AD378B-seeklogo.com.png" width="30" height="30" alt=""> | Instagram
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Font_Awesome_5_brands_Twitter_square.svg/1200px-Font_Awesome_5_brands_Twitter_square.svg.png" width="30" height="30" alt=""> | Twiter
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/YouTube_social_dark_circle_%282017%29.svg" width="30" height="30" alt=""> | Youtube
            </div>
            <div class="col-md-3">
                <br />
                <img src="http://pngimg.com/uploads/walt_disney/walt_disney_PNG45.png" width="90" height="30" alt="">
            </div>
        </div>
    </div>
</body>

</html>
