<!DOCTYPE html>
<html lang="en">

<head>
  <!-- подключение файла шаблона -->
  @include('user.layouts.head')

</head>

<body>

    @include('user.layouts.header')

    <!-- вставка контента в нужной последовательности -->
   @section('main-content') 

    @show() <!-- отображение секции -->

    <!-- Footer -->
    <footer>
       @include('user.layouts.footer')
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('user/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('user/js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('user/js/clean-blog.min.js') }}"></script>

</body>

</html>
