@extends('base')

@section('body')
<main class="container mt-5 mx-auto h-full min-h-screen">
    @if (!empty($results))
        <span></span>
        @foreach ($results as $result)
            <div>

            </div>
        @endforeach
    @else
        <div class="text-center text-red-500 items-center">Nous avons trouver aucun resultat</div>
    @endif
</main>
@endsection