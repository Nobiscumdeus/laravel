<script setup>

import Home from './Home.vue';
import {ref,computed} from 'vue'
import { router } from '@inertiajs/vue3';

const props=defineProps({ 
        questions:Object
})
const currentIndex=ref(0)

const selectedAnswer=ref(null)

const result=ref(0);

const totalQuestions=computed(()=>{
    return props.questions.length
})

const currentQuestion=computed(()=>{
        return props.questions[currentIndex.value];
    })
const answers=computed(()=>{
    return props.questions[currentIndex.value].answers
})

const isLastQuestion=computed(()=>currentIndex.value===props.questions.length-1)



function selectedOption(index){

    selectedAnswer.value=index;
  

}







function nextQuestion(){
    if(selectedAnswer.value!==null){ //This lets us know an answer has been selected 
        //Check if the selected answer is actually correct
          if(props.questions[currentIndex.value].answers[selectedAnswer.value].correct_answer==1){
                  result.value++;
          }
          currentIndex.value++;
          selectedAnswer.value=null;
    }
}


function previousQuestion() {
    // Ensure currentIndex is within bounds
    if (currentIndex.value > 0) {
        // Check if an answer has been selected for the current question
        if (selectedAnswer.value !== null) {
            // Decrement the result if the previously selected answer is correct
            if (props.questions[currentIndex.value].answers[selectedAnswer.value].correct_answer == 1) {
                result.value==result.value;
            }
        }

        currentIndex.value--; // Move to the previous question
    }
}




function calculateResult(){

    if(props.questions[currentIndex.value].answers[selectedAnswer.value].correct_answer==1){
                  result.value++;
          }

    router.post('/results',[
        {
            results:{
                'score':result.value,
                'totalQuestions':totalQuestions.value
            }
        }
    ])

    

}

    

</script>

<template>
      <Home>
            <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-semibold mb-4">Quiz Exam Interface</h1>
            
            <!-- Question Card -->
            <div class="mb-6">
                <!--- Question Index --->
                <div class="flex flex-col py-2 mb-2 font-bold font-2xl">
                    <p>Question {{currentIndex +1 }} out of {{ totalQuestions }}  </p>

                 
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <p class="text-lg font-medium mb-2">{{ currentQuestion.question }}</p>
                </div>
                <!---- Answers section here ---->
                <div @click="selectedOption(index)" v-for="(answer,index)  in answers" :key="index">
                <ul>
                
                    <li  :class="{ 'bg-green-900 max-w-60 text-white text-2xl rounded-md': index === selectedAnswer }" class="flex items-center mb-2" >
                         <input type="radio" :id="'option' + index" :value="answer.answer" v-model="selectedAnswer">
                    <label :for="'option' + index" class="ml-2">{{ answer.answer }}</label>
                    </li>

                



                  

                 

                    
                   
                    <!-- Add more options as needed -->
                </ul>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify:flex-start px-2 mx-2">
                <button @click="previousQuestion"  class="px-4 py-2 mx-2 bg-gray-600 text-white rounded-md">Previous</button>
                <button @click="calculateResult" v-if="isLastQuestion" class="px-4 py-2 mx-2 bg-green-600 text-white rounded-md" > Submit </button>
                <button @click="nextQuestion" v-if="!isLastQuestion" class="px-4 py-2 mx-2 bg-blue-600 text-white rounded-md">Next</button>
            </div>
        </div>
</div>


      </Home>

</template>


<style>

    input[type="radio"]:hover{
        cursor:pointer;

    }

</style>
