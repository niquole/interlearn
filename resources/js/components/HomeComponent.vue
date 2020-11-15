<template>
    <div class="margin-top-container">

        <div v-for="(quiz,i) in quizzes" :key="i">
            <div class="margin-top-between">
                
                <div class="lesson-container">
                    <h2>{{ quiz.title }}</h2>
                    <p >{{ quiz.description }}</p>
                    <span>{{ quiz.user_id }}</span>
                    <div id="lesson-link">
                        L
                        <br>
                        E
                        <br>
                        S
                        <br>
                        S
                        <br>
                        O 
                        <br>
                        N
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="margin-top-between">
            <div class="quiz-container">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae, maiores?</p>
                <span>{{ user.name }}</span>
                <div id="quiz-link">
                    Q
                    <br>
                    U
                    <br>
                    I
                    <br>
                    Z
                </div>
            </div>
        </div> -->
    </div>
    
</template>

<script>
    export default {
      data() {
        return {
          quizzes: []
        }
      },
      mounted() {
        //   console.log(quiz.user.name);
          axios.get('/api/quizzes').then((response) => {
              this.quizzes = response.data
          });
      }
    }
  </script>