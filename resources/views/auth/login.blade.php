<!doctype html>
<html lang="en">
  <head>
    
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and master css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/form.css">

    <!-- Branding -->
    <title>Iniciar Sesión | Macnolo Tech</title>

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
    <!-- Custom styles for this template -->
    <link href="/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin">
        @csrf
      <div class="text-center mb-4">
        <img class="mb-4" src="/img/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
        <p>Ingresa tus datos para poder seguir.</p>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputEmail">E-Mail</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <label for="inputPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me">   Recuérdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">
        Iniciar Sesión
      </button>
      @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Olvidé mi contraseña?
        </a>
    @endif
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
    </form>
    <script>
        window.onload = () => {
            let el = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
            el.parentNode.removeChild(el);
        }
    </script>  
</body>
</html>