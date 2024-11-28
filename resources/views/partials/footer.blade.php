<footer class="mt-5">
    @if (isset($slimHeader) && $slimHeader == true)
    <!-- Footer simple et léger si possible une petit ligne de 50px max de hauter -->
    <div></div>
    @else
        <!-- Footer avec plus d'information -->
        <div class="container mx-auto">
            <!-- Information général -->
            <div class="flex flex-row">
                <div class="col">
                    <a class="flex justify-center items-center w-24" href="/">
                        <img src="/asset/img/logo.png" alt="Logo" class="max-w-full">
                    </a>
                    <p>
                        Fulgure, vos données sont vos données
                    </p>
                </div>
                <div class="col">
                    
                </div>
            </div>
            <div class="border-t-4">
                <!-- Information légal -->
            </div>
        </div>
    @endif
</footer>