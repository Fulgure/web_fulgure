@extends('base')

@section('body')
<main>
    <div class="container text-center mt-5 pt-5 mb-5 pb-5">
        <div class="align-items-center justify-content-center" style="display: flex; flex-direction:row;">
            <img class="logo" src="/asset/img/logo.png" alt="Logo de Fulgure" width="80" height="auto" loading="lazy">
            <h1>FULGURE</h1>
        </div>
        <div class="input-group mt-3">
            <span class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </span>
            <input class="form-control search-bar-input" type="search" name="query" id="query" placeholder="Faites votre recherche avec Fulgure" value="">
            <!--<div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" onclick="search_microphone()" data-user-id="" aria-label="Mic"><i class="bi bi-mic"></i></button>
            </div>-->
        </div>
    </div>
    <div class="d-flex container flex-column flex-md-row h-100 align-items-stretch">
        <div class="col my-5 m-2">
            <div class="p-5 text-center bg-body-tertiary rounded-3 h-100">
                <h1 class="text-body-emphasis">Le respect de votre vie privée</h1>
                <p class="lead">
                    Fulgure est un moteur de recherche qui respecte la vie privée de ses utilisateurs. Nous ne stockons pas vos données de recherche et nous ne vous traçons pas. Nous ne vendons pas vos données à des tiers. Nous ne vous montrons pas de publicités. Nous ne suivons pas votre activité.
                </p>
            </div>
        </div>
        <div class="col my-5 m-2">
            <div class="p-3 text-center bg-body-tertiary rounded-3 h-100 d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-body-emphasis ">Nombre de recherches faites sur Fulgure</h1>
                <h4 class="mt-3 p-3 bg-secondary rounded-circle align-items-center d-flex justify-content-center text-body-emphasis" id="count-search" style="width: 100px; height:100px;">0</h4>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">La transparence totale de Fulgure</h1>
            <p class="lead">
                Fulgure est un moteur de recherche indiquant à ses utilisateurs quelles données sont collectées et leurs usages. Actuellement Fulgure ne collecte aucune donnée excepté certaines données destinées au fonctionnement de fonctionnalités vitales.
            </p>
        </div>
    </div>
</main>
@endsection