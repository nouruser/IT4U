<?php require '../dao/dao-utilisateur.php'; ?>
<?php 
    $db=new DaoUtilisateur(); 
    $stmt = $db->recuperer();
?>
<?php include 'addUser.php';?>
<div class="w-full overflow-hidden rounded-lg ">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead style="padding-left: 2.75rem;">
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Prenom</th>
                      <th class="px-4 py-3">Nom</th>
                      <th class="px-4 py-3">Email</th>
                      <th class="px-4 py-3">Mot de passe</th>
                      <th class="px-4 py-3">Telephone</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="py-3 ml-4" style="padding-left: 2.75rem;">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  <?php while($st = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                          <svg class="h-8 w-8 text-red-500"  
                          fill="#1e429f" 
                          viewBox="0 0 24 24" 
                          stroke="#1e429f">
                            <path stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2"
                             d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                          </svg>
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold"><?php  echo $st['prenom']; ?></p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm"><?php  echo $st['nom']; ?></td>
                      <td class="px-4 py-3 text-sm"><?php  echo $st['email']; ?></td>
                      <td class="px-4 py-3 text-sm"><?php  echo $st['password']; ?></td>
                      <td class="px-4 py-3 text-sm"><?php  echo $st['tel']; ?></td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-4 py-2 font-semibold leading-tight rounded-full"
                          style="background-color: #f4b328; color: #1e429f;"
                        >
                        Actif
                        </span>
                      </td>
                      <td class="px-4 py-3"> 
                        <div class="flex items-center space-x-4 text-sm">
                      <?php include 'update.php';?>
                  <form method="POST" action="../controller/utilisateur-controller.php?action=delete">
                  <input name="koko" type="hidden" value="<?php echo $st['email'];?>" >
                          <button
                            class="h-8 w-8"
                            aria-label="Delete" style="margin-right: 5rem; padding: 0rem;" type="submit"
                          >
                          <svg   class='h-8 w-8 text-red-600'  viewBox='0 0 24 24'  fill='none'  stroke='currentColor'  stroke-width='2' stroke-linecap='round'  stroke-linejoin='round'>
                          <polyline points='3 6 5 6 21 6' />  
                          <path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2' />  
                          <line x1='10' y1='11' x2='10' y2='17' />  
                          <line x1='14' y1='11' x2='14' y2='17' />
                        </svg>
                          </button>
                  </form>
                        </div>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
  </div>
</div>