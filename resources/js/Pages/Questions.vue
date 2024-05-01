<script setup>
    import { ref } from 'vue';
    import { Inertia } from '@inertiajs/inertia';
    import {usePage} from '@inertiajs/vue3';
    import { router } from '@inertiajs/vue3';
    import {computed} from 'vue';
    


    const page=usePage() //will be used to access our success values from backend 
    const success=computed(()=>page.props.flash.success);

     const showModal2=ref(false);

     const showViewQuestionModal=ref(false);

     const selectedQuestion=ref(null); 

    const answers=ref([]);
     const toggleModal=()=>{
        showModal2.value=!showModal.value;
     }

    import Home from './Home.vue'
    import Modal from './NewQuestionModal.vue';
    
    const showModal = ref(false)

    const createQuestion=()=>{
        showModal.value=!showModal.value;
    }


    const createdQuestion=ref(null);
    
    const newAnswers=ref([]);
    
    const selectedAnswer=ref(null);
    

    let answerId=1

    function addNewAnswer(){
        const newAnswer={
        id:answerId++,
        answer:'',
        correct_answer:0,

        }
        newAnswers.value.push(newAnswer);

    }

 

 function handleRadioToggle(Id){

        selectedAnswer.value=Id;

        newAnswers.value.forEach(answer=>{
            if(answer.id===Id){
            answer.correct_answer=1
            }else{
                answer.correct_answer=0;
            }
        })

        }
       


    function validateAnswers() {
    // Check if newAnswers.value is empty
    if (newAnswers.value.length === 0) {
        return false; // Or true, depending on your logic
    }

    // Loop through each answer
    for (const answer of newAnswers.value) {
        if (answer.answer.trim() === '') {
            return false;
        }
    }
    return true;
}

 

    function answerCount(){
            if(newAnswers.length<4){
                alert("Four answers required to submit ");
            }else if(newAnswers.length===4){
                    return true
                }
                return false;
    }

      function submitQuestion(){
            if(!createdQuestion.value){
                    alert('Question cannot be empty');
                    return false;
                }
            
            if(!validateAnswers() && !answerCount()){
                    alert('Fill all inputs before submission attempt!!');
                    return false ;
                }

           

             Inertia.post('/questions', {
  question: createdQuestion.value,
  answers: newAnswers.value
}).then(() => {
  // Navigate to a different page after the request succeeds 
  Inertia.visit('/questions');

  // Reset question and answers values after navigation
  router.on('success', () => {
    createdQuestion.value = null;
    newAnswers.value = [];
  });
});

        }


        const props=defineProps({
            questions:Object,
            error:Object,
        });
        console.log(props);

        function viewQuestion(index){

        showViewQuestionModal.value=true;
        selectedQuestion.value=props.questions[index];

        answers.value=props.questions[index].answers


            
        }

        //handle RadioChange and submit edited answers 
        const selectedEditAnswer=ref(null)

        function handleRadioChange(Id){

            selectedEditAnswer.value=Id;

            answers.value.forEach(answer=>{
                    if(answer.id===Id){
                        answer.correct_answer=1
                    }else{
                        answer.correct_answer=0
                    }
                })


        }

        /**

        function updateAnswers(){
            router.put('/answers,
            answers.value,
           
            )
        }

        **/

        const editQuestionModal=ref(false);
        const questionForEdit=ref(null);

        function editQuestion(){
        questionForEdit.value=props.question[index]
            alert('Edit Question here...');

        }

</script>


<template>
   <Home>


   
    <div class="container m-auto overflow-x-auto">

    <!------- Create a New Question with this button ------>


     <button id="show-modal"  @click="createQuestion" class="m-auto bg-blue-500 hover:bg-blue-600  mt-3 mb-2 text-white font-bold px-4 py-2 rounded-full shadow-lg"> Create Question </button>
   
   <!-------- The Teleport code for this buttion ------>
   <Teleport to="body">

   
   <modal :show="showModal"  @close="showModal = false" >
   
      <template #header>
        <h3 >Create Question </h3>
    
       
      </template>
      <template #success>
      <h4 v-if="success"> {{ success }} </h4>
      </template>
      



      <template #body>

