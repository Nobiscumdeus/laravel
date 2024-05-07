<script setup>
import {Link,usePage} from '@inertiajs/vue3';
import { computed } from  'vue'
import { createRouter, createWebHistory } from 'vue-router';
const page=usePage()





</script>

<template>

   <nav class='bg-gray-400 py-4'>

    <div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8'>
        <div class='flex items-center justify-between h-16'>
        <!-- Logo --->
            <div class='flex-shrink-0'>
                <Link href='#' class='text-white text-xl font-bold'> Chasfat Quiz   </Link>

            </div>
            <div class='hidden md:block'>
                <div class='ml-10 flex items-baseline space-x-4'>
                
<Link href='/questions' :class="{'text-gray-300 px-3 py-2 rounded-md text-sm bg-gray-700': $page.url === '/dashboard', 'text-gray-300 px-3 py-2 rounded-md text-sm hover:bg-gray-700': $page.url !== '/dashboard'}"> Dashboard </Link>
<Link href='/questions' :class="{'text-gray-300 px-3 py-2 rounded-md text-sm bg-gray-700': $page.url === '/questions', 'text-gray-300 px-3 py-2 rounded-md text-sm hover:bg-gray-700': $page.url !== '/questions'}">Create Questions</Link>
<Link href='/quiz' :class="{'text-gray-300 px-3 py-2 rounded-md text-sm bg-gray-700': $page.url === '/quiz', 'text-gray-300 px-3 py-2 rounded-md text-sm hover:bg-gray-700': $page.url !== '/quiz'}"> Take Quiz</Link>
<Link href='/results' :class="{'text-gray-300 px-3 py-2 rounded-md text-sm bg-gray-700': $page.url === '/results', 'text-gray-300 px-3 py-2 rounded-md text-sm hover:bg-gray-700': $page.url !== '/results'}"> Results</Link>

<!--

                     <Link href='/dashboard' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Dashboard</Link>
                    <Link href='/questions' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Create Questions</Link>
                    <Link href='/quiz' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Conduct Quiz</Link>
                  
-->
                </div>

            </div>
        </div>
    </div>

   </nav>
   <slot> </slot>

<footer class="bg-gray-800 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div>
                <p>&copy; 2024 Chasfat Projects. All rights reserved.</p>
            </div>
            <div class="flex">
                <a href="#" class="text-gray-300 hover:text-white ml-4">Home</a>
                <a href="#" class="text-gray-300 hover:text-white ml-4">About</a>
                <a href="#" class="text-gray-300 hover:text-white ml-4">Contact</a>
            </div>
        </div>
    </div>
</footer>

</template>

<style>
.active-link {
  background-color: #4b5563; /* Active link background color */
  color: #fff; /* Active link text color */
  border-radius:50px;
  padding:10px;
  background:gray;

}

</style>
