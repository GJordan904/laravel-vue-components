@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Laravel Vue Multi-Page</h1>
                <hr>
                <p>
                    This is an example Laravel/Vue setup that is utilizing a multi-page approach with blade templates. I
                    use webpack to compile assets and utilize its many optimizations and features such as lazy-loading the
                    Vue components. Setting up the front end code this way allows us to optimize the sites front end code and
                    keep it organized and maintainable.
                </p>
            </div>

            <div class="col-xs-12">
                <h2>App Structure</h2>
                <hr>
                <p>
                    The app is a standard Laravel setup utilizing blade templates. The front end consists of the vendor file
                    that holds all of our vendor code, the main app file that serves as our entry point and creates our root Vue instance,
                    and then pages and components.
                </p>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Pages</div>
                        <div class="panel-body">
                            <p>
                                Pages serve as the root component for a view and are setup to be lazy-loaded when that view is navigated to.
                                It is up to you how to structure the markup but I find it easiest just to put it all in the page components template.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Components</div>
                        <div class="panel-body">
                            <p>
                                Components are reusable child components that are imported into the page components. These components are
                                usually built for specific purposes like making a data table or creating a drop down menu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <h2>Usage</h2>
                <hr>
                <p>
                    The existing-app branch currently holds just the code needed to start with an existing app.
                    That branch contains the following:
                </p>
                <ul>
                    <li>.bablerc</li>
                    <li>package.json</li>
                    <li>webpack.config.js</li>
                    <li>webpack.helper.js</li>
                    <li>postcss.config.js</li>
                    <li>resources/assets/**</li>
                </ul>
                <p>
                    Add those files to your app in the same place they exist in this repo, do not place them anywhere else or they will not work.
                    Refer to the layouts.app blade template for an example of how to use the assets built by webpack.
                </p>
            </div>
        </div>
    </div>
@endsection