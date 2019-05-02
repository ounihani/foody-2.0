<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{Config('app.name','Foody')}}</title>
</head>

<body style="background-color : #edf1f4;">

    @include('inc.navbar')
    <div class="ui container">
        @include('inc.messages') @yield('content')
    </div>
    @include('inc.footer')

</body>

</html>

<!-- scripts-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
<script src="{{asset('js/js.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!--<script>
    document.querySelector(".pagination").classList = "ui pagination menu";
    var c = document.querySelectorAll(".pagination > *");
    for (var i = 0, len = c.length; i < len; i++) {
        c[i].classList += " item";
    }
</script> -->