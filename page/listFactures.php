<?php

                      require '../dao/dao-facture.php';
                      $dao = new DaoFacture();
                          
                          $result = $dao->findAllFactures();
                          foreach ($result as $row){
                            $facture = new FACTURE($row['email'],$row['idFormation'], $row['paiement']);
                            ?>
                                        
                                        <tr  class="text-gray-700 dark:text-gray-400"> 
                                          <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                              <p class="font-semibold"><?php echo ($dao->findPrenom($facture->getEmail()))['prenom'] ?></p>
                                            </div>
                                          </td>
                                            <td class="px-4 py-3 text-sm"><?php echo ($dao->findNom($facture->getEmail()))['nom']?></td>
                                            <td class="px-4 py-3 text-sm"><?php echo $facture->getEmail()?></td>
                                            <td class="px-4 py-3 text-sm"> <?php echo ($dao->findFormation($facture->getIdFormation()))['nomFormation'] ?></td>
                                            <td class="px-4 py-3 text-sm"><?php echo  ($dao->findSessions($facture->getIdFormation()))['nbSession']?></td> 
                                            <td class="px-4 py-3 text-sm"><?php echo  $facture->getPaiement()?></td>
                                            <td class="px-4 py-3 "> 
                                                      <form method="post" action="../controller/facture-controller.php?action=paiement">
                                                          
                                                          <input  id="non" name="mailFact" value="<?php echo $facture->getEmail()?>" type="hidden"/>
                                                          <input  id="non" name="idFact" value="<?php  echo $facture->getIdFormation()?>" type="hidden"/>
                                                          <div class="flex flex1">
                                                          <button type="submit"
                                                          name="paiement" value="oui" class="px-6
                                          block  dist-bottom p-6  px-4 py-2 mt-4  mr-2
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
                                          ease-in-outml-1" style="background-color: #1e429f;">oui</button>
                                          <button type="submit" name="paiement" value="non" class="px-6
                                          block  dist-bottom p-6  px-4 py-2 mt-4 
                                          py-2.5
                                          bg-blue-600
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
                                          ease-in-outml-1" style="background-color: white; color: color: #1e429f;">non</button>
                          </div>

                                                           
                                                      </form>    
                                                    
                                                 
                                                       
                                                                       
                                          </td>
                                        </tr>
                                                     
                                <?php }  ?>      