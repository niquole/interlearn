<template>
    <div class="stepper">
        <!-- NAVIGATION  -->
        <div class="mrgn-top"> </div>
        <div class="navigation">
            <a href="/create-lesson" id="lesson-nav" class="navlink active">Lesson</a>
            |
            <a href="/create-quiz" id="quiz-nav" class="navlink ">Quiz</a>
        </div>
        <div class="mrgn-top"></div>
        <div class="mrgn-top"> </div>
        
        <!-- END OF NAV -->
        
        <!-- STEPPER -->
        <el-steps :active="active">
            <el-step title="Step 1"></el-step>
            <el-step title="Step 2"></el-step>
            <el-step title="Step 3"></el-step>
        </el-steps>
        
        <!-- STEP 1 CONTENT -->
        <el-form v-if="active===1">
            <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Question" v-model="title"></el-input>
            <br>
            <br>
            
            <el-input type="textarea" :autosize="{ minRows: 3, maxRows: 4}" placeholder="Description" v-model="description"></el-input>
            <el-button  style="margin-top: 12px;" @click="next" >Next step</el-button>
            
        </el-form>
        
        
        <!-- STEP 2 CONTENT -->
        <el-form  v-if="active===2">
            <el-input type="textarea" :autosize="{ minRows: 5, maxRows: 10}" placeholder="Content" v-model="content"></el-input>
            
            <el-button  style="margin-top: 12px;" @click="gotofirst" >Previous step</el-button>
            <el-button  style="margin-top: 12px;" @click="next" >Next step</el-button>
        </el-form>
        
        
        <!-- STEP 3 CONTENT -->
        <el-form v-if="active===3">
            <el-button  style="margin-top: 12px;" @click="gotosecond" >Previous step</el-button>
            <el-button  style="margin-top: 12px;" @click="addlesson">Done</el-button>
        </el-form>
        
        
        
    </div>
</template>


<script>
    export default {
        data() {
            return {
                active: 1,
                lessons: [],
                loading: false,
                submitting: false,
                title: '',
                description: '',
                content: '',
            }
        },
        
        methods: {
            // Stepper 
            next() {
                if (this.active++ > 2) this.active = 1;
            },
            gotofirst() {
                if (this.active++ > 1) this.active = 1;
            },
            gotosecond() {
                if (this.active++ > 1) this.active = 2;
            },
            fetchlessons() {
                    this.loading = true;
                    this.lessons = [];
                    
                    axios.get('http://interlearn.test/api/lessons')
                    .then((response) => {
                        const data = response.data;
                        this.lessons = data;
                        this.loading = false;
                    });
                },
                addlesson() {
                    this.submitting = true;
                    axios.post('http://interlearn.test/api/lessons', {
                        title: this.title,
                        description: this.description,
                        content: this.content,
                        
                        
                    })
                    .then((response) => {
                        const data = response.data;
                        this.lessons.push(data);
                        this.title = '';
                        this.description = '';
                        this.content = '';
                        this.submitting = false;
                window.location.replace("/quizzes" )

                    });
                }
            },
        mounted() {
            
        }
    }
</script>

<style>
    .stepper {
        width: 70vw;
        margin: 0 auto;
    }
    
    .center-radio {
        position: relative;
        left: 23%;
        width: 50vw !important; 
        
    }
    
    .el-input {
        width: 35vw;
        margin: 0 auto;
        
        
    }
    
    .el-input__inner {
        background-color: transparent !important;
        border-radius: 20px;
    }
    
    .el-textarea__inner {
        background-color: transparent !important;
        border-radius: 20px;
    }
    
    .el-step__title {
        font-size: 20px;
        margin-bottom: 5%;
    }
    
    .el-step__title.is-finish {
        color:rgb(181, 134, 189);
    }
    
    .el-step__head.is-finish {
        color: rgb(237, 137, 255);
        border-color:rgb(181, 134, 189);
    }
</style>