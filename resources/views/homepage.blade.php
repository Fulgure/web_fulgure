@extends('base')

@section('body')
<main>
    <div class="container mx-auto text-center mt-10 pt-32 mb-10 pb-32">
        <div class="flex items-center justify-center">
            <img class="logo" src="/asset/img/logo.png" alt="Logo de Fulgure" class="w-20 h-auto" loading="lazy">
            <h1 class="text-4xl font-bold ml-4 text-gray-900 dark:text-white">FULGURE</h1>
        </div>
        <div class="mt-6">
            <div class="relative w-full max-w-lg mx-auto">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="bi bi-search text-gray-400"></i>
                </span>
                <input class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-300 bg-white dark:bg-gray-700 text-gray-900 dark:text-white" type="search" name="query" id="query" placeholder="Faites votre recherche avec Fulgure" value="">
            </div>
        </div>
    </div>

    <div class="container mx-auto flex flex-col md:flex-row h-full items-stretch gap-4">
        <div class="flex-1 my-5">
            <div class="p-6 text-center bg-gray-100 dark:bg-gray-800 rounded-lg h-full">
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Le respect de votre vie privée</h1>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    Fulgure est un moteur de recherche qui respecte la vie privée de ses utilisateurs. Nous ne stockons pas vos données de recherche et nous ne vous traçons pas. Nous ne vendons pas vos données à des tiers. Nous ne vous montrons pas de publicités. Nous ne suivons pas votre activité.
                </p>
            </div>
        </div>

        <div class="flex-1 my-5">
            <div class="p-6 text-center bg-gray-100 dark:bg-gray-800 rounded-lg h-full flex flex-col justify-center items-center">
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Nombre de recherches faites par jour sur Fulgure</h1>
                <h4 class="mt-6 p-6 bg-gray-300 dark:bg-gray-700 rounded-full flex items-center justify-center text-xl font-bold text-gray-900 dark:text-white" id="count_search" style="width: 100px; height: 100px;" data-search-count="10000">0</h4>
            </div>
        </div>
    </div>

    <div class="container mx-auto my-10">
        <div class="p-6 text-center bg-gray-100 dark:bg-gray-800 rounded-lg">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">La transparence totale de Fulgure</h1>
            <p class="mt-4 text-gray-700 dark:text-gray-300">
                Fulgure est un moteur de recherche indiquant à ses utilisateurs quelles données sont collectées et leurs usages. Actuellement Fulgure ne collecte aucune donnée excepté certaines données destinées au fonctionnement de fonctionnalités vitales.
            </p>
        </div>
    </div>
</main>
@vite(['resources/js/home.js'])
@endsection
