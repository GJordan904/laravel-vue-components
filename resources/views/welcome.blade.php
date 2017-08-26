@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Laravel Vue Multi-Page</h1>
            <hr>
            <p>
                This is an example Laravel/Vue setup that is utilizing a multi-page approach with blade templates. I
                use webpack to compile assets and utilize its many optimizations and features such as lazy-loading the
                Vue components.
            </p>

            <h2>Purpose</h2>
            <hr>
            <p>
                The goal here is to provide some boilerplate code and configurations that can be used to setup a new
                app or drop into an existing Laravel multi-page application. I put this together for use in pre Laravel 5.3 apps but
                it can easily be used in place of Laravel Mix in 5.3+ apps.
            </p>
            <p>
                The key is that this is for a multi-page architecture utilizing blade templates and Laravel's routing while still
                implementing modern javascript technologies and features. This was built to be dropped into an existing Laravel
                app that is not currently using a JS framework.
            </p>

            <h2>Usage</h2>
            <hr>
            <p>
                Coming soon.
            </p>
        </div>
    </div>
@endsection