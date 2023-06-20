<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>
<body>
    <div class="bg-white py-2 px-14 shadow-md flex items-center justify-between sticky top-0">
        <h1 class="text-2xl text-violet-600 font-bold"><a href="../pages/Homepage.php">MyCar</a></h1>
        <!-- Search bar -->
        <div class="flex items-center justify-center h-11 w-96 rounded-full bg-gray-100 gap-3">
           <button>
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
             <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
           </button>
           <input type="search" class="bg-gray-100 text-md text-[#212121] h-full w-80 outline-none" placeholder="Search your car..."/>
        </div>
        <!-- connexion -->
         <!-- <div class="flex items-center gap-6">  
            <button class="text-md text-gray-600"> <a href="../pages/InscriptionPage.php">Sign Up</a></button>
            <button class="text-md text-white px-6 py-2 rounded-md bg-[#212121]"><a href="../pages/LoginPage.php">Sign In</a></button>
        </div> -->

        <!-- deconnexion -->
          <div class="flex items-center gap-6">  
            <button class="text-md text-white px-6 py-2 rounded-md bg-[#212121]">Logout</button>
            <a href="../pages/Settings.php"><button class="text-lg h-12 w-12 rounded-full text-center text-white bg-violet-600 px-2">F</button></a>
        </div>
    </div>
</body>
</html>