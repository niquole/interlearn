<template>
    <div class="margin-top-container">
        <div class="navigation">
            <a href="/lessons" id="lesson-nav" class="navlink active">Lessons</a>
            <a href="/quizzes" id="quiz-nav" class="navlink ">Quizzes</a>
            
        </div>
        <div  class="margin-top-container">
            <div v-for="(lesson,i) in lessons" :key="i">
                <a class="link" :href="'/lesson/' + lesson.id">
                    <div class="margin-top-between">
                    
                    <div class="lesson-container">
                        <h4>{{ lesson.title }}</h4>
                        <p >{{lesson.description}}</p>
                        <span>{{ lesson.user }}</span>
                        
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
    </div>
    
    
</div>

</template>

<script>
    export default {
        data() {
            return {
                lessons: []
            }
        },
        mounted() {
            //   console.log(quiz.user.name);
            var navlinks = document.getElementsByClassName("navlink");
            
            for (var i = 0; i < navlinks.length; i++) {
                navlinks[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                })
            }
            
            axios.get('/api/lessons').then((response) => {
                this.lessons = response.data
            });
        }
    }
</script>