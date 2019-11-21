@extends('backend')

@section('title') Patienten &ndash;
@parent
@endsection

<?php
$page = 1;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}
$pfeil = [
    ["svnr" => ""],
    ["lastname" => ""],
    ["address" => ""],
    ["plz" => ""],
    ["city" => ""],
    ["country" => ""]
];
if (isset($_GET["field"])) {
    if ($_GET["field"] == "svnr") {
        if (isset($_COOKIE["order"])) {
            if ($_COOKIE["order"] == "asc") {
                $pfeil["svnr"] = "down";
            }
            if ($_COOKIE["order"] == "desc") {
                $pfeil["svnr"] = "up";
            }
        }
    }
}
if (isset($_GET["field"])) {
    if ($_GET["field"] == "lastname") {
        if (isset($_COOKIE["order"])) {
            if ($_COOKIE["order"] == "asc") {
                $pfeil["lastname"] = "down";
            }
            if ($_COOKIE["order"] == "desc") {
                $pfeil["lastname"] = "up";
            }
        }
    }
}
if (isset($_GET["field"])) {
    if ($_GET["field"] == "address") {
        if (isset($_COOKIE["order"])) {
            if ($_COOKIE["order"] == "asc") {
                $pfeil["address"] = "down";
            }
            if ($_COOKIE["order"] == "desc") {
                $pfeil["address"] = "up";
            }
        }
    }
}
if (isset($_GET["field"])) {
    if ($_GET["field"] == "plz") {
        if (isset($_COOKIE["order"])) {
            if ($_COOKIE["order"] == "asc") {
                $pfeil["plz"] = "down";
            }
            if ($_COOKIE["order"] == "desc") {
                $pfeil["plz"] = "up";
            }
        }
    }
}
if (isset($_GET["field"])) {
    if ($_GET["field"] == "city") {
        if (isset($_COOKIE["order"])) {
            if ($_COOKIE["order"] == "asc") {
                $pfeil["city"] = "down";
            }
            if ($_COOKIE["order"] == "desc") {
                $pfeil["city"] = "up";
            }
        }
    }
}
if (isset($_GET["field"])) {
    if ($_GET["field"] == "country") {
        if (isset($_COOKIE["order"])) {
            if ($_COOKIE["order"] == "asc") {
                $pfeil["country"] = "down";
            }
            if ($_COOKIE["order"] == "desc") {
                $pfeil["country"] = "up";
            }
        }
    }
}
?>

@section('main')
    <form action="/patients" method="GET">
        Suche: <input type="text" name="search">
        <button type="submit">Suchen</button>
    </form>

    <br>

    <table class="table table-dark">
        <tr>

            <th><a href="?page={{$page}}&field=svnr">SVNr <i
                        class='fa fa-sort-@isset($pfeil["svnr"]){{$pfeil["svnr"]}}@endisset'></i></a> </th>
            <th class="text-left"><a href="?page={{$page}}&field=lastname">Name <i
                        class='fa fa-sort-@isset($pfeil["lastname"]){{$pfeil["lastname"]}}@endisset'></i></a> </th>
            <th><a href="?page={{$page}}&field=address">Adresse <i
                        class='fa fa-sort-@isset($pfeil["address"]){{$pfeil["address"]}}@endisset'></i></a> </th>
            <th><a href="?page={{$page}}&field=plz">PLZ <i
                        class='fa fa-sort-@isset($pfeil["plz"]){{$pfeil["plz"]}}@endisset'></i></a> </th>
            <th><a href="?page={{$page}}&field=city">Ort <i
                        class='fa fa-sort-@isset($pfeil["city"]){{$pfeil["city"]}}@endisset'></i></a> </th>
            <th><a href="?page={{$page}}&field=country">Land <i
                        class='fa fa-sort-@isset($pfeil["country"]){{$pfeil["country"]}}@endisset'></i></a> </th>
        </tr>
        @foreach($patients as $patient)
            <tr>
                <td>{{$patient->svnr}}</td>
                <td class="text-left">{{$patient->lastname}}, {{$patient->firstname}}</td>
                <td>{{$patient->address}}</td>
                <td>{{$patient->plz}}</td>
                <td>{{$patient->city}}</td>
                <td>{{$patient->country}}</td>
            </tr>
        @endforeach
    </table>
    {!! $patients->appends(\Request::except('page'))->render() !!}
@endsection
