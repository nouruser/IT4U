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
  <link href="/css/" rel="stylesheet">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
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
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                    <a href="../index.php"><img src="images/Untitled_design__2_-removebg-preview.png" alt="#" /></a>
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
                      <li > <a href="../index.php">Accueil</a> </li>
                      <li> <a href="../index.php #courses">Catalogue </a> </li>
                      <li> <a href="../index.php #about">A propos</a> </li>
                      <li> <a href="../index.php #learn">Notre équipe</a> </li>        
                      <li> <a href="../index.php #contact">Contact</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last ">
               <a href="../page/client/Authentification.php"> 
                       <button  
                       class=" inline-flex items-center   text-white py-2 px-4 rounded-3xl text-base  "
                        style="background-color: #f4b328;margin-bottom: 1.5rem;margin-top:  0rem;">S'authentifier
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </button>
                    </a></div>              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
  
    </div>
</header>

<!-- Courses -->
<div id="zone-catalogue" class="Courses  flex flex-wrap " style="display: flex;
              justify-content: center;
              align-items: center;">
   <?php
              require '../dao/dao-formation.php';
              $dao = new DaoFormation();
              $result = $dao->findAllFormations();
              $n =1;
              foreach ($result as $row) {
                $formation = new Formation($row['idFormation'],$row['nomFormation'],$row['prix'],$row['description'],$row['nbSession']);                
                echo "
                  <div class='box_bg flex inline-center' style='width: 42.6em;padding-left:6em;'>
                    <div class='box_bg_img'>            
                        <div class='box_my' >
                          <figure><img src='images/formations/$n.jpg'></figure>
                          <div class='overlay' style='width: 34.5em; background-color: #1e429f'>
                            <h3>".$formation->getNomFormation()."</h3>
                            <p>".$formation->getDescription()."</p>
                            <p>Nombre de sessions:".$formation->getNbSession()."</p>
                            <a href='../page/client/Inscription.php'>
                              <button  class='text-white py-1 px-4 rounded-2xl text-base  'style='background-color: #f4b328;margin-bottom: 1rem;margin-top:  0rem; margin-left:  22rem;'>S'inscrire</button>
                            </a>
                          </div>
                        </div>
                     
                      </div>
                    </div>
                       ";
                    $n =$n +1;
              }
              ?> 
          
</div>





<!-- our -->
<div id="important" class="important">
</div>

<!-- end our -->


<!-- learn -->


<div id="learn" class="learn">
 
</div>
<!-- MAKE --> 
<div id="contact" class="make">
 
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
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>





</body>

</html>