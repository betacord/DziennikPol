@extends('dashboard.master')
@section('content')

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard.shtml"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Wiadomości/ Odebrane</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Wiadomości</h1>
        </div>
    </div>


        <link rel="stylesheet" href="style.css">
        <div class="container">
            <div class="row">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <div class="box">
                            <div class="box-content">
                                <h1 class="tag-title">Wiadomość</h1>
                                <hr />
                                <div class="col-md-12 text-left">
                                    <p><b>Od:</b></p> <div id="nadawca">{{$message->teacher->name}}</div>
                                    <hr />
                                    <p><b>Data i godzina wysłania:</b></p><div id="temat">{{$message->created_at}}</div>
                                    <hr />
                                    <p><b>Tytuł:</b></p><div id="temat">{{$message->title}}</div>
                                    <hr />
                                    <p><b>TREŚĆ:</b></p><div id="tresc" class="col-md-12">
                                        {{$message->contents}}
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>






@stop