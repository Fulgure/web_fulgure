<!-- Modal Cookie -->
<div id="cookie" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="bg-light dark:bg-[#1e1e1e] dark:text-[#f5f5f5] rounded-lg border border-gray-200 shadow-lg w-1/3">
        <!-- Modal header -->
        <div class="flex justify-between items-center border-b border-gray-200 px-6 py-4">
          <h3 class="text-lg font-semibold">Paramètres des cookies</h3>
          <button class="text-gray-400 hover:text-gray-600" onclick="closeModal('cookie')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Modal body -->
        <div class="justify-center p-5">
            <p class="text-sm text-gray-600 dark:text-[#f5f5f5]">
                Nous et nos partenaires sélectionnés traitons des données personnelles en lien avec votre navigation sur nos contenus pour les finalités listées ci-dessous. Pour en savoir plus, consultez notre <a href="#" class="text-blue-600 hover:underline">politique de confidentialité</a>.
            </p>

            <!-- Options de cookies -->
            <div class="mt-4">
                <div class="flex justify-between items-center py-2 border-b border-gray-200">
                    <span class="text-gray-800 dark:text-[#f5f5f5] font-medium">+ Analyses</span>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="analyses" value="declined" class="hidden peer" disabled>
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg cursor-pointer peer-checked:bg-red-600 peer-checked:text-white hover:bg-gray-300" aria-disabled="true">
                                Refuser
                            </span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="analyses" value="accepted" class="hidden peer" checked>
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg cursor-pointer peer-checked:bg-green-600 peer-checked:text-white hover:bg-gray-300" aria-checked="true">
                                Accepter
                            </span>
                        </label>
                    </div>
                </div>                

                <div class="flex justify-between items-center py-2 border-b border-gray-200">
                    <span class="text-gray-800 dark:text-[#f5f5f5] font-medium">+ Publicité</span>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="publicite" value="declined" class="hidden peer">
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg cursor-pointer peer-checked:bg-red-600 peer-checked:text-white hover:bg-gray-300">
                                Refuser
                            </span>
                        </label>
                        <label class="flex items--center space-x-2">
                            <input type="radio" name="publicite" value="accepted" class="hidden peer" checked>
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg cursor-pointer peer-checked:bg-green-600 peer-checked:text-white hover:bg-gray-300" aria-checked="true">
                                Accepter
                            </span>
                        </label>
                    </div>
                </div>

                <div class="flex justify-between items-center py-2 border-b border-gray-200">
                    <span class="text-gray-800 dark:text-[#f5f5f5] font-medium">+ Personnalisation</span>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="personnalisation" value="declined" class="hidden peer">
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg cursor-pointer peer-checked:bg-red-600 peer-checked:text-white hover:bg-gray-300">
                                Refuser
                            </span>
                        </label>
                        <label class="flex items--center space-x-2">
                            <input type="radio" name="personnalisation" value="accepted" class="hidden peer" checked>
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg cursor-pointer peer-checked:bg-green-600 peer-checked:text-white hover:bg-gray-300" aria-checked="true">
                                Accepter
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            @csrf
        </div>

        <!-- Modal footer -->
        <div class="flex justify-between items-center border-t border-gray-200 px-6 py-4">
          <div>
            <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700" onclick="rejectAllCookies()">Tout refuser</button>
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700" onclick="acceptAllCookies()">Tout accepter</button>
          </div>
          <button class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-500" onclick="saveCookies()">Enregistrer</button>
        </div>
      </div>
</div>