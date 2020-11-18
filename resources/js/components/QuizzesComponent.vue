<template>

    <div class="margin-top-container">
        <div class="navigation">
            <a href="/lessons" id="lesson-nav" class="navlink ">Lessons</a>
            <a href="/quizzes" id="quiz-nav" class="navlink active ">Quizzes</a>
        </div>
        <div  class="margin-top-container">
            <div v-for="quiz in quizzes" :key="quiz.id">
                <a class="link" :href="'/quiz/' + quiz.id">
                    <div class="margin-top-between">
                        <div class="quiz-container">
                            <h4>{{ quiz.title }}</h4>
                            <p >{{ quiz.description }}</p>
                            <span>{{ quiz.user.name }}</span>
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
                    </div>
                </a>
            </div>
        </div>
        
        
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
            var navlinks = document.getElementsByClassName("navlink");
            
            for (var i = 0; i < navlinks.length; i++) {
                navlinks[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                })
            }
            
            axios.get('/api/quizzes').then((response) => {
                this.quizzes = response.data
            });
        }
    }
</script>