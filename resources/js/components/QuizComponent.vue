<template>
    <div class="container">
        <div class="col mb-4 text-white">
            <div class="card text-center">
                <div class="card-body">
                    <a :href="'/quiz/' + quiz.id" class="card-title">
                        <h4>
                            {{quiz.title}}
                        </h4>
                    </a>
                    <div class="card-text">
                        {{ quiz.description }}
                    </div>
                     by: {{quiz.user.name}}
                    <br>
                    <br>
                    
                    <div>
                        <ul>
                            <el-button @click="is_option1_right">{{quiz.option1}}</el-button>
                            <br>
                            <br>

                            <el-button  @click="is_option2_right">{{quiz.option2}}</el-button>
                            <br>
                            <br>

                            <el-button  @click="is_option3_right">{{quiz.option3}}</el-button>
                            <br>
                            <br>

                            <el-button  @click="is_option4_right">{{quiz.option4}}</el-button>
                        </ul>
                    </div>
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
                    alert('corect!!!')
                } else {
                    alert('Wrong! try again!')
                }
            },

            is_option2_right() {
                if ( this.quiz.selected === 'option2' ) {
                    alert('corect!!!')
                } else {
                    alert('Wrong! try again!')
                }
            },

            is_option3_right() {
                if ( this.quiz.selected === 'option3' ) {
                    alert('corect!!!')
                } else {
                    alert('Wrong! try again!')
                }
            },

            is_option4_right() {
                if ( this.quiz.selected === 'option4' ) {
                    alert('corect!!!')
                } else {
                    alert('Wrong! try again!')
                }
            }
        }
    }
</script>
