
@extends('dashboard.master')
@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard.shtml"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Wiadomości/ Wysyłanie</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error )
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>

                        </div>

                    @endif
                    {!! Form::open(['url'=>'dashboard/wiadomosci/store.shtml','class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('to_id','Odbiorca:') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::select('to_id', $list, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('title','Tytuł:') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('contents','Opis:') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::textarea('contents',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    {!! Form::hidden('from_id', Auth::user()->id) !!}
                    {!! Form::hidden('read', 0) !!}

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Wyślij wiadomość',['class'=>'btn btn-primary']) !!}
                        </div>

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>



@stop