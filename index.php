<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>IT4U</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="index/css/" rel="stylesheet">
  <!-- fevicon -->
  <link rel="icon" href="" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="index/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="index/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="index/css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="index/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="index/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="index/images/Untitled_design__2_-removebg-preview.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9" >
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li > <a href="index.php">Accueil</a> </li>
                      <li> <a href="#courses">Catalogue </a> </li>
                      <li> <a href="#about">A propos</a> </li>
                      <li> <a href="#learn">Notre équipe</a> </li>
                      
                      <li> <a href="#contact">Contact</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last ">
                       <a href="page/client/Authentification.php"> 
                       <button  
                       class=" inline-flex items-center   text-white py-2 px-4 rounded-3xl text-base  "
                        style="background-color: #f4b328;margin-bottom: 1.5rem;margin-top:  0rem;">S'authentifier
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </button>
                    </a>
                    </div>              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section" >
      <div id="myCarousel" >
       
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1><strong> votre cours préféré ici </strong></h1>
                      <p>DES COURS DE PREMIER ORDRE PAR DES PROFESSIONNELS FORMÉS</p>
                      <a href="page/client/Inscription.php">S'inscrire</a> <a href="page/client/Authentification.php">S'authentifier</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="index/images/img2.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>

<!-- Courses -->
<div id="courses" class="Courses">
  <div class="container-fluid">
    <div class="row pl-10" style="margin-left: 7rem; margin-right: 7rem;">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="box_text pl-6">
          <div class="titlepage text-left pl-10" >
            <h2>Notre <strong class="yellow"> Catalogue</strong></h2>
          </div>
          <p class="text-left pl-10">Percez dans un nouveau secteur comme les technologies de l'information ou la science des données. Avec nous, aucune expérience préalable n'est requise pour commencer. Vous trouvez plus de 4 000 cours portant sur des sujets tels que la business analytics, la conception graphique, Python et bien d'autres. En plus, Il y'a des cours en ligne gratuits issus des meilleures universités et entreprises au monde. <br><br> Inscrivez-vous maintenant pour recevoir des recommandations personnalisées du catalogue complet IT4U.</p>
          <a href="index/catalogue.php" > plus</button></a>
        </div>
      </div> 
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div  class="box_bg" >
          <div class="box_bg_img">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="index/images/my1.jpg"></figure>
                  <div class="overlay">
                    <h3><strong style="color: #f4b328;">L'intelligence artificielle</strong></h3>
                    <p>Utiliser un modèle d’algorithmes pour piloter des stratégies d’affaires.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="index/images/my2.jpg"></figure>
                  <div class="overlay">
                    <h3><strong style="color: #f4b328;"> Le developpement web</strong></h3>
                    <p>Créer des sites web avec HTML, CSS. Les rendre interactives avec JavaScript.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="index/images/my3.jpg"></figure>
                  <div class="overlay">
                    <h3><strong style="color: #f4b328;"> SQL</strong></h3>
                    <p>Manipuler et protéger des données de manière simple et schématique.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="index/images/my4.jpg"></figure>
                  <div class="overlay">
                    <h3><strong style="color: #f4b328;"> La programmation orientée objet</strong></h3>
                    <p>Définir et à faire interagir des objets grâce à différentes technologies</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Courses -->

<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>A propos <strong class="yellow">de nous</strong></h2>
          <p>Notre centre de formation est créé en 2021 en collaboration avec cinq élèves ingénieures de l'école Hassania des Travaux Publics. Leur but est de motiver les autres à apprendre facilement des nouvelles technologies liées au domaine de l'IT. </p>
          <a href="page/client/Inscription.php">Rejoignez nous </a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="index/images/about.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Quelques <strong class="yellow">statistiques</strong></h2>
          
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>200+</h3>
            <span>formateurs</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>20+</h3>
            <span>clients</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>50+</h3>
            <span>formations</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>200+</h3>
            <span>sessions</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>10+</h3>
            <span>pays</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->


<!-- learn -->


<div id="learn" class="learn">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage" style="text-align: center;">
          <h2>Notre <strong class="yellow">équipe</strong></h2>
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="learn_box">
          
            
              
              <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="index/images/ouma.png">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Ait ElJadida Oumaima</h2>
                      <p class="text-gray-500">Ingénieure informatique</p>
                    </div>
                  </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="index/images/ilham.png">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Hafid Ilham</h2>
                      <p class="text-gray-500">Ingénieure informatique</p>
                    </div>
                  </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="index/images/dounia.png">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Jbouh Dounia</h2>
                      <p class="text-gray-500">Ingénieure informatique</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap -m-2" style="display: flex;
              justify-content: center;
              align-items: center;">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="index/images/nour.png">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Nour Fatima-Ezzahra</h2>
                      <p class="text-gray-500">Ingénieure informatique</p>
                    </div>
                  </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="index/images/kaoutar.png">
                    <div class="flex-grow">
                      <h2 class="text-gray-900 title-font font-medium">Rasmi Kaoutar</h2>
                      <p class="text-gray-500">Ingénieure informatique</p>
                    </div>
                  </div>
                </div>
                
              </div>
                </div>
              </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MAKE --> 
<div id="contact" class="make">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage" style="text-align: center;">
          <h2>Contact <strong class="white_colo">Us</strong></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
              <input type="text" id="name" name="name" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
              <textarea id="message" name="message" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
          </div>
          <div class="p-2 w-full">
            <button  class=" inline-flex items-center   text-white py-2 px-4 rounded-3xl text-base  " style="background-color: #f4b328;">Envoyer </button>
          </div>
          
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- end MAKE --> 
<!-- end learn --> 



    <!--  footer -->
   <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center mt-4 justify-center text-gray-900">
            
            <span class="ml-3 text-xl text-gray-500" >IT4U</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 IT4U 
            
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500" >
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500"  >
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500" >
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500" >
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
         
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="index/js/jquery.min.js"></script>
          <script src="index/js/popper.min.js"></script>
          <script src="index/js/bootstrap.bundle.min.js"></script>
          <script src="index/js/jquery-3.0.0.min.js"></script>
          <script src="index/js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="index/js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
          <script type="text/javascript" src="assets/js/formation_js.js"></script>





</body>

</html>