@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>DataTables Component</h1>
            <hr>
            <p>
                This component is a wrapper around the jQuery DataTables plugin that handles some basic setup tasks autonomously

            </p>
        </div>
        <data-tables tbl-one="{{$users}}"></data-tables>
    </div>
@endsection