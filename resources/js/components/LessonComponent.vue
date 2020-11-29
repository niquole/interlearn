<template>
    <div class="container">
        <div class="mrgn-top"></div>
        <div class="mrgn-top"></div>
        <div class="col mb-4 text-white">
            <div class="card text-center">
                <div class="card-body">
                    <a :href="'/lesson/' + lesson.id" class="card-title">
                        <h1 class="titl">
                            {{lesson.title}}
                        </h1>
                    </a>
                    <img class="quiz-lesson-img" src="https://source.unsplash.com/user/erondu/1000x500" alt="">
                    <div class="card-text desc">
                        Description
                        <br>
                        {{ lesson.description }}
                    </div>
                    <br>
                    
                    Content
                    
                    <div class="card-text content">
                        <div>
                            {{ lesson.content }}
                        </div>
                    </div>
                    
                    <br>
                    
                    <br>
                    Creator: 
                    <br>
                    {{lesson.user.name }} 
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
        background-color: rgb(126, 126, 126) !important;
        width: 52vw !important;
        margin: 0 auto;
        border-radius: 20px 20px 0px 0px ;
    }
    
    .desc {
        background-color: rgb(126, 126, 126);
        width: 52vw !important;
        margin: 0 auto !important;
        border-radius:  0px 0px 20px 20px;
        
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
