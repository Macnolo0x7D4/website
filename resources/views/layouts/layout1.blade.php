<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and master css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/all.js"></script>

    <!-- Branding -->
    <title>@yield('title') | Macnolo Tech</title>

    <!-- Icon Setup -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/mstile-310x310.png" />

</head>
    <body class="d-flex flex-column h-100">
        <header>
            @yield('navbar')
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
                <a class="navbar-brand" href="/home">
                    <img src="/img/logo.png" width=30px class="d-inline-block align-top" alt="logo">
                    Macnolo Tech
                </a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#RepoModal">iOS Repo</a>
                    </li>
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    -->
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Macnolo Launcher</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">MacHack-3DS</a>
                    </li>
                    <li class="nav-item">
                        <a href="/autolocker" class="nav-link">AutoLocker</a>
                    </li>
                    <li class="nav-item">
                        <a href="/volcano" class="nav-link">Volcano</a>
                    </li>
					<li class="nav-item">
						<a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">Macssenger</a>
					</li>
                    <li class="nav-item">
                        <a href="/support" class="nav-link" >Soporte</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 search" type="search" placeholder="Ingresa tu búsqueda" aria-label="Ingresa tu busqueda">
                    </form>
                    <a href="" class="nav-item nav-link">
                        <i class="fas fa-user-circle fa-2x"></i>
                    </a>
                </div>
            </nav>
        </header>
        <!-- Content -->
        <div class="container container-main">
            @yield('main')
        </div>
        <!-- iOS Repo Modal -->
        <div class="modal fade" id="RepoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @yield('repo_modal')
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agrega este repositorio a tu APT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="buttons-group">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-4">
                                <a href="sileo://source/https://macnolo.tk/repo" class="btn btn-outline-info" role="button">
                                    Agrega a Sileo
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="cydia://url/https://cydia.saurik.com/api/share#?source=https%3A%2F%2Fmacnolo.tk/repo" class="btn btn-outline-dark" role="button">
                                    Agrega a Cydia
                                </a>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                    O agrega este link: <a href="#">https://macnolo.tk/repo</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
		<footer class="footer mt-auto py-3">
            @yield('footer')
			<div class="container">
				<p>Creado por Macnolo ©2019</p>
			</div>
		</footer>
        <!-- Scripting -->
        <script src="/js/jquery.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script>
            window.onload = () => {
                let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
                el.parentNode.removeChild(el);
            }
        </script>
    </body>
</html>