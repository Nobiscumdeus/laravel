<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-300 font-sans">
     <!---- Navigation ------>
     <nav class="bg-blue-400 py-7">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white font-bold text-3xl">Chasfat Enterprise Quiz App</a>
            <ul class="flex space-x-4">
                <li><a href="/dashboard" class="text-white text-2xl hover:underline">Dashboard</a></li>
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
    


    <!---- Features section --->
    <div class="container mx-auto py-16">
        <h2 class="text-3xl font-bold mb-8"> Features </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4"> User Insights </h3>
                <p>
                    Gain valuable insights into user engagement and performance. 
                    Track user progress, view quiz completion rates, and identify
                    areas for improvement to enhance the overall learning experience.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Question Bank</h3>

                <p>
                    Maintain a centralized repository of questions for easy 
                    access and reuse across multiple quizzes. 
                    Organize questions by category, difficulty level,
                     or topic to streamline quiz creation and maintenance.
                </p>

            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Quiz Management</h3>
                <p>
                    Effortlessly create, edit, and delete quizzes through an
                     intuitive interface. Customize quiz settings, including time 
                     limits, scoring options, 
                    and question types, to tailor the experience to your audience..

                    <a class="font-2xl font-bold " href="/questions">Create Questions </a>
                </p>
                
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4"> Analytics Dashboard </h3>
                <p>
                    Leverage comprehensive analytics to measure the 
                    effectiveness of your quizzes. Monitor key metrics such 
                    as average scores, question accuracy, and completion 
                    times to evaluate 
                    learner comprehension and identify trends over time.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4"> Customization Options </h3>
                <p>
                    Personalize the dashboard to align with your branding 
                    and preferences. Choose from a variety of themes, layouts, and 
                    widgets to create a visually
                     appealing and user-friendly experience.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4"> Collaboration tools </h3>
                <p>
                    Foster collaboration and knowledge sharing 
                    among instructors and administrators. Share quiz templates,
                     exchange feedback, and collaborate on content creation to continuously
                     enhance the quality of quizzes offered.
                </p>

            </div>

        </div>
    </div>
   
</body>
</html>