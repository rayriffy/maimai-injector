<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | maimai Injector</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <style>
    .input-field input:focus + label {
      color: #2196f3 !important;
    }
    .row .input-field input:focus {
      border-bottom: 1px solid #2196f3 !important;
      box-shadow: 0 1px 0 0 #2196f3 !important
    }
    .dropdown-content li > a, .dropdown-content li > span
    {
      color: #2196f3 !important;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <h3>maimai Data Insertor</h3>
      <p>This software is use for insert data into database ONLY.<br /><br /><div class="right"> @include('module.data') </div></p>
    </div>
    <div class="row">
      @yield('content')
    </div>
  </div>
  @yield('footer')
  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="footer-copyright">
        <div class="white-text">
        © 2018 Phumrapee Limpianchop
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>
</body>
</html>