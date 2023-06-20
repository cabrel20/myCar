<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Settings</title>
</head>
<body>
 <?php include("../components/NavBar.php")?>
 <div class="px-44 pt-20 h-full">
    <div class=" flex justify-between items-center border-b border-gray-300 py-2">
        <div class="flex items-center gap-4">
        <span class="h-20 w-20 rounded-full bg-violet-600 text-white text-center text-6xl py-2  font-bold">F</span>
        <div class="text-lg font-bold">
            <h1 class="text-3xl text-violet-600">Mr Anthony</h1>
            <h1 class="text-gray-500">anthony@gmail.com</h1>
        </div>
    </div>
    <button class="text-xl bg-violet-600 px-8 py-2  rounded-md text-white"><a href="../pages/Add.php">Ajouter une annonce</a></button>
    </div>

   <!-- les items car -->
    <div>

     <!-- item -->
     <div class="pt-4 flex justify-between items-center">
        <div class="flex items-ceenter gap-4">
            <img class="h-20 w-20 rounded-full bg-gray-600 object-cover" src="../pages/images/pexels-christian-1164778.jpg"/>
              <div class="text-sm text-gray-500">
                <h1 class="text-violet-600">Lexus 2045</h1>
                <h1>2022</h1>
                <h1>Couleur noir</h1>
                <h1>25000 FCFA</h1>
              </div>
        </div>
        <div class="flex items-center gap-4">
             <button class="text-xl bg-blue-600 px-6 py-2  rounded-md text-white"><a href="../pages/update.php">Editer</a></button>
             <button class="text-xl bg-red-600 px-6 py-2  rounded-md text-white">Supprimer</button>
        </div>
     </div>
     <!--  -->
    <div>

    </div>


    </div>
 

 </div>
   
 
</body>
</html>