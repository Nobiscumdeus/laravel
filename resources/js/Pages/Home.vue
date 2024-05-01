<script setup>
import {Link} from '@inertiajs/vue3';
</script>

<template>

   <nav class='bg-gray-400 py-4'>

    <div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8'>
        <div class='flex items-center justify-between h-16'>
        <!-- Logo --->
            <div class='flex-shrink-0'>
                <Link href='#' class='text-white text-xl font-bold'> Chasfat Enterprise Application </Link>

            </div>
            <div class='hidden md:block'>
                <div class='ml-10 flex items-baseline space-x-4'>
                 <Link href='#' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Home</Link>
                    <Link href='/questions' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Questions</Link>
                    <Link href='/quiz' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Quiz</Link>
                    <Link href='#' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Contact</Link>

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