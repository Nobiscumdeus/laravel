<script setup>

import Home from './Home.vue'

import {ref,computed} from 'vue'
import { router } from '@inertiajs/vue3';

defineProps({
    percentage:Number,
    comment:String,
})

</script>

<template>

    <Home>
<div class=" max-w-80 mb-3 flex flex-col justify-center mx-auto">
    <!-- Result section -->
    <div class="mt-8">
      <div class="text-xl font-bold mb-2">Your Result:</div>
      <div class="bg-blue-600 text-white p-4 rounded-md">
        <span class="text-3xl">{{ percentage }}%</span>
      </div>
    </div>

    <!-- Comment section -->
    <div class="mt-8">
      <div class="text-xl font-bold mb-2">Comment:</div>
      <div class="bg-gray-200 p-4 rounded-md">
        <p>{{ comment }}</p>
      </div>
    </div>
  </div>
    </Home>

</template>