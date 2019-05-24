
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
	<title>AutoLocker | Macnolo Tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#157878">
    <link rel="stylesheet" href="/css/cayman.css">
  </head>
  <body>
    <section class="page-header">
      <h1 class="project-name">AutoLocker</h1>
      <h2 class="project-tagline">Conjunto de programas para volver a tu Arduino un sistema de seguridad para puertas.</h2>
      
        <a href="https://github.com/users/mcn2004/projects/1" class="btn">Ver en GitHub</a>
      
      
        <a href="https://github.com/mcn2004/AutoLocker-Arduino/releases/download/v1.1/Bluetooth11.ino" class="btn">Descargar Programa Bluetooth</a>
        <a href="https://github.com/mcn2004/AutoLocker-Arduino/releases/download/v1.1/RFID11.ino" class="btn">Descargar Programa RFID (LTS)</a>
      
    </section>

    <section class="main-content">
      <h1 id="autolocker">AutoLocker</h1>

<p>La simpleza de ponerle seguridad con candados electrónicos.</p>

<h2 id="bluetooth">Bluetooth</h2>

<p>La app genera una conexión por Bluetooth (Android -&gt; BT 2.0 / 2.1 / 3.0) para mandar una contraseña con encriptación por MD5.</p>

<p>Incluye una app para Android. Y tambien incluye dos programas para Arduino.
Uno de configuración del módulo (Solo algunos 2.0 y BLE) y otro con el programa principal del Arduino.</p>

<p>Ha sido probado en los dispositivos con Android 4.0, 4.2, 5.0, 6.1 y 7.0.</p>

<p>Y tambien probado con un módulo Bluetooth (HC-06) y usado en una placa Arduino UNO, tambien compatible con una Arduino NANO.</p>

<h2 id="rfid">RFID</h2>

<p>Tambien puede ser elegido el modo de seguridad por RFID, el cual consta de acercar al lector targetas o tags MIFARE 1kb para poder desbloquear tu candado electrónico.</p>

<p>Este programa es open source, el cual indica que puedes modificarlo a tu gusto!! (Respetando la licencia GPL-3)</p>

<p>Si te gusta, dale estrella en GitHub y sigue a <a href="https://github.com/mcn2004">Macnolo0x7D4</a> y a <a href="https://github.com/rubek4240">RUBEK</a></p>

<h2 id="changelog">Changelog</h2>

<h3 id="v111">v1.1.1:</h3>
<ul>
  <li>Soporte de comandos por Serie. (RFID)</li>
</ul>

<h3 id="v11">v1.1:</h3>
<ul>
  <li>Soporte para modulos RFID.</li>
</ul>

<h2 id="instalación">Instalación</h2>

<p><strong>1.-</strong> Para querer instalar solo se tiene que descargar el archivo que gustes. Yo recomiendo descargar el archivo RFID (con mejor soporte actual). Para descargarlo puedes darle <a href="https://github.com/mcn2004/AutoLocker/releases/download/v1.1/RFID.1.zip">aqui</a> o subir y darle al botón de Download.zip o Download.tar.gz</p>

<p><strong>2.-</strong> Ingresa a tu aplicacion de Arduino, inyéctalo, cambia a tus tags y listo!!</p>

<p><strong>2b.-</strong> El manual de ensamblaje estará pronto.</p>

	<footer class="site-footer">
		<a href="/"><strong>Volver a Inicio</strong></a>
		<p>Macnolo Tech - Copyright 2019</p>
	</footer>
    </section>
  </body>
</html>
