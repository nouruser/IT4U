<?php
  include "../../model/utilisateur.php";
  session_start();
  
?>
<!DOCTYPE html>
<html x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon espace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../../assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div
      class="flex h-screen "
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
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="../espaceClient.php"
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
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  ></path>
                </svg>
                <span class="ml-4" style="color: white;">Catalogue</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="../formationsClient.php"
              >
              <svg class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="white">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
              </svg>
                <span class="ml-4" style="color: white;">Mes Formations</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
            <span
                class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
                style="background-color: #f4b328;"
              ></span>
            <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors text-gray-800 duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="infoClient.php"
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
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4" style="color: #f4b328;">Mon compte</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="#"
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
                <span class="ml-4" style="color: white;">Mon calendrier</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-blue-800 dark:hover:text-gray-200"
                href="../reclamationClient.php"
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
                <span class="ml-4" style="color: white;">Mes reclamations</span>
              </a>
            </li>
            <li class="relative px-6 py-4"></li>
            <li class="relative px-6 py-4"></li>
            <li class="relative px-6 py-4"></li>
            <li class="relative px-6 py-4"></li>
            <li class="relative px-6 py-4"></li>
            <li class="relative px-6 py-4"></li>
            
            <li class="relative px-6 py-3">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="./client/Authentification.php"
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
            </ul>
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
              <?php $utilisateur = $_SESSION['utilisateur'];
                echo $utilisateur->getNom().' '.$utilisateur->getPrenom()
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
                  
                <svg class="h-8 w-8 text-red-500"  
                  viewBox="0 0 24 24"  
                  fill="#1e429f"  
                  stroke="#1e429f"  
                  stroke-width="2"  
                  stroke-linecap="round"  
                  stroke-linejoin="round">  
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />  
                  <circle cx="12" cy="7" r="4" />
                </svg>

                </button>
                
              </li>
            </ul>
          </div>
       </header>
        <main class="h-full bg-white">
          <div class="container px-6 mx-auto bg-white ">
            <div class="flex items-center p-6 bg-white ">
              <div class="flex-1 max-h-xl max-w-4xl mx-auto overflow-hidden bg-white">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                  <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2" >
                    <div class="w-full">
                      <div class="flex justify-center p-6 sm:p-12 md:w-full">
                        <div class="w-full">
                          <h3 class="mb-4 text-xl font-semibold text-center" style="color: #1e429f; font-family: 'Poppins', sans-serif ; font-size: 1.5em;  "> 
                            <?php 
                              $utilisateur = $_SESSION['utilisateur'];
                              echo $utilisateur->getNom().' '.$utilisateur->getPrenom();
                            ?>
                          </h3>
                        </div>
                      </div>
                        <table class="w-full whitespace-no-wrap">
                          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                      <div class="flex items-center text-sm">
                                          <p class="font-semibold">
                                              Votre Nom 
                                          </p>
                                      </div>
                                    </td>
                                  <td class="px-4 py-3">
                                      <div class="flex space-x-4 items-center text-sm font-semibold">
                                            <div>:</div>
                                            <div>
                                              <?php 
                                                $utilisateur = $_SESSION['utilisateur'];
                                                echo $utilisateur->getNom();
                                              ?>
                                              </div>
                                      </div>
                                    </td>
                              </tr>
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                      <div class="flex items-center text-sm">
                                          <p class="font-semibold">
                                              Votre Prenom
                                          </p>
                                      </div>
                                    </td>
                                  <td class="px-4 py-3">
                                      <div class="flex space-x-4 items-center text-sm font-semibold">
                                            <div>:</div>
                                            <div>
                                              <?php 
                                                $utilisateur = $_SESSION['utilisateur'];
                                                echo $utilisateur->getPrenom();
                                              ?>
                                              </div>
                                      </div>
                                    </td>
                              </tr>
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                      <div class="flex items-center text-sm">
                                          <p class="font-semibold">
                                              Votre Telephone
                                          </p>
                                      </div>
                                    </td>
                                  <td class="px-4 py-3">
                                      <div class="flex space-x-4 items-center text-sm font-semibold">
                                            <div>:</div>
                                            <div>
                                              <?php 
                                                $utilisateur = $_SESSION['utilisateur'];
                                                echo $utilisateur->getTel();
                                              ?>
                                              </div>
                                      </div>
                                    </td>
                              </tr>
                              <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                      <div class="flex items-center text-sm">
                                          <p class="font-semibold">
                                              Votre Email
                                          </p>
                                      </div>
                                    </td>
                                  <td class="px-4 py-3">
                                      <div class="flex space-x-4 items-center text-sm font-semibold">
                                            <div>:</div>
                                            <div>
                                              <?php 
                                                $utilisateur = $_SESSION['utilisateur'];
                                                echo $utilisateur->getEmail();
                                              ?>
                                              </div>
                                      </div>
                                    </td>
                              </tr>
                              <tr class="text-gray-700 dark:text-gray-400">
                              <td class="px-4 py-3"></td>
                              <td class="px-4 py-3">
                                <button type="button" class="px-6 flex items-center justify-between px-2 py-2 text-sm font-medium leading-5  rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray
                                      block padding-btn dist-bottom p-6 mb-4  px-4 py-2
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
                                      ease-in-out" style="margin-left: 5rem;margin-top: 2.5rem; background-color: #1e429f;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      <svg
                                        class="w-5 h-5 pr-2"
                                        aria-hidden="true"
                                        fill="white"
                                        viewBox="0 0 20 20"
                                      >
                                        <path
                                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                        ></path>
                                      </svg>
                                      <strong>Editer</strong>
                                </button>

                                  <!-- formulaire -->
                                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog relative w-auto pointer-events-none">
                                      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div  class=" flex flex-shrink-0 items-center justify-between p-4 rounded-t-md">
                                          <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Mon Profile</h5>
                                            <button type="button"
                                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                      <div class="modal-body relative p-4">
                                        <form method="post" action=" ../../controller/utilisateur-controller.php?action=edit" >
                                          <div  class="items-center ">
                                            <div
                                              class="  h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg  ">
                                              <div class="  flex-col overflow-y-auto md:flex-row">
                                                <div class="h-32 md:h-auto">
                                                  <div class="  items-center justify-center md:w-1">        
                                                    <div class="w-full ">
                                                    <label class="block text-sm">
                                                      <span class="text-gray-700 ">Nom</span>
                                                    </label>
                                                    <input class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="<?php $utilisateur = $_SESSION['utilisateur']; echo $utilisateur->getNom();?>" type="text" name="nom" required/>
                                                    
                                                    <label class="block mt-4 text-sm">
                                                      <span class="text-gray-700 ">Prénom </span>
                                                    </label>
                                                    <input class="block w-full mt-1 text-sm  focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="<?php $utilisateur = $_SESSION['utilisateur']; echo $utilisateur->getPrenom();?>"  type="text" name="prenom"required/>
                                                    
                                                    <label class="block mt-4 text-sm">
                                                      <span class="text-gray-700 ">Téléphone </span>
                                                    </label>
                                                    <input class="block w-full mt-1 text-sm  focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="<?php $utilisateur = $_SESSION['utilisateur']; echo $utilisateur->getTel();?>"  type="tel" name="tel" pattern="[0-9]{10}" required/>
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
                                                ease-in-out" data-bs-dismiss="modal"
                                                >
                                                Annuler
                                              </button>
                                              <button type="submit" name="soumettre"  value="Editer" class="px-6
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
                                                  ease-in-out
                                                  ml-1"  id="edit"
                                                  style="background-color: #1e429f">Editer</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              </tr>
                              

                          </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full" src="../../assets/img/etudiant2.png" alt="Office" style="margin-left: 3rem;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>