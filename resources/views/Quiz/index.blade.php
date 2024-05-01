<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style type="text/css">
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        min-height:100vh;
      
    }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <!---- Navigation ------>
    <nav class="bg-blue-400 py-7">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white font-bold text-3xl">Chasfat Enterprise Quiz App</a>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white text-2xl hover:underline">Home</a></li>
                <li><a href="#" class="text-white text-2xl hover:underline">About</a></li>
                <li><a href="#" class="text-white text-2xl">Contact </a></li>

            </ul>
            <div class="relative">
                <input type="text" placeholder="Search bar..." class="bg-white-700 text-white px-4 py-2 rounded-lg w-64 focus:outline-none focus:ring focus:border-blue-300">
                <button class="absolute right-0 top-0 mt-3 mr-4 focus:outline-none">
                    <svg class="h-6 w-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-5.2-5.2M15 11a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </button>
            </div>

        </div>
    </nav>
   <!----- Heroes section --->
    
    <div class="bg-blue-500 text-white py-20 px-4 mt-3">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-1"> Welcome to this Enterprise Quiz App</h1>
            <p class="text-2xl mb-4">This is an enterprise quiz application that can be used to conduct quick medical 
                examinations on a large scale basis. 
            </p>
            <a href="#" class="bg-white text-blue-500 px-6 py-3 rounded-full font-bold hover:bg-blue-400 transition duration-300">Get Started</a>
        </div>
    </div>
    
    <!---- Features section --->
    <div class="container mx-auto py-16">
        <h2 class="text-3xl font-bold mb-8"> Features </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Feature 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Feature 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Feature 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

        </div>
    </div>

     <!-- Footer -->
     <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Chasfat Projects All rights reserved.</p>
        </div>
    </footer>


</body>
</html>