<!-- Modal Commentaire -->
<div id="commentaire-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="bg-light dark:bg-[#1e1e1e] dark:text-[#f5f5f5] rounded-lg border border-gray-200 shadow-lg md:w-1/3 w-4/5">
        <!-- Modal header -->
        <div class="flex justify-between items-center border-b border-gray-200 px-6 py-4">
          <h3 class="text-lg font-semibold">Vous en pensez quoi de Fulgure</h3>
          <button class="text-gray-400 hover:text-gray-600" onclick="closeModal('commentaire-modal')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
    
        <!-- Modal body -->
        <div class="justify-center p-5">
            {{-- <div> 
                <select id="amelioration" class="bg-white text-gray-900 dark:bg-[#2d2d2d] dark:text-[#f5f5f5]">
                  <option value="null">Sélectionner un élément</option>
                  <option value="home">Page d'acceuil</option>
                  <option value="result">Page de resultat</option>
                </select>
                <label for="amelioration">Que pouvons nous améliore</label>
            </div> --}}
            <div>
                <textarea class="w-full rounded-lg border border-gray-200 bg-white p-4 text-gray-900 dark:bg-[#2d2d2d] dark:text-[#f5f5f5]" name="comment" id="comment" cols="30" rows="10" placeholder="Votre commentaire"></textarea>
            </div>
        </div>
        @csrf
        <!-- Modal footer -->
        <div class="flex justify-end items-center border-t border-gray-200 px-6 py-4">
          <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg mr-2 hover:bg-gray-300" onclick="closeModal('commentaire-modal')">Annuler</button>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700" id="submit_commentaire">Confirmer</button>
        </div>
      </div>
</div>