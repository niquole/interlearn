<template>
    <div class="margin-top-container">

        <div v-for="(quiz,i) in quizzes" :key="i">
            <a :href="'/quiz/' + quiz.id">
                <div class="margin-top-between">
                
                    <div class="lesson-container">
                        <h2>{{ quiz.title }}</h2>
                        <p >{{ quiz.description }}</p>
                        <span>{{ quiz.user.name }}</span>
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
            </a>
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
        props: ["dataQuiz"],
      data() {
        return {
          quizzes:[]
        }
      },
      mounted() {
        this.quizzes = JSON.parse(this.dataQuiz);
      }
    }
  </script>

