<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue Components | One way to integrate Vue and Laravel</title>
    <link rel="stylesheet" href="{{ asset('app-sass.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor.css') }}">
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Vue Components</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Getting Started <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Components</a></li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')


<script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
</script>
<script src="{{ asset('vendor.js') }}"></script>
<script src="{{ asset('app.js') }}"></script>
</body>
</html>