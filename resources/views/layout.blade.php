<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Form Sign up - Test Form by Edgar Marquez</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>

    <div class="topnav">
      <a href="{{route('home')}}">Home</a>
      <a href="{{ route('submission') }}">Submit Form</a>
      <a href="https://github.com/egempiu" target="_blank">Github</a>
    </div>
    <!-- Begin page content -->
     <main role="main" class="container">
       <h1 class="mt-5">Form Submission Test</h1>
       <p class="lead">@yield('content')</p>
     </main>

     <footer class="footer">
       <div class="container">
         <span class="text-muted">Edgar Marquez</span>
       </div>
     </footer>
   </body>
 </html>


  </body>
</html>
