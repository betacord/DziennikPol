@extends('dashboard.master')
@section('content')

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard.shtml"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Wydarzenia</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Wydarzenia</h1>

        </div>
    </div>
    @foreach($events as $event)
        <link rel="stylesheet" href="style.css">
        <div class="container">
            <div class="row">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <div class="box">
                            <div class="box-content">
                                <h1 class="tag-title">Wydarzenie</h1>
                                <hr />
                                <div class="col-md-12 text-left">
                                    <p><b>Nazwa wydarzenia:</b></p> <div id="nadawca">{{$event->event_topic}}</div>
                                    <hr />
                                    <p><b>Data:</b></p><div id="temat">{{$event->event_date}}</div>
                                    <hr />
                                    <p><b>Godzina:</b></p><div id="temat">{{$event->event_time}}</div>
                                    <hr />
                                    <p><b>TREŚĆ:</b></p><div id="tresc" class="col-md-12">
                                        {{$event->event_description}}
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

@stop