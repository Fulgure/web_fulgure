<footer class="dark mt-5">
    @if (isset($slimHeader) && $slimHeader == true)
    <!-- Footer simple et léger si possible une petit ligne de 50px max de hauter -->
    <div></div>
    @else
        <!-- Footer avec plus d'information -->
        <div class="container mx-auto">
            <div class="flex flex-row">
                <div class="col"></div>
            </div>
            <div class="border-t-4"></div>
        </div>
    @endif
</footer>