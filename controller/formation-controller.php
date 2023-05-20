<?php

	require '../dao/dao-formation.php';

$action = $_GET['action'];
$dao = new DaoFormation();

switch ($action) {
    case 'insertFormation':
        //On récupère les données saisies par l'utilisateur
        $nomFormation = $_POST['nomFormation'];
        $prix = $_POST['prix'];
        $description = $_POST['description'];
        $nbSession = $_POST['nbSession'];

        if (isset($nomFormation, $prix, $description, $nbSession)) {
            $formation = new Formation(0,$nomFormation, $prix, $description, $nbSession);
            $dao->addFormation($formation);
            header('location: ../page/admin/formation.php');
			header("refresh");
        }
        break;
    case 'listeFormations':
      
			$result = $dao->findAllFormations();
			foreach ($result as $row) {
				$formation = new Formation($row['idFormation'],$row['nomFormation'],$row['prix'],$row['description'],$row['nbSession']);
       
        
                echo "
                    <tr  class='text-gray-700 dark:text-gray-400'> 
                      <td class='px-4 py-3'>
                        <div class='flex items-center text-sm'>
                          <p class='font-semibold'>".$formation->getNomFormation()."</p>
                        </div>
                      </td>
                      <td class='px-4 py-3 text-sm'>".$formation->getDescription()."</td>
                       
                      <td class='px-4 py-3 text-sm'>".$formation->getPrix()."</td>
                      
                      <td class='px-4 py-3 text-sm'>".$formation->getNbSession()."</td> 
                      <td class='px-4 py-3 '>
                      <div class='flex items-center  text-sm'>
                        <!-- Button trigger modal -->
                        <button id='update' style='color: #1e429f'  data-bs-toggle='modal' data-bs-target='#exa'  >            
                          <svg class='h-8 w-8 '  fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                          <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'/>
                          </svg>
                        </button>
                          <form method='POST' action='../../controller/formation-controller.php?action=delete'>
                                    <button
                                        class='h-8 w-8'
                                        aria-label='Delete' style='padding-left: 0.2rem;' type='submit'
                                    ><input  name='numFor' value='".$formation->getIdFormation()."' type= 'hidden' />
                                      <svg   class='h-8 w-8 text-red-600'  viewBox='0 0 24 24'  fill='none'  stroke='currentColor'  stroke-width='2' stroke-linecap='round'  stroke-linejoin='round'>
                                        <polyline points='3 6 5 6 21 6' />  
                                        <path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2' />  
                                        <line x1='10' y1='11' x2='10' y2='17' />  
                                        <line x1='14' y1='11' x2='14' y2='17' />
                                      </svg>
                                    </button>
                          </form>
                      
                            <!-- formulaire -->
                        <form method='post' action='../../controller/formation-controller.php?action=update' >
                        <input  name='numFor2' value='".$formation->getIdFormation()."' type= 'hidden' />
                          <div class='modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto'
                              id='exa' tabindex='-1' aria-labelledby='exaLabel' aria-hidden='true'>
                            <div class='modal-dialog relative w-auto pointer-events-none'>
                              <div class='modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current'>
                                <div class='modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md'>
                                  <h5 class='text-xl font-medium leading-normal text-gray-800' id='exaLabel'>Modifier la formation</h5>
                                  <input  name='numFor2' value='".$formation->getIdFormation()."' type= 'hidden' />
                                  <button type='button'
                                    class='btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline'
                                    data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body relative p-4'>
                                  
                              
                                    <div  class='items-center '>
                                      <div class='  h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg  '>
                                        <div class='  flex-col overflow-y-auto md:flex-row'>
                                          <div class='h-32 md:h-auto'>
                                            <div class='  items-center justify-center md:w-1'>        
                                              <div class='w-full '>
                                                <label class='block  mt-4'>
                                                  <span class='text-gray-700 dark:text-gray-400'>L'intitulé de la formation</span>
                                                  <input name='nomFormation2' id='nomFormation2'
                                                    class='block w-full mt-1  dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input'
                                                      value='".$formation->getNomFormation()."' required />
                                                </label>
                            
                                                <label class='block mt-4 '>
                                                  <span class='text-gray-700 dark:text-gray-400'>
                                                    Le nombre de sessions
                                                  </span>
                                                  <input name='nbSession2' id='nbSession2'
                                                    class='block w-full mt-1  dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input'
                                                    type='number' value='".$formation->getNbSession()."' required
                                                  />
                                                </label>
                                
                                                <label class='block mt-4 '>
                                                  <span class='text-gray-700 dark:text-gray'>
                                                    Le prix
                                                  </span>
                                                  <input name='prix2' id='prix2'
                                                    class='block w-full mt-1  dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input'
                                                    type='number' value='".$formation->getPrix()."' required/>
                                                </label>
                                                <label class='block mt-4 '>
                                                  <span class='text-gray-700 dark:text-gray-400'>Description</span>
                                                  <input name='description2' id='description2'
                                                    class='block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input'
                                                    type='textarea' value='".$formation->getDescription()."' required
                                                  />
                                                </label>
                            
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      </div> 
                                    </div>
              
                      
                                    <div class='modal-footer flex flex-shrink-0 flex-wrap items-center justify-end  border-t border-gray-200 rounded-b-md'>
                                      <input  name='numFor2' value='".$formation->getIdFormation()."' type= 'hidden' />
                                      <button type='submit' class='px-6
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
                                          ml-1'
                                          style='background-color: #1e429f;'>Modifier
                                      </button>
                                    </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                          </form>
                        
                      </td>
                    </tr>
                       ";  
                       
            }     
            
		break;
    case 'find':
        $nomFormation = $_POST['nomFormation'];
        $formation = $dao->findFormation($nomFormation);
        if ($utilisateur != null) {
            session_start();
            $_SESSION['utilisateur'] = $utilisateur;
            header('location: ../view/catalogueUser.php');
        } else {
            echo "echec de connexion!";
        }
        break;
    // case 'deconnexion':
    //     session_start();
    //     session_destroy();
    //     header('location: ../view/bienvenue.php');
    //     break;
    case 'delete':
      $id = $_POST['numFor'];
      $dao->deleteFormation($id);   
      header('location: ../page/admin/formation.php');
      break;
    case 'update':
      $id = $_POST['numFor2'];
      $nomForm = $_POST['nomFormation2'];
      $nbSess= $_POST['nbSession2'];
      $prix1 = $_POST['prix2'];
      $descrip = $_POST['description2'];
      $dao->updateFormation($_POST['numFor2'],$nomForm,$nbSess,$prix1,$descrip);
      header('location: ../page/admin/formation.php');
      break;
    
        
}
          
