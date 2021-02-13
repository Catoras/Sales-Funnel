<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Q Dental') }}</title>
    <link rel="icon" href="{{ secure_asset('Resources/your_logo.png') }}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald&family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ secure_asset('css/Estilos.css') }}" />
    <script defer src="{{ secure_asset('js/script.js') }}"></script>
  </head>
  <body>
    <header class="Header">
      <div class="Container">
        <figure>
          <img src="{{ secure_asset('img/your_logo.png') }}" alt="Logo QDENTAL" title="Logo QDENTAL"/>
        </figure>
      </div>
    </header>
    <section class="Form">
      <div class="Container">
        <article class="Hero">
          <h1>Recibe Tu Limpieza Dental <strong>GRATIS!!</strong></h1>
          <h2>¡Solo 20 Vouchers disponibles!</h2>
          <form
            class="Input-Form"
            autocomplete="on"
            onsubmit="return validation()"
            method="post"
            action="{{ route('solicitudes.store') }}"
          >
            @csrf
            <div id="error_message"></div>
            <input
              name="name"
              type="text"
              placeholder="Tu nombre"
              required
              autocomplete="name"
              id="name"
            />
            <input
              type="email"
              name="email"
              placeholder="Tu correo electrónico"
              required
              autocomplete="email"
              id="email"
            />
            <input
              type="tel"
              name="phone"
              placeholder="Tu numero telefonico"
              required
              autocomplete="tel"
              id="tel"
            />
            <button>Si, quiero mi limpieza dental gratis</button>
          </form>
        </article>
      </div>
    </section>
    <section class="Address">
      <div class="Container">
        <article class="Map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12147.391861531754!2d-3.7041189!3d40.4343653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9913ac5938d0e391!2sCl%C3%ADnica%20Q-Dental!5e0!3m2!1ses-419!2smx!4v1587623446969!5m2!1ses-419!2smx"
            frameborder="0"
            style="border: 0;"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </article>
      </div>
    </section>
    <footer class="Footer">
      <div class="Container">
        <img src="{{ secure_asset('img/your_logo.png') }}" alt="Logo QDENTAL" title="Logo QDENTAL" />
        <h5>QDENTAL - Todos los derechos reservados</h5>
      </div>
    </footer>
  </body>
</html>
