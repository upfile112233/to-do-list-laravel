<!DOCTYPE html>
<html lang="en">

<head>
@include('tasks.Layouts.header')
</head>

<body>
  <!-- Start your project here-->
  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #7e40f6;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1))
    }

    .mask-custom {
      background: rgba(24, 24, 16, .2);
      border-radius: 2em;
      backdrop-filter: blur(25px);
      border: 2px solid rgba(255, 255, 255, 0.05);
      background-clip: padding-box;
      box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }
  </style>
@yield('main')
@include('tasks.Layouts.footer')
</body>
</html>
