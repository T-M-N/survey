@extends('layouts.back')

@section('title')
    Page statistique
@endsection

@section('content')
<div class="flex">
<h1 class="p-3 border-bottom">Statistiques sur les équipements</h1>
<div class="row justify-content-center" id="pieChart"></div>

<h1 class="p-3 border-bottom">Statistiques sur la qualité</h1>
<div class="row justify-content-center" id="radarChart"></div>
</div>
@endsection
