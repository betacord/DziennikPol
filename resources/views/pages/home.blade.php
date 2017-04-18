@extends('master.master')
@section('content')

@include('master.slider')

<div class="tabela container-fluid wrapper">
    <table class="table-fill ">
        <thead>
        <tr>
            <th class="text-left">Taryfa</th>
            <th class="text-left">Cena</th>
        </tr>
        </thead>
        <tbody class="table-hover">
        <tr>
            <td class="text-left">Szkoła podstawowa do 150 użytkowników</td>
            <td class="text-left"><nobr>1800 zł</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Szkoła podstawowa do 300 użytkowników</td>
            <td class="text-left"><nobr>3600 zł</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Gimnazjum do 150 użytkowników </td>
            <td class="text-left"><nobr>1800 zł</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Gimnazjum do 300 użytkowników</td>
            <td class="text-left"><nobr>3600 zł</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Liceum do 150 użytkowników</td>
            <td class="text-left"><nobr>3600 zł</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Liceum do 300 użytkowników</td>
            <td class="text-left"><nobr>3600 zł</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Szkoły powyżej 300 użytkowników</td>
            <td class="text-left"><nobr>Wycena indywidualna</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Szkolenie z obsługi programu dla 40 osób</td>
            <td class="text-left"><nobr>1000 zł</nobr></td>
        </tr>
        <tr>
            <td class="text-left">Wsparcie</td>
            <td class="text-left"><nobr>Pierwszy rok 0 zł</nobr></td>
        </tr>
        </tbody>
    </table>

</div>

@stop