@extends('layouts.back')

@section('title')
    Page statistique
@endsection

@section('content')
<div class="flex" id="stat">
<h1 class="p-3">Statistique sur les équipements</h1>
<div class="row justify-content-center" id="pieChartLoc"></div>

<h1 class="p-3">Statistique sur la qualité</h1>
<div class="row justify-content-center" id="doughNutChartLoc"></div>
</div>
@endsection
