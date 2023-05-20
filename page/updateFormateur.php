<button class="h-8 w-8"
    aria-label="Edit" data-bs-toggle="modal" style="color: blue; " data-bs-target="#exa">
    <svg class='h-8 w-8 text-red-500'  fill='none' viewBox='0 0 24 24' stroke='currentColor' style="color: #1e429f;">
      <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'/>
    </svg>
</button>

<br/>
<!-- formulaire -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="exa" tabindex="-1" aria-labelledby="exaLabel" aria-hidden="true">
  <div class="modal-dialog relative `w-auto `pointer-events-none">
    <div  class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exaLabel">Modifier formateur</h5>
        <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
              data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <form method="post" action=" ../controller/formateur-controller.php?action=update">
              <div  class="items-center ">
                <div
                  class="  h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg  ">
                  <div class="  flex-col overflow-y-auto md:flex-row">
                    <div class="h-32 md:h-auto">
                      <div class="  items-center justify-center md:w-1">        
                        <div class="w-full ">
                          <div class="flex flex-1">
                              <div class="position-number" class="block mt-4 ">
                                <label class="block mt-4 mr-2">
                                  <span class="text-gray-700 dark:text-gray-400">nom</span>
                                  <input name="nom" id="nom" value="<?php echo $st['nom']; echo $st['idFormateur'] ?>"
                                    class="block w-full mt-1  dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  required/>
                                </label>
                              </div>
                              <div class="position-number" class="block mt-4 ">
                              <label class="block mt-4 ">
                                <span class="text-gray-700">
                                  prenom
                                </span>
                                <input name="prenom" id="prenom" value="<?php echo $st['prenom'];?>"
                                  class="block w-full mt-1 form-input"
                                  type="text" required
                                />
                              </label>
                              </div>
                          </div>
                              <label class="block mt-4 ">
                                <span class="text-gray-700">
                                  telephone
                                </span>
                                <input name="tel" id="tel" value="<?php echo $st['tel'];?>"
                                  class="block w-full mt-1 form-input"
                                  type="tel" pattern="[0-9]{10}" required
                                />
                              </label>
                              <label class="block mt-4 ">
                                <span class="text-gray-700">Email</span>
                                <input name="email" value="<?php echo $st['email'];?>"
                                  class="block w-full mt-1 form-input" 
                                  type="email" placeholder="" required
                                />
                              </label>
                              
                        </div>
                     </div>
                   </div>
                 </div>
                </div> 
              </div>
              <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end  border-t border-gray-200 rounded-b-md">
                <button type="button" class="px-6
                                        block  dist-bottom p-6  px-4 py-2 mt-4 
                                              py-2.5
                                              text-gray-500 bg-white
                                              font-medium
                                              text-xs
                                              leading-tight
                                              uppercase
                                              rounded
                                              shadow-md
                                              hover:bg-bleu-700 hover:shadow-lg
                                              focus:bg-bleu-700 focus:shadow-lg focus:outline-none focus:ring-0
                                              active:bg-bleu-800 active:shadow-lg
                                              transition
                                              duration-150
                                              ease-in-out"  data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="px-6
                                    block  dist-bottom p-6  px-4 py-2 mt-4 
                                          py-2.5
                                          bg-blue-600
                                          text-white
                                          font-medium
                                          text-xs
                                          leading-tight
                                          uppercase
                                          rounded
                                          shadow-md
                                          hover:bg-blue-700 hover:shadow-lg
                                          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                          active:bg-blue-800 active:shadow-lg
                                          transition
                                          duration-150
                                          ease-in-outml-1" style="background-color: #1e429f;">Modifier</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
