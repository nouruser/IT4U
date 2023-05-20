<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT4U</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer ></script>
    <script src="../../assets/js/init-alpine.js"></script>
  </head>

  <body>

    <form method="post" action=" ../../controller/utilisateur-controller.php?action=inscription">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 ">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl ">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full " src="../../assets/img/img13.jpg" alt="Office" />
          </div>

          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2 py-2" style="padding-bottom: 1.5rem;padding-top: 1rem;">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 text-center" style=" color: #1e429f; font-family: 'Poppins', sans-serif ; font-size: 1.5em;  "> Inscrivez-vous </h1>
              
              <label class="block text-sm">
                <span class="text-gray-700 ">Nom</span>
              </label>
              <input class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="Jane Doe" type="text" name="nom" required/>
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 ">Prénom </span>
              </label>
              <input class="block w-full mt-1 text-sm  focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="Jane Doe"  type="text" name="prenom"required/>
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 ">Téléphone </span>
              </label>
              <input class="block w-full mt-1 text-sm  focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="0000000000"  type="tel" name="tel" pattern="[0-9]{10}" required/>
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 ">Email</span>
              </label>
              <input class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue  form-input" placeholder="exemple123@gmail.com" type="email" name="email" required/>
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Mot de passe</span>
              </label>
              <input class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="***************" type="password" name="password" required/>
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400"> Confirmer le mot de passe  </span>
              </label>
              <input class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" placeholder="***************" type="password" name="password1" required/>
            
              

              <!-- You should use a button here, as the anchor is only used for the example  -->
              
              <input type="submit" name="soumettre"  value="Soumettre le formulaire" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-blue" style="background-color: #1e429f;"  />
              <hr class="my-8" />
              <p class="mt-1 text-gray-300 text-center" style="font-size: 14px;" > Vous avez déjà un compte ?  
                <a class="text-sm font-medium text-blue-600 hover:underline" style="color: #1e429f;" href="Authentification.php" >
                  S'authentifier  </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>
