<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update</title>
</head>
<body>
    <div class=" font-bold flex flex-col items-center">
       <div class="py-8">
         <h1 class="text-4xl text-violet-600 text-center">MyCar</h1>
        <h1 class="text-xl text-gray-600 text-center pt-4">Modifier l'annonce</h1>
       </div>
        <!-- Form -->
        <form action="" class="  px-20 flex flex-col items-center">
           <div class="grid grid-cols-2 gap-3">
             <input class="w-80 h-12 bg-gray-100 rounded-md px-3 py-3" type="text" placeholder="Nom du vehicule"/>
            <input class="w-80 h-12 bg-gray-100 rounded-md p-3" type="text" placeholder="Annee"/>
            <input class="w-80 h-12 bg-gray-100 rounded-md p-3" type="number" placeholder="Prix"/>
            <input class="w-80 h-12 bg-gray-100 rounded-md p-3" type="text" placeholder="couleur"/>
            <textarea class="w-80 h-36 bg-gray-100 rounded-md p-3" type="text" placeholder="Description du vehicule"></textarea>
            <input type="file"/>
           </div>
            <button class=" mt-6 text-md text-white bg-violet-600 px-12 py-2 rounded-md">Modifier</button>
        </form>
        <!--  -->
       
    </div>
</body>
</html>