<!------ New Valid Body ----->
   <div class="flex justify-center">
  <form class="w-full max-w-lg">
    <div class="mb-6">
      <input type="text" v-model="createdQuestion" class="w-full text-black font-2xl border border-gray-300 rounded-md py-2 px-3 placeholder-gray-400 focus:outline-none focus:border-blue-500" placeholder="Enter Question">
    </div>

    <div class="overflow-auto">
      <table class="table-auto w-full border-collapse-collapse">
        <thead>
          <tr>
            <th scope="col" class="px-4 py-2">#</th>
            <th scope="col" class="px-4 py-2">Answers</th>
            <th scope="col" class="px-4 py-2">Correct ?</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(answer,index) in newAnswers">
            <td class="border px-4 py-2">{{answer.id}}</td>
            <td class="border px-4 py-2">
              <input type="text" v-model="answer.answer"  class="w-full border border-gray-300 rounded-md py-2 px-3 placeholder-gray-400 focus:outline-none focus:border-blue-500 font-1xl font-bold text-black " placeholder="Enter Answer">
            </td>
            <td class="border px-4 py-2 mx-auto">
              <input type="radio" :checked="answer.correct_answer===1" :value="answer.id" @change="handleRadioToggle(answer.id)" name="correct" class="form-radio h-4 w-4 text-blue-500" />
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </form>
</div>

<div class="flex items-center space-x-4 mt-4">
   
    <button @click="addNewAnswer" v-if="newAnswers.length<4" class="bg-transparent text-white font-bold py-2 px-4 font-bold font-2xl hover:bg-blue-400 hover:font-3xl hover:rounded"> + </button>
    <button @click="submitQuestion" v-if="newAnswers.length>3" class="bg-green-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Submit </button>
</div>

<!------ First Part ends here ----->
































       
      </template>
      <template #footer>
      
     
      </template>
    </modal>




    <!--- Just using the modal again to view question, in the same teleport --->
     <modal :show="showViewQuestionModal"  @close="showViewQuestionModal = false" >

        <template #header>
            <h4> View Question/Answers </h4>

        </template>
        <template #body>
            <p> <strong> Q. {{selectedQuestion.question}} </strong> </p>

    <table class="table-auto w-full border-collapse-collapse">
        <thead>
          <tr>
            <th scope="col" class="px-4 py-2">#</th>
            <th scope="col" class="px-4 py-2">Answers</th>
            <th scope="col" class="px-4 py-2">Correct ?</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(answer,index) in answers">
            <td class="border px-4 py-2">{{index+1}}</td>
            <td class="border px-4 py-2">
              <input type="text" v-model="answer.answer"  class="w-full border border-gray-300 rounded-md py-2 px-3 placeholder-gray-400 focus:outline-none focus:border-blue-500 font-1xl font-bold text-black " placeholder="Enter Answer">
            </td>
            <td class="border px-4 py-2 mx-auto">
              <input type="radio" :checked="answer.correct_answer===1" :value="answer.id" @change="handleRadioChange(answer.id)" name="correct" class="form-radio h-4 w-4 text-blue-500" />
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>

    <div class="flex items-center space-x-4 mt-4">
   
    
    <button @click="submitQuestion"  class="bg-green-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Save </button>
</div>







        </template>
     </modal>

   </Teleport>




<!----- Former codes placed in the  template footer to  be deleted ------>













   <!------ Very valid codes on main page ----->


   <!-------- Questions Display Table ----->
  <table class="table-auto min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          #
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Question
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Action
        </th>
       
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <!-- Example question rows -->
      <tr v-for="(question,index) in questions" class="bg-gray-50 hover:bg-gray-100">
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-gray-900">{{index+1}}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-gray-900">{{ question.question}} </div>
        </td>
       <td class="px-6 py-4 whitespace-nowrap">
  <span class="inline-flex rounded-md shadow-sm">
    <!-- View button -->
    <button @click="viewQuestion(index)" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
      View
    </button>
    <!-- Edit button -->
    <button @click="editQuestionModal=true,editQuestion(index)" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
      Edit
    </button>
    <!-- Delete button -->
    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-red-600 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 ml-2">
      Delete
    </button>
  </span>
</td>

        
      </tr>
      
     
    </tbody>
  </table>
</div>





   </Home>
</template>


