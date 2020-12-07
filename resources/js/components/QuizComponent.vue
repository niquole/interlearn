<template>
    <div class="container">
        <div class="col mb-4 text-white">
            <div class="card text-center">
                <div class="card-body">
    <div class="mrgn-top"> </div>
                    
                    <a :href="'/quiz/' + quiz.id" class="card-title">
                        <h1 class="quiz-titl">
                            {{quiz.title}} (Quiz)
                        </h1>
                    </a>
                    
                    <div class="card-text quiz-desc">
                        <br>
                        {{ quiz.description }}
                    </div>
                    Creator: 
                    {{quiz.user.name }} 
                    <img class="quiz-lesson-img" src="https://source.unsplash.com/user/erondu/1000x500" alt="">
                    
                    <br>
                    
                    Answers
                    <div id="correct">
                        <h1>
                            Correct!
                        </h1>
                    </div>
                    
                    <div id="wrong">
                        <h1>Wrong. Try again!</h1>
                    </div>
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
                    document.getElementById("correct").style.display = "block";
                    document.getElementById("wrong").style.display = "none";
                } else {
                    document.getElementById("correct").style.display = "none";
                    document.getElementById("wrong").style.display = "block";
                }
            },
            
            is_option2_right() {
                if ( this.quiz.selected === 'option2' ) {
                    document.getElementById("correct").style.display = "block";
                    document.getElementById("wrong").style.display = "none";
                } else {
                    document.getElementById("correct").style.display = "none";
                    document.getElementById("wrong").style.display = "block";
                }
            },
            
            is_option3_right() {
                if ( this.quiz.selected === 'option3' ) {
                    document.getElementById("correct").style.display = "block";
                    document.getElementById("wrong").style.display = "none";
                } else {
                    document.getElementById("correct").style.display = "none";
                    document.getElementById("wrong").style.display = "block";
                }
            },
            
            is_option4_right() {
                if ( this.quiz.selected === 'option4' ) {
                    document.getElementById("correct").style.display = "block";
                    document.getElementById("wrong").style.display = "none";
                } else {
                    document.getElementById("correct").style.display = "none";
                    document.getElementById("wrong").style.display = "block";
                }
            }
        }
    }
</script>

<style>
    a h1.quiz-titl {
        margin: 0 auto;
        border-radius: 20px 20px 0px 0px ;
    }
    
    
    .quiz-content {
        width: 52.1vw !important;
        margin: 0 auto !important;
        border-radius: 20px;
        padding: 30px;
        font-size: 20px;
        font-weight: 100;
    }
    
    .option {
        background-color: transparent;
        border-radius: 20px;
        font-size: 20px;
        color: #fff;
        transition: .2s;
    }
    
    #correct {
        display: none;
        background-color: rgb(70, 167, 67);
        height: 10%;
        width: 20%;
        margin: 0 auto;
        border-radius: 20px;
        text-align: center;
    }

    h1 {
        margin-top: 22%;
    }
    
    #wrong {
        display: none;
        background-color: rgba(236, 85, 97, 0.76);
        height: 10%;
        width: 40%;
        margin: 0 auto;
        border-radius: 20px;
        text-align: center;
        margin-top: -4%;
    }
</style>