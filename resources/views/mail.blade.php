<!doctype html>
<html lang="en">
  <head>
    
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and master css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .btn-outline-dark{
            color: #91573a;
            border-color: #91573a;
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #91573a;
            border-color: #91573a;
        }

        .buttons-group{
            margin-bottom: 20px;
            border-bottom: 1px solid slategrey;
            padding-bottom: 20px;
        }

        header {
            background: rgba(0,0,0,0.9);
            width: 100%;
            position: fixed;
            z-index: 100;
          }

          .container-main{
              padding-top: 80px;
          }

          body{
              background-color: #fff;
          }
          
          .card{
              margin-bottom:20px;
              -webkit-box-shadow: 10px 10px 8px -12px rgba(0,0,0,0.75);
             -moz-box-shadow: 10px 10px 8px -12px rgba(0,0,0,0.75);
             box-shadow: 10px 10px 8px -12px rgba(0,0,0,0.75);
          }
          
          nav{
              -webkit-box-shadow: 2px 12px 22px -20px rgba(0,0,0,0.75);
              -moz-box-shadow: 2px 12px 22px -20px rgba(0,0,0,0.75);
              box-shadow: 2px 12px 22px -20px rgba(0,0,0,0.75);
          }
          
          footer{
              -webkit-box-shadow: 2px -12px 22px -20px rgba(0,0,0,0.75);
             -moz-box-shadow: 2px -12px 22px -20px rgba(0,0,0,0.75);
             box-shadow: 2px -12px 22px -20px rgba(0,0,0,0.75);
              background-color: #f8f9fa;
              padding: 0;
              margin: 0;
          }
          .content {
            background-color: white;
            padding: 20px;
            border: gray solid 1px;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }

          #inputDescription{
            resize: none;
            height: 100px;
          }

          .form-button-group {
            margin: auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
          }
          html,
        body {
          height: 100%;
        }

        body {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }

        .form-signin {
          width: 100%;
          max-width: 420px;
          padding: 15px;
          margin: auto;
        }

        .form-label-group {
          position: relative;
          margin-bottom: 1rem;
        }

        .form-label-group > input,
        .form-label-group > label {
          height: 3.125rem;
          padding: .75rem;
        }

        .form-label-group > label {
          position: absolute;
          top: 0;
          left: 0;
          display: block;
          width: 100%;
          margin-bottom: 0; /* Override default `<label>` margin */
          line-height: 1.5;
          color: #495057;
          pointer-events: none;
          cursor: text; /* Match the input under the label */
          border: 1px solid transparent;
          border-radius: .25rem;
          transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
          color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
          color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
          color: transparent;
        }

        .form-label-group input::-moz-placeholder {
          color: transparent;
        }

        .form-label-group input::placeholder {
          color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
          padding-top: 1.25rem;
          padding-bottom: .25rem;
        }

        .form-label-group input:not(:placeholder-shown) ~ label {
          padding-top: .25rem;
          padding-bottom: .25rem;
          font-size: 12px;
          color: #777;
        }

        /* Fallback for Edge
        -------------------------------------------------- */
        @supports (-ms-ime-align: auto) {
          .form-label-group > label {
            display: none;
          }
          .form-label-group input::-ms-input-placeholder {
            color: #777;
          }
        }

        /* Fallback for IE
        -------------------------------------------------- */
        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
          .form-label-group > label {
            display: none;
          }
          .form-label-group input:-ms-input-placeholder {
            color: #777;
          }
        }
    </style>
  </head>
  <body>
    <div class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4" src="http://macnolo.tk/img/logo.png" alt="" width="72" height="72">
        </div>
        <div class="text-center mb-4">
        	<h1 class="h3 mb-3 font-weight-normal">Mensaje de Soporte</h1>
        </div>
        <div class="text-justify mb-4 content">
        	<p><strong>Usuario: </strong> {{$msg['user']}}</p>
			<p><strong>Email: </strong> {{$msg['email']}}</p>
			<p><strong>Contenido: </strong> {{$msg['content']}}</p>
        </div>
        <div class="btn-group btn-group-lg form-button-group" role="group">
        </div>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
    </div>
</body>
</html>