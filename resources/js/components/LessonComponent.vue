<template>
    <div class="container">
        <div class="col mb-4 text-white">
            <div class="card text-center">
                <div class="card-body">
                    <div class="box">
                        <a :href="'/lesson/' + lesson.id" class="card-title">
                            <h4 >
                                {{lesson.title}} (Lesson)
                            </h4>
                        </a>
                        
                        <div class="card-text desc">
                            Description
                            <br>
                            {{ lesson.description }}
                        </div>
                        Creator: 
                        {{lesson.user.name }} 
                    </div>
                    <img class="quiz-lesson-img" src="https://source.unsplash.com/user/erondu/1000x500" alt="">
                    
                    <br>
                    
                    Content
                    
                    <div class="card-text content">
                        <div>
                            {{ lesson.content }}
                        </div>
                    </div>
                    
                    <br>
                    
                    
                </div>
                <a href="/lessons">
                    <span class="symbol">⬿</span><span>Go back to Lessons</span>
                </a>
            </div>
        </div>
    </div>
</template>
<style >
    .symbol {
        display: inline-block;
        margin-left: 2px;
        font-size: 28px;
        text-align: center;
    }
    
    a h1.titl {
        margin: 0 auto;
        border-radius: 20px 20px 0px 0px ;
    }

    .box {
        background-color: rgba(71, 71, 71, 0.294);
        width: 19vw;
        font-size: 12px;
        position: relative;
        right: 30%;
        padding: 1%;
        margin-bottom: 20px;
    }
    
    .content {
        background-color: #599fa5;
        width: 52vw !important;
        margin: 0 auto !important;
        border-radius: 20px;
        padding: 3%;
        font-size: 20px;
        font-weight: 100;
    }
    
    .quiz-lesson-img {
        width: 52vw !important;
        object-fit: contain;
    }
    
    @media (max-width: 1500px) {
        .box {
            font-size: 12px;
            width: 40vw;
            padding: 0px;
        right: 10%;

            /* height: 50vh; */
        }
        
        h1 {
            font-size: 14px;
        }
    }
</style>
<script>
    export default {
        props: ["datalesson"],
        data() {
            return {
                lesson: {}
            }
        },
        mounted() {
            this.lesson = JSON.parse(this.datalesson);
        },
        methods: {}
    }
</script>
