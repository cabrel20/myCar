<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
   <?php
   include("../components/NavBar.php")
   ?>

<!-- Hero -->
  <div class="px-14 flex  bg-[url('./images/blob.svg')]">
    <div class="pt-28">
        <h1 class="text-5xl text-[#212121] font-bold">Trouver votre voiture sur <span class="text-violet-600">MyCar</span></h1>
        <h2 class="py-3 text-md font-smibold text-gray-600 w-2/3">Ne cherchez plus ailleurs, MyCar proposent les meilleures annonces en ligne de voiture</h2>
        <button class=" mt-8 text-md bg-[#212121] rounded-md px-6 py-2 text-white">Get Start</button>
    </div>
       <img src="./images/hero.png" class="w-2/3"/>
  </div>

  <div class="flex justify-center py-8 gap-12">
      <!-- items -->
         <div class="flex items-center gap-3 bg-violet-100 rounded-md py-1 px-3">
            <img src="./images/person-running-solid.svg" class="text-gray-600 h-8 w-8"/>
            <div>
                <h1 class="text-md text-violet-600 font-bold">Flexibilite</h1>
                <h1 class="text-gray-600 font-bold">Soyez flexible dans vos choix</h1>
            </div>
         </div>

          <!-- items -->
         <div class="flex items-center gap-3 bg-violet-100 rounded-md py-1 px-3">
            <img src="./images/truck-fast-solid.svg" class="text-gray-600 h-8 w-8"/>
            <div>
                <h1 class="text-md text-violet-600 font-bold">Rapidite</h1>
                <h1 class="text-gray-600 font-bold">Choisssissez rapidement vos voiture</h1>
            </div>
         </div>

           <!-- items -->
         <div class="flex items-center gap-3 bg-violet-100 rounded-md py-1 px-3">
            <img src="./images/tag-solid.svg" class="text-gray-600 h-8 w-8"/>
            <div>
                <h1 class="text-md text-violet-600 font-bold">Moins cher</h1>
                <h1 class="text-gray-600 font-bold">Trouvez des voitures moins cher</h1>
            </div>
         </div>
  </div>


<!-- card des viotures -->

    <div class="px-14 grid grid-cols-4 gap-8 bg-white py-14">
          

   <!-- card -->
   <a href="../pages/DetailsPage.php" class="h-full w-full bg-white rounded-md font-bold shadow-lg cursor-pointer">
        <img class="h-60 w-full object-cover bg-gray-100 rounded-t-md" src="./images/pexels-christian-1164778.jpg"/>
        <div class="text-md px-3 py-2">
            <h1>Ranger Rover</h1>
            <h1 class="text-gray-600">2018</h1>
            <h2 class="text-gray-600">couleur noir</h2>
            <h2 class="text-violet-500">5000 FCFA</h2>
        </div>

   </a>
   <!--  -->

 

    </div>

    <?php include("../components/Footer.php")?>
</body>
</html>