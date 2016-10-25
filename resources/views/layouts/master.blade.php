<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Netsells Exam | Frontend Developer</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ URL::asset('/css/app.css')}}" rel="stylesheet">


</head>
<body>

  @include('partials.nav')

  <div class="main">
    @yield('contents')
  </div>

  @include('partials.footer')
  <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
  <script src="{{ URL::asset('/js/vendor.js')}}"></script>
  <script src="{{ URL::asset('/js/script.js')}}"></script>


</body>
</html>
