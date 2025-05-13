@extends('base')

@section('name', 'Fulgure - Résultats de recherche pour ' . $query)

@section('body')
<main class="container mt-5 mx-auto h-full min-h-screen">
    @if (!empty($results))
        <span>Nombre de résultats : {{ count($results) }}</span>
        <div class="mt-4">
            @foreach ($results as $result)
                <div class="mb-3 p-4">
                    <a href="{{ $result['url'] }}" target="_blank" class="text-blue-500 underline">{{ $result['title'] }}</a>
                    <p class="text-gray-200 text-sm mt-2">{{ $result['description'] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center text-red-500 items-center">Nous n'avons trouvé aucun résultat</div>
    @endif
</main>
@endsection