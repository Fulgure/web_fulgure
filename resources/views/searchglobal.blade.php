@extends('base')

@section('body')
<main class="container mt-5">
    @if (!empty($results))
        
    @else
        <div class="alert alert-danger">Nous avons trouver aucun resultat</div>
    @endif
</main>
@endsection