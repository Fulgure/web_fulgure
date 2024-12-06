@include('modal.commentaire')
@include('modal.cookie')
<footer class="mt-5 py-8">
    @if (isset($slimHeader) && $slimHeader == true)
    <!-- Footer simple et léger si possible une petit ligne de 50px max de hauter -->
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <!-- Left section -->
        <div class="flex space-x-4 mb-5 md:mb-0">
          {{-- <div class="group relative"> 
            <button class="hover:underline">Résultats</button>
          </div>--}}
          <div class="group relative">
            <button class="hover:underline">Informations légales</button>
          </div>
          {{-- <div class="group relative"> 
            <button class="hover:underline">Services</button>
          </div>--}}
          <div class="group relative">
            <a class="hover:underline">À propos de Fulgure</a>
          </div>
        </div>
    
        <!-- Center section -->
        <div class="mb-5 md:mb-0">© 2024 Fulgure. Tous droits réservés.</div>
    
        <!-- Right section -->
        <div>
            <button class="text-gray-300 border border-gray-500 px-4 py-2 rounded hover:bg-gray-700" onclick="openModal('commentaire-modal')" type="button">
                Partager vos commentaires
            </button>
        </div>
    </div>
    @else
        <!-- Footer avec plus d'information -->
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <!-- Left Section -->
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <span class="text-xl font-semibold"><img src="/asset/img/logo.png" alt="Logo de Fulgure"></span>
                    </div>
                    <p class="mt-2">Un moteur pour vous, pas pour vos données.</p>
                    {{-- <button class="mt-4 bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded">Découvrir le service</button> --}}
                </div>

                <!-- Center Section -->
                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-16">
                    <div>
                        <h3 class="font-semibold text-white">Services</h3>
                        <ul class="mt-2 space-y-1">
                            <li><a href="/" class="hover:underline">Search</a></li>
                            {{-- <li><a href="maps.fulgure.fr" class="hover:underline">Maps</a></li> --}}
                            {{-- <li><a href="#" class="hover:underline">App Android</a></li> --}}
                            {{-- <li><a href="#" class="hover:underline">App iOS</a></li> --}}
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-semibold text-white">À propos de Fulgure</h3>
                        <ul class="mt-2 space-y-1">
                            {{-- <li><a href="#" class="hover:underline">Better Web</a></li> 
                            <li><a href="#" class="hover:underline">Nous rejoindre</a></li>
                            <li><a href="#" class="hover:underline">Centre d'aide</a></li>--}}
                            <li><a href="https://about.fulgure.fr/contact" class="hover:underline">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Right Section -->
                <div>
                    <h3 class="font-semibold text-white">Suivez-nous</h3>
                    <div class="mt-2 flex space-x-4">
                        {{-- <a href="#" class="hover:text-white"><i class="fa fa-instagram"></i> Instagram</a> --}}
                        <a href="#" class="hover:text-white"><i class="bi bi-twitter-x"></i></a>
                        {{-- <a href="#" class="hover:text-white"><i class="fa fa-tiktok"></i> TikTok</a> --}}
                        <a href="https://www.linkedin.com/company/fulgure/" class="hover:text-white"><i class="bi bi-linkedin"></i></a>
                        <a href="https://discord.gg/Xw6E4nWhAx" class="hover:text-white"><i class="bi bi-discord"></i></a>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-700">

            <div class="flex flex-col md:flex-row justify-between text-sm">
                <div class="space-y-2 md:space-y-0 md:flex md:space-x-4">
                    <a href="https://about.fulgure.fr/legal/confidentialite" target="_blank" class="hover:underline">Politique de confidentialité</a>
                    <a href="https://about.fulgure.fr/legal/utilisation" target="_blank" class="hover:underline">Conditions d'utilisation</a>
                    <a href="https://about.fulgure.fr/legal/mentions-legales" target="_blank" class="hover:underline">Mentions légales</a>
                    {{-- <a href="#" class="hover:underline">Classement</a> --}}
                    <a href="#" class="hover:underline" onclick="cookieModal(event)">Gestion des cookies</a>
                </div>

                <p class="mt-4 md:mt-0">© 2024 Fulgure. Tous droits réservés.</p>

                <button class="text-gray-300 border border-gray-500 px-4 py-2 rounded hover:bg-gray-700" onclick="openModal('commentaire-modal')" type="button">
                    Partager vos commentaires
                </button>
            </div>
        </div>
    @endif
</footer>