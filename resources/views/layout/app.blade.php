<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Vue Multi-Page | Integrate Vue Into A Laravel Multi-Page Architecture</title>
    <meta name="description" content="This is an example Laravel/Vue setup that is utilizing a multi-page approach with blade templates. I use webpack to compile assets and utilize its many optimizations and features such as lazy-loading the Vue components.">
    <link rel="stylesheet" href="{{ asset('vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
<body>
<div id="app">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url()}}">Laravel Vue Multi-Page</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{Route::currentRouteName() == 'started' ? 'active' : ''}}"><a href="{{url('started')}}">Getting Started</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Components <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('datatable_index')}}">Datatables</a></li>
                            <li><a href="{{route('tabs_index')}}">Tabs</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
</script>
<script src="{{ asset('vendor.js') }}"></script>
<script src="{{ asset('app.js') }}"></script>

</body>
</html>