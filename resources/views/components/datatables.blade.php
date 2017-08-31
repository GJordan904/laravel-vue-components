@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>DataTables Component</h1>
            <hr>
            <p>
                This component is a wrapper around the jQuery DataTables plugin and handles instantiating a DataTables
                instance and building out the html for you. All that is needed is to pass a data object or a route for
                the ajax request and the component handles the rest. Additional options may be passed to the component
                as props that are then passed on to the DataTables instance.
            </p>
            <div class="col-xs-12">
                <h2>Usage</h2>
                <hr>
                <p>
                    Import the component into your page component and add it to the components object. Then you can use the
                    <code>&lt;data-table></code> tag in your template. To pass config data to datatables we utilize props. Below are
                    the available props.
                </p>
                <h4>ajax</h4>
                <p></p>
            </div>
            <hr>
        </div>
    </div>


    <data-tables :tbl-one="{{$users}}" tbl-two="{{route('some_users')}}"></data-tables>

    <div class="container">
        <div class="row">
            <h2>Page Component</h2>
            <p>
                This page is setup in a split style where some of the markup is contained in the blade template and
                some is contained inside the component. Personally, I find it easier to maintain everything in one area and I have
                simply done this for demonstration purposes.
            </p>
        </div>
    </div>
    <code-prev folder="datatables"></code-prev>
@endsection