@if (isset($slimHeader) && $slimHeader == true)
<header class="pt-5">
    <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center">
            <div class="flex flex-col md:flex-row justify-center items-center w-full">
                <a class="flex justify-center items-center w-24" href="/">
                    <img src="/asset/img/logo.png" alt="Logo" class="max-w-full">
                </a>
                <div class="flex-grow input-group p-1">
                    <div class="relative w-full">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="bi bi-search text-gray-400"></i>
                        </span>
                        <input class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-[#3a3a3a] rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300 focus:border-blue-300 bg-white dark:bg-[#2d2d2d] text-gray-900 dark:text-[#f5f5f5]" 
                               type="search" 
                               name="query" 
                               id="query" 
                               placeholder="Faites votre recherche avec Fulgure" 
                               value="{{$query}}">
                    </div>
                </div>
            </div>
            <div class="flex justify-evenly items-center mt-4 space-x-4 w-full">
                <a class="flex flex-col items-center text-center text-gray-300 hover:text-blue-500" href="/search?q={{$query}}">
                    <i class="bi bi-search text-lg"></i>
                    <span class="text-sm">Toutes</span>
                </a>
                <a class="flex flex-col items-center text-center text-gray-300 hover:text-blue-500" href="/search/actu?q={{$query}}">
                    <i class="bi bi-journal-text text-lg"></i>
                    <span class="text-sm">Actualités</span>
                </a>
                <a class="flex flex-col items-center text-center text-gray-300 hover:text-blue-500" href="/search/finance?q={{$query}}">
                    <i class="bi bi-journal-text text-lg"></i>
                    <span class="text-sm">Finance</span>
                </a>
                <a class="flex flex-col items-center text-center text-gray-300 hover:text-blue-500" href="/search/tech?q={{$query}}">
                    <i class="bi bi-journal-text text-lg"></i>
                    <span class="text-sm">Tech</span>
                </a>
            </div>
        </div>
    </div>
</header>
@endif
