<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue Components | One way to integrate Vue and Laravel</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url()}}">Vue Components</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Getting Started <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Components <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('datatable_index')}}">Datatables</a></li>
                        <li role="separator" class="divider"></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="app">
    @yield('content')
</main>

<script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
</script>
<script src="{{ asset('vendor.js') }}"></script>
<script src="{{ asset('app.js') }}"></script>

</body>
</html>