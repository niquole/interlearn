<template>
    <div>
        <!-- MOBILE NAV  -->
        
        <a class="menu__icon mobile"><span></span></a>
        <ul class="menu mobile">
            <li><a href="/" class="menu__item">Home</a></li>
            <li><a href="/lessons" class="menu__item">Lessons</a></li>
            <li><a href="/quizzes" class="menu__item">Quizzes</a></li>
            <li><a href="/create-lesson" class="menu__item">Create a Lesson</a></li>
            <li><a href="/create-quiz" class="menu__item">Create a Quiz</a></li>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li><a href="/login" class="menu__item">Login</a></li>
            <li><a href="/register" class="menu__item">Register</a></li>

        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            }
        },
        mounted() {
            // mobile nav 
            $(document).ready(function() {
                $('.menu__icon').click(function(){
                    $('body').toggleClass('menu_shown');
                });
            });
        }
    }
</script>

<style scoped>
div {
    font-size: 20px;
    font-weight: 100;
}
</style>