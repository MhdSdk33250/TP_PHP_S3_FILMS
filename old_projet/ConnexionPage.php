<?php
if(isset($_GET['error'])){
    $error = isset($_GET['error']);
}
else{
    $error='';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>page de connexion</title>
</head>
<body class="h-full bg-gray-900">
<div class=" mx-auto mt-60 w-full max-w-xs">
  <form autocomplete=off class="bg-gray-700 shadow-md rounded px-5 pt-4 pb-4" method="POST" action="systemeSession.php">
    <div class="mb-4">
      <label class="block text-white text-sm font-bold mb-2" for="identifiant">
        Identifiant 
      </label>
      <input class="inputClass shadow appearance-none border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline" name="identifiant" type="text"  >
    </div>
    <div class="mb-6">
      <label class="block text-white text-sm font-bold mb-2" for="mot-de-passe">
        mot de passe
      </label>
      <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="mdp" type="password"  >
      
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-gray-500 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit">
        Connexion
      </button>
      <a class="hover:text-gray-300 hover:text-white hover:underline" href="register.php">Mot de passe oublié ?</a>

    </div>
  </form>
  <?php
  if($error == 1){
    echo "<label class='text-red-600'>utilisateur introuvable ou mdp invalide</label>";
  }
 
  ?>

</div>
    
    
</body>
</html>