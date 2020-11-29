<template>
    <div class="container">
        <div class="mrgn-top"></div>
        <div class="mrgn-top"></div>
        <div class="col mb-4 text-white">
            <div class="card text-center">
                <div class="card-body">
                    <a :href="'/quiz/' + quiz.id" class="card-title">
                        <h1 class="quiz-titl">
                            {{quiz.title}}
                        </h1>
                    </a>
                    <img class="quiz-lesson-img" src="https://source.unsplash.com/user/erondu/1000x500" alt="">

                    <div class="card-text quiz-desc">
                        Description
                        <br>
                        {{ quiz.description }}
                    </div>
                    <br>
                    
                    Answers
                    
                    <div class="quiz-content">
                        <ul>
                            <el-button class="option" @click="is_option1_right">{{quiz.option1}}</el-button>
                            <br>
                            <br>
                            
                            <el-button class="option" @click="is_option2_right">{{quiz.option2}}</el-button>
                            <br>
                            <br>
                            
                            <el-button class="option" @click="is_option3_right">{{quiz.option3}}</el-button>
                            <br>
                            <br>
                            
                            <el-button class="option"  @click="is_option4_right">{{quiz.option4}}</el-button>
                        </ul>
                    </div>
                    <br>
                    Creator: 
                    <br>
                    {{quiz.user.name }} 
                </div>
                <a href="/quizzes">
                    <span class="symbol">⬿</span><span>Go back to Quizzes</span>
                </a>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ["dataquiz"],
        data() {
            return {
                quiz: {
                    title: '',
                    description: '',
                    option1: '',
                    option2: '',
                    option3: '',
                    option4: '',
                }
            }
        },
        mounted() {
            this.quiz = JSON.parse(this.dataquiz);
            console.log(this.quiz.selected);
        },
        methods: {
            
            is_option1_right() {
                if ( this.quiz.selected === 'option1' ) {
                    alert('CORRECT!!!😄')
                } else {
                    alert('Wrong😔 Try again!')
                }
            },
            
            is_option2_right() {
                if ( this.quiz.selected === 'option2' ) {
                    alert('CORRECT!!!😄')
                } else {
                    alert('Wrong😔 Try again!')
                }
            },
            
            is_option3_right() {
                if ( this.quiz.selected === 'option3' ) {
                    alert('CORRECT!!!😄')
                } else {
                    alert('Wrong😔 Try again!')
                }
            },
            
            is_option4_right() {
                if ( this.quiz.selected === 'option4' ) {
                    alert('CORRECT!!!😄')
                } else {
                    alert('Wrong😔 Try again!')
                }
            }
        }
    }
</script>

<style>
       a h1.quiz-titl {
        background-color:rgb(126, 126, 126) !important;
        width: 52.1vw !important;
        margin: 0 auto;
        border-radius: 20px 20px 0px 0px ;
    }
    
    .quiz-desc {
        background-color:rgb(126, 126, 126);
        width: 52.1vw !important;
        margin: 0 auto !important;
        border-radius:  0px 0px 20px 20px;
        
    }
    
    .quiz-content {
        background-color :#FCBF49;
        width: 52.1vw !important;
        margin: 0 auto !important;
        border-radius: 20px;
        padding: 30px;
        font-size: 20px;
        font-weight: 100;
    }

    .option {
        width: 500px !important;
    }
</style>