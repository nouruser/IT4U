<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT4U Espace Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"  />
    <link rel="stylesheet" href="../../assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer ></script>
    <script src="../../assets/js/init-alpine.js"></script>
  </head>



<body>
<form method="POST" action="../../controller/admin-controller.php?action=loginAdmin">
  <div class="flex-1 items-center min-h-screen p-6 bg-gray-50 ">
  <h3 class="flex flex-col mb-4 text-xl font-semibold text-blue text-center " style="color: #f4b328; font-family: 'Poppins', sans-serif ; font-size: 1.5em; margin-bottom: 6rem; margin-top: 4rem;  ">Espace Administrateur</h3>
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl " >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../../assets/img/img11.jpg" alt="Office" />
          </div>

          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-blue text-center " style="color: #1e429f; font-family: 'Poppins', sans-serif ; font-size: 1.5em;  " > Authentifiez-vous </h1>
              <label class="block text-sm">
                <span class="text-gray-700 ">Email</span>
                <input class="block w-full mt-1 text-sm   focus:border-blue-400 focus:outline-none focus:shadow-outline-blue  form-input" placeholder="exemple123@gmail.com" type="email" name="email" title="email"  />
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Mot de passe </span>
                <input class="block w-full mt-1 text-sm  focus:border-blue-400 focus:outline-none focus:shadow-outline-blue  form-input" placeholder="***************" type="password" name="password" title="passord" /> <br>
              </label>


              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" name="submitb"class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-blue" style="background-color: #1e429f">Authentifier</button>
              <p class="text-red-600 text-sm font-medium mt-7 text-center">Mot de passe ou email erroné </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>
