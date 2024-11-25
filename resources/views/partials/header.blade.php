@if (isset($slimHeader) && $slimHeader == true)
<header class="pt-5">
    <div class="container">
        <div classd="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                <a class="col-1 d-flex justify-content-center align-items-center" href="/"><img src="/asset/img/logo.png" alt="" width="auto" style="max-width: 100px;"></a>
                <div class="col input-group p-1">
                    <span class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                    </span>
                    <input class="form-control search-bar-input" type="search" name="query" id="query" placeholder="Faites votre recherche avec Fulgure" value="{{$query}}" style="max-height:38px;">
                    <!--<div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="search_microphone()" data-user-id="" aria-label="Mic"><i class="bi bi-mic"></i></button>
                    </div>-->
                </div>
            </div>
            <div class="row justify-content-evenly align-items-center">
                <a class="col-1" href="/search?q={{$query}}">
                    <i class="bi bi-search"></i>
                    <span>Toutes</span>
                </a>
                <a class="col-1" href="/search/actu?q={{$query}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Actualités</span>
                </a>
                <a class="col-1" href="/search/finance?q={{$query}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Finance</span>
                </a>
                <a class="col-1" href="/search/tech?q={{$query}}">
                    <i class="bi bi-journal-text"></i>
                    <span>Tech</span>
                </a>
            </div>
        </div>
    </div>
</header>
@endif