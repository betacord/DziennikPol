@extends('dashboard.master')
@section('content')

<div class="row">
    <ol class="breadcrumb">
        <li><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Panel</h1>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">{{ $marksCount }}</div>
                    <div class="text-muted">Oceny</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">{{$absencesCount}}</div>
                    <div class="text-muted">Nieobecności</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">{{$messagesCount}}</div>
                    <div class="text-muted">Wiadomości</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">{{$eventsCount}}</div>
                    <div class="text-muted">Wydarzenia</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Nowe oceny</h4>
                <div class="easypiechart" id="easypiechart-blue" data-percent="{{$notreadedMarks}}" ><span class="percent">{{$notreadedMarks}}%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Nowe nieobecności</h4>
                <div class="easypiechart" id="easypiechart-orange" data-percent="{{$notreadedAbsences}}" ><span class="percent">{{$notreadedAbsences}}%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Nowe Wiadomości</h4>
                <div class="easypiechart" id="easypiechart-teal" data-percent="{{$notreadedMessages}}" ><span class="percent">{{$notreadedMessages}}%</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Nowe wydarzenia</h4>
                <div class="easypiechart" id="easypiechart-red" data-percent="0" ><span class="percent"><!--{{$notreadedEvents}}-->0%</span>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-md-8">

        <div class="panel panel-default chat">
            <div class="panel-heading" id="accordion"><svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg> Aktualności</div>
            <div class="panel-body">
                <ul>
                    @foreach($actualnnoscis as $actualnnosci)
                    <li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <strong class="primary-font">{{$actualnnosci->actualnnoscis_topic}}</strong> <small class="text-muted">{{$actualnnosci->created_at}}</small>
                            </div>
                            <p>
                                {{$actualnnosci->actualnnoscis_description}}
                            </p>
                        </div>
                    </li>

                   @endforeach
                </ul>
            </div>

        </div>

    </div>

    <div class="col-md-4">
        @foreach($luckynumbers as $luckynumber)


        <div class="panel panel-blue">
            <div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Szczęśliwy numerek</div>
            <div class="panel-body">
                <ul class="todo-list">
                    <div class="panel-body easypiechart-panel">
                        <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">{{$luckynumber->number}}</span>
                        </div>
                    </div>
                </ul>
            </div>
        </div>

    </div>
</div>
@endforeach

@stop