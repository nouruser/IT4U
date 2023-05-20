<?php
  include "../model/utilisateur.php";
  session_start();
  
?>
<!DOCTYPE html>
<html x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon espace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/intro.js/minified/introjs.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
  </head>
  <body>
  <div data-title="Bienvenue!" data-intro="Bonjour! 👋" class="client">
    <div 
      class="flex h-screen client"
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
            <li class="relative px-6 py-3" data-title="Catalogue!" data-intro="Découvrir toutes les formations que nous assurons">
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="espaceClient.php"
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
            <li class="relative px-6 py-3" data-title="Formations!" data-intro="Vous pouvez consulter les formations dans lesquelles vous etes inscrits">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="formationsClient.php"
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
            <li class="relative px-6 py-3" data-title="Mon compte!" data-intro="Vous pouvez mettre à jour votre profil">
            <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="client/infoClient.php"
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
                <span class="ml-4" style="color: white;">Mon compte</span>
              </a>
            </li>
            <li class="relative px-6 py-3" data-title="Calendrier!" data-intro="N'oubliez pas de suivre le planning de vos formations">
            <span
                class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
                style="background-color: #f4b328;"
              ></span>  
            <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="calendrierClient.php"
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
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                  ></path>
                  <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4" style="color: #f4b328;">Mon calendrier</span>
              </a>
            </li>
            <li class="relative px-6 py-3" data-title="Mes réclamations!" data-intro="Si vous avez des réclamations, n'hésitez pas de nous écrire">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="reclamationClient.php"
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
                <!--OUR MAIN-->
                <main class="h-full pb-16 overflow-y-auto bg-white">
                <div>
	<link rel="dns-prefetch" href="//unpkg.com" />
	<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

	<style>
		[x-cloak] {
			display: none;
		}
	</style>

