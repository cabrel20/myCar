<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inscription</title>
</head>
<body>
    <div class=" font-bold flex flex-col items-center">
       <div class="py-8">
         <h1 class="text-4xl text-violet-600 text-center">MyCar</h1>
        <h1 class="text-xl text-gray-600 text-center pt-4">Inscription</h1>
       </div>
        <!-- Form -->
        <form action="" class="flex flex-col items-center gap-3">
            <input class="w-80 h-12 bg-gray-100 rounded-md px-3 py-3" type="text" placeholder="your email"/>
            <input class="w-80 h-12 bg-gray-100 rounded-md p-3" type="password" placeholder="your password"/>
            <button class="text-md text-white bg-violet-600 px-12 py-2 rounded-md">Confirmer</button>
        </form>
        <!--  -->
        <div class="pt-12">
            <h1 class="text-gray-500">Vous avez deja de compte ? <a href="../pages/LoginPage.php" class=" underline text-violet-600">connectez-vous</a></h1>
        </div>
    </div>
</body>
</html>