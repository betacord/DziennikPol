@extends('dashboard.master')
@section('content')

    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/dashboard.shtml"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Oceny</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Oceny</h1>
        </div>
    </div>

    <div class="tabela container-fluid wrapper">
        <table class="table-fill ">
            <thead>
            <tr>
                <th class="text-left">Przedmiot</th>
                <th class="text-left">Oceny</th>
            </tr>
            </thead>
            <tbody class="table-hover">
            @foreach($listMarks as $key => $value)
                <tr>
                    <td class="text-left">{{ $key }}</td>
                    <td class="text-left"><nobr>{{ $value }}</nobr></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@stop