<div class="antialiased sans-serif bg-gray-100 h-screen">
	<div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
			  
			<!-- <div class="font-bold text-gray-800 text-xl mb-4">
				Schedule Tasks
			</div> -->
			<div class="bg-white rounded-lg shadow overflow-hidden">
				<div class="flex items-center justify-between py-2 px-6">
					<div>
						<span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
						<span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
          			</div>
					<div class="border rounded-lg px-1" style="padding-top: 2px;">
						<button 
							type="button"
							class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" 
							:class="{'cursor-not-allowed opacity-25': month == 0 }"
							:disabled="month == 0 ? true : false"
							@click="month--; getNoOfDays()">
							<svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
							</svg>  
						</button>
						<div class="border-r inline-flex h-6"></div>		
						<button 
							type="button"
							class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" 
							:class="{'cursor-not-allowed opacity-25': month == 11 }"
							:disabled="month == 11 ? true : false"
							@click="month++; getNoOfDays()">
							<svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
							</svg>									  
						</button>
					</div>
				</div>	

				<div class="-mx-1 -mb-1">
					<div class="flex flex-wrap" style="margin-bottom: -40px;">
						<template x-for="(day, index) in DAYS" :key="index">	
							<div style="width: 14.26%" class="px-2 py-2">
								<div
									x-text="day" 
									class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center"></div>
							</div>
						</template>
						
					</div>

					<div class="flex flex-wrap border-t border-l">
						<template x-for="blankday in blankdays">
							<div 
								style="width: 14.28%; height: 120px"
								class="text-center border-r border-b px-4 pt-2"	
							></div>
						</template>	
						<template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
							<div style="width: 14.28%; height: 120px" class="px-4 pt-2 border-r border-b relative">
								<div
									@click="showEventModal(date)"
									x-text="date"
									class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
									:class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
								></div>
								<div style="height: 80px;" class="overflow-y-auto mt-1">
									<!-- <div 
										class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
										x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
										x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

									<template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">	
										<div
											class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
											:class="{
												'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
												'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
												'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
												'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
												'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
											}"
										>
											<p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
										</div> 
									</template> 
								
								
							 

								</div>
							</div>
							
						</template>
						
					</div>
					
				</div>
			</div>


		<!-- Modal -->
		<div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal">
			<div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
				<div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
					x-on:click="openEventModal = !openEventModal">
					<svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
					</svg>
				</div>
				<!-- <form method="post" action=" ../controller/calendrier-controller.php?action=planification"> -->
				<div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">
					<h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Ajouter une formation</h2>
					<div class="mb-4">
						<label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Titre de la formation</label>
						<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="nomFormation" x-model="event_title">
					</div>
					<div class="mb-4">
						<label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Formateur</label>
						<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="nomFormateur" >
					</div>
					<div class="mb-4">
						<label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Heure</label>
						<input type="time" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="heure" >
					</div>
					<div class="mb-4">
						<label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">lieu</label>
						<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="lieu" >
					</div>
			
					<div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Date</label>
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" name="dateFormation" id="idDate" readonly >
                    </div>
 
					<div class="mt-8 text-right">
						<button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
							Fermer
						</button>	
						<button  type="submit" class="bg-gray-800 hover:bg-blue-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="addEvent()" >
							Enregistrer
						</button>
						<button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
							Modifier
						</button>	
						<button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
							Supprimer
						</button>		
					</div>
				</div>
				<!-- </form> -->
			</div>
		</div>
		<!-- /Modal -->
	</div>

	
	<script>
		const MONTH_NAMES = ['Janvier', 'Février', 'Mars', 'Avril', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		const DAYS = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
		

		function app() {
			return {
				month: '',
				year: '',
				no_of_days: [],
				blankdays: [],
				days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

				events: [
					{
						event_date: new Date(2020, 3, 1),
						event_title: "April Fool's Day",
						event_theme: 'blue'
					},

					{
						event_date: new Date(2020, 3, 10),
						event_title: "Birthday",
						event_theme: 'red'
					},

					{
						event_date: new Date(2020, 3, 16),
						event_title: "Upcoming Event",
						event_theme: 'green'
					}
				],
				event_title: '',
				event_date: '',
				event_theme: 'blue',

				themes: [
					{
						value: "blue",
						label: "Blue Theme"
					},
					{
						value: "red",
						label: "Red Theme"
					},
					{
						value: "yellow",
						label: "Yellow Theme"
					},
					{
						value: "green",
						label: "Green Theme"
					},
					{
						value: "purple",
						label: "Purple Theme"
					}
				],

				openEventModal: false,

				initDate() {
					let today = new Date();
					this.month = today.getMonth();
					this.year = today.getFullYear();
					this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
				},

				isToday(date) {
					const today = new Date();
					const d = new Date(this.year, this.month, date);

					return today.toDateString() === d.toDateString() ? true : false;
				},

				showEventModal(date) {
					// open the modal
					this.openEventModal = true;
					this.event_date = new Date(this.year, this.month, date).toDateString();
				},

				addEvent() {
					if (this.event_title == '') {
						return;
					}

					this.events.push({
						event_date: this.event_date,
						event_title: this.event_title,
						event_theme: this.event_theme
					});

					console.log(this.events);

					// clear the form data
					this.event_title = '';
					this.event_date = '';
					this.event_theme = 'blue';

					//close the modal
					this.openEventModal = false;
				},

				getNoOfDays() {
					let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

					// find where to start calendar day of week
					let dayOfWeek = new Date(this.year, this.month).getDay();
					let blankdaysArray = [];
					for ( var i=1; i <= dayOfWeek; i++) {
						blankdaysArray.push(i);
					}

					let daysArray = [];
					for ( var i=1; i <= daysInMonth; i++) {
						daysArray.push(i);
					}
					
					this.blankdays = blankdaysArray;
					this.no_of_days = daysArray;
				}
			}
		}
	</script>
  </div>
</div>
        </main>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script  src="https://unpkg.com/intro.js/minified/intro.min.js"></script>
    <script> introJs().start(); </script>
  </body>
</html>