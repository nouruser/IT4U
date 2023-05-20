<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="stylesheet" href="../index/css/style.css">
  <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/formation_js.js"></script>
    <link rel="stylesheet" href="../assets/css/style_formation.css" />
  
  <!-- Responsive-->
  <link rel="stylesheet" href="../index/css/responsive.css">  
  

<div id="zone-catalogue" class="Courses flex flex-wrap " style="display: flex;
              justify-content: center;
              align-items: center;  padding-top: 1rem;"
              >
   <?php
              require '../dao/dao-formation.php';
              include_once '../dao/dao-utilisateur.php';
              $dao = new DaoFormation();
              $result = $dao->findAllFormations();
              $n =1;
              foreach ($result as $row) {
                $formation = new Formation($row['idFormation'],$row['nomFormation'],$row['prix'],$row['description'],$row['nbSession']);                
                echo "
                  <div class='box_bg flex inline-center' style='width: 42.6em;padding-left:6em;'>
                    <div class='box_bg_img'>            
                        <div class='box_my' >
                          <figure><img src='../index/images/formations/$n.jpg'></figure>
                          <div class='overlay' style='width: 34.5em; background-color: #1e429f'>
                            <h3>".$formation->getNomFormation()."</h3>
                            <p>".$formation->getDescription()."</p>
                            <p>Nombre de sessions:".$formation->getNbSession()."</p>

                            <button  class='text-white py-1 px-4 rounded-2xl text-base  'style='background-color: #f4b328;margin-bottom: 1rem;margin-top:  0rem; margin-left:  22rem;' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal1'>
                              S'inscrire
                            </button>
                      
                            <!-- Modal -->
                            <div class='modal fade' id='exampleModal1' tabindex='-1' aria-labelledby='exampleModalLabel1' aria-hidden='true'>
                              <div class='modal-dialog'>
                                <div class='modal-content'>
                                  <div class='modal-header'>
                                    <label class='items-center text-blue-800' style='font-size: 17px; display:flex; justify-content: center; align-items: center; margin-left: 25%; font-weight: 700; ' > 
                                      <span > S'inscrire à une formation </span >
                                    </label>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                  </div>
                                  <div class='modal-body relative p-4' id='exampleModal' aria-labelledby='exampleModalLabel' aria-hidden='true'>

                                    <form method='post' action=' ../controller/facture-controller.php?action=insertFacture'>
                                      <div  class= 'items-center'>
                                        <div class=' h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg  '>
                                          <div class='  flex-col overflow-auto md:flex-row'>
                                            <div class='h-32 md:h-auto' >
                                              <div>        
                                                  <div class='w-full ' style='font-weight: 600; dont-size: 14px;>
                                                    <label class='block' >
                                                    <span class='text-blue-700 '  '>La formation  </span>  
                                                      <h5>".$formation->getNomFormation()." </h5>
                                                    </label>
                                                  
                                                        <div class='position-number' class='block mt-4 '>
                                                        <label class='block mt-4' >
                                                          <span class='text-blue-700 ' >La session</span>
                                                          <h5>".$formation->getNbSession()."</h5> 
                                                        </label>
                                                        </div>
                                                        
                                                    
                                                      <label class='block mt-4' >
                                                      <span class='text-blue-700' >Le prix</span>
                                                      <h5>".$formation->getPrix()." </h5>
                                                      </label> 
                                                      <input type='hidden' name='idformation' id='idformation' value=".$formation->getIdFormation()."> 
                                                      <input type='hidden' name='email' id='email' value=".$_SESSION['utilisateur']->getEmail().">
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                                      </div>
                                      <div class='modal-footer flex flex-shrink-0 flex-wrap items-center justify-end  border-t border-gray-200 rounded-b-md'>
                                          <button type='button' class='px-6
                                            block  dist-bottom p-6  px-4 py-2 mt-4  py-2.5 text-gray-500 bg-white
                                            font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-bleu-700 hover:shadow-lg
                                            focus:bg-bleu-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-bleu-800 active:shadow-lg
                                            transition duration-150  ease-in-out' data-bs-dismiss='modal'>Annuler</button>
                                                
                                          <button type='submit' class='px-6
                                            block  dist-bottom p-6  px-4 py-2 mt-4   py-2.5 text-white font-medium text-xs leading-tight uppercase
                                            rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                            active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out
                                            ml-1' style='background-color: #1e429f;'>Confirmer</button>
                                        </div>                                    
                                    </form>       
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                       ";
                    $n =$n +1;
                      
              }
              ?> 
              
          
</div>