<?php
  include "../../model/admin.php";
  session_start();
  
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT4U Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/css/tailwind.output.css" />
    <link rel="stylesheet" href="../../assets/css/style_formation.css" />
    <link rel="stylesheet" href="../../assets/css/style_formation.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../../assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto  md:block flex-shrink-0"
        style="background-color: #1e429f;"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
            style="color: #f4b328;"
          >
            IT4U
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
            <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="../dashboard.php"
            >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="white"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4" style="color: white;">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
          <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="../calendrier.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="white"
                >
                  <path
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                  ></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4" style="color: white;">calendrier</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
            <span
                class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
                style="background-color: #f4b328;"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="formation.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="#f4b328"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4" style="color: #f4b328;">Formations</span>
              </a>
            </li>
            <div class="px-6 my-6">
                <button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 transition-colors duration-150 border  rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
                    data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: white; color: #1e429f; border: #1e429f;">Ajouter
                    <span class="ml-2" aria-hidden="true" style="color: #1e429f; font-size: solid;">+</span>
                </button>
            </div>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="../clienta.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="white"
                >
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4" style="color: white;">Clients</span>
              </a>
            </li> 
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="../facture.php"
              >
              <svg class="h-5 w-5 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg> 
                <span class="ml-4" style="color: white;">Factures</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="../formateurs.php"
              >
              <svg 
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="white">
                <path d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
              </svg>
                <span class="ml-4" style="color: white;">Formateurs</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="../alerts.php"
              >
              <svg class="h-5 w-5"
                fill="none" 
                viewBox="0 0 24 24" 
                stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
              </svg>
                <span class="ml-4" style="color: white;">Alerts</span>
              </a>
            </li>    
            <li class="relative px-6 py-4"></li>
            <li class="relative px-6 py-4"></li>
            
            <li class="relative px-6 py-3">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="AuthentificationAdmin.php"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="#f4b328"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span style="color: #f4b328;">Se déconnecter</span>
                      </a>
              </li> 
        </div>
      </aside>

      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4" style="background-color: #f4b328;">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-blue-600 dark:text-blue-300"
          >
            
            <div class="flex justify-center flex-1 lg:mr-32">
              
            </div>
            <ul class="flex items-center  space-x-6">
            <li class="relative" style="color: #1e429f; font-size: large;">
              <?php $admin = $_SESSION['admin'];
                echo $admin->getNom().' '.$admin->getPrenom()
              ?>
            </li>
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-blue focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  
                  <svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round" style="color: #1e429f"> 
                     <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /> 
                      <circle cx="8.5" cy="7" r="4" />  
                      <polyline points="17 11 19 13 23 9" />
                    </svg>

                </button>
                
              </li>
            </ul>
          </div>
       </header>
              

    <main class="h-full pb-16 overflow-y-auto bg-white">
          <div class="container px-6 mx-auto bg-white ">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="color: #1e429f">
              Tables des Formations de IT4U
            </h2>
            
            
          <div
              class="px-4 py-3 mb-8 bg-white rounded-lg "
            >
                  <!-- formulaire -->
              <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog relative w-auto pointer-events-none">
                  <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                      class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                      <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Ajouter une formation</h5>
                      <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body relative p-4">
          <form>
              <div  class="items-center ">
                <div
                  class="  h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg  ">
                  <div class="  flex-col overflow-y-auto md:flex-row">
                    <div class="h-32 md:h-auto">
                      <div class="  items-center justify-center md:w-1">        
                        <div class="w-full ">          
                                <label class="block ">
                                  <span class="text-gray-700 dark:text-gray-400">L'intitulé de la formation</span>
                                  <input name="nomFormation" id="nomFormation"
                                    class="block w-full mt-1  dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  required/>
                                </label>
                          <div >
                              <div class="position-number" class="block mt-4 ">
                              <label class="block mt-4 ">
                                <span class="text-gray-700 dark:text-gray-400">
                                  Le nombre de sessions
                                </span>
                                <input name="nbSession" id="nbSession"
                                  class="block w-full mt-1  dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  type="number" required
                                />
                              </label>
                              </div>
                              <div class="position-number" class="block mt-4  ">
                                <label class="block mt-4 ">
                                <span class="text-gray-700 dark:text-gray">
                                  Le prix
                                </span>
                                <input name="prix" id="prix"
                                  class="block w-full mt-1  dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  type="number" required
                                />
                              </label>
                              </div>
                          </div>
                    
                              <label class="block mt-4 ">
                                <span class="text-gray-700 dark:text-gray-400">Description</span>
                                <input name="description" id="description"
                                  class="block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                  type="textarea" required
                                />
                              </label>
                              
                        </div>
                     </div>
                   </div>
                 </div>
                </div> 
              </div>
                <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end  border-t border-gray-200 rounded-b-md">
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
                              ease-in-out" data-bs-dismiss="modal">Annuler</button>
                    <button onclick="sendFormation()" type="button" class="px-6
                          block  dist-bottom p-6  px-4 py-2 mt-4 
                          py-2.5
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
                          ease-in-out
                          ml-1" style="background-color: #1e429f;">Ajouter</button>
                  </div>
          </form>
        </div>              
    </div>
  </div>
</div>
            <!-- la liste des formations -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Formation</th>
                      <th class="px-4 py-3">Description</th>
                      <th class="px-4 py-3">Prix</th>
                      <th class="px-4 py-3">Nombre des sessions</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  <tbody id="zone-formation">
                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>





      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../assets/js/formation_js.js"></script>
    <script type="text/javascript" src="../../assets/js/jquery.js"></script>
</body>
</html>