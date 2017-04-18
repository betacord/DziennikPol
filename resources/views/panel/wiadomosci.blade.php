@extends('dashboard.master')
@section('content')

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard.shtml"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Wiadomości</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Wiadomości</h1>
        </div>
        <div class="col-md-12">
            <a class="btn btn-primary pull-right" href="wiadomosci/create.shtml">wyślij wiadomość</a>
        </div>
    </div>
    </br>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Od</th>
                <th>Temat</th>
                <th>Wysłano</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->teacher->name }}</td>
                    <td><a href="{{ url('dashboard/wiadomosci/'.$message->id.'.shtml') }}">{{ $message->title }}</a></td>
                    <td>{{ $message->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>


@stop