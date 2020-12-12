<template>
    <div class="stepper">
        <!-- STEPPER -->
        <el-steps :active="active">
            <el-step title="Step 1"></el-step>
            <el-step title="Step 2"></el-step>
            <el-step title="Step 3"></el-step>
        </el-steps>
        
        <!-- STEP 1 CONTENT -->
        <el-form v-if="active===1">
            <div class="step-content">
                <div class="step-desc"><h4>Determine your lessons Title and Description</h4></div>
                <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Title" v-model="title"></el-input>
                <br>
                <br>
                <el-input type="textarea" :autosize="{ minRows: 3, maxRows: 4}" placeholder="Description" v-model="description"></el-input>
                <div class="next-btn-position">
                    <el-button class="step-btn" style="margin-top: 12px;" @click="next" >Next</el-button>
                </div>
                
            </div>
            
        </el-form>
        
        
        <!-- STEP 2 CONTENT -->
        <el-form  v-if="active===2">
            <div class="step-content">
                <div class="step-desc"><h4>Add your lessons Content</h4></div>
                
                <el-input type="textarea" :autosize="{ minRows: 5, maxRows: 6}" placeholder="Content" v-model="content"></el-input>
                
                
                <div class="next-btn-position">
                    <el-button class="step-btn" style="margin-top: 12px;" @click="next" >Next</el-button>
                </div>
                
                <div class="previous-btn-position">
                    <el-button  class="prev-step-btn" style="margin-top: 12px;" @click="gotofirst" >Previous</el-button>
                </div>
            </div>
        </el-form>
        
        
        <!-- STEP 3 CONTENT -->
        <el-form v-if="active===3">
            <div class="step-content">
                <div class="step-desc"><h4>This is a checking point. Please make sure that your lesson is ready by checking the previous steps.</h4>
                </div>
                
                <div class="next-btn-position">
                    <el-button class="step-done-btn" style="margin-top: 12px;" @click="addlesson">
                        <span class="done">Done</span>
                        </el-button>
                </div>
                
                <div class="previous-btn-position">
                    <el-button class="prev-step-btn" style="margin-top: 12px;" @click="gotosecond" >Previous</el-button>
                </div>
            </div>
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
                
                axios.get('http://interlearn.me/api/lessons')
                .then((response) => {
                    const data = response.data;
                    this.lessons = data;
                    this.loading = false;
                });
            },
            addlesson() {
                this.submitting = true;
                axios.post('http://interlearn.me/api/lessons', {
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
                    window.location.replace("/lessons" )
                    
                });
            }
        },
        mounted() {
            
        }
        
    }
    
</script>

<style>
    .create_lesson:hover {
        
        background-color: #FCBF49 !important;
    }
    .stepper {
        width: 70vw;
        margin: 0 auto;
        position: relative;
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
        font-weight: bold;
    }
    
    .el-step__title.is-finish {
        color:rgb(181, 134, 189);
    }
    
    .el-step__head.is-finish {
        color: rgb(237, 137, 255);
        border-color:rgb(181, 134, 189);
    }
    
    .step-desc {
        font-size: 18px;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 2%;
    }
    
    .el-button:focus {
        outline: 0 !important;
        color: #fff;
        background-color: transparent;
    }
    
    button:focus {
        outline: 0 !important;
    }
    
    .step-btn {
        background-color: transparent;
        height: 5vh;
        width: 8vw;
        color: #fff;
        border: 2px solid #599FA5;
        border-radius: 15px;
        transition: .2s;
        font-size: 18px;
        padding: 10px;
        
    }
    
    
    .step-btn:hover {
        background-color: #599FA5 ;
        color: #fff;
        border: 2px dotted #fff ;
        
    }
    
    .step-done-btn {
        background-color: rgb(156, 189, 134);
        height: 5vh;
        width: 8vw;
        color: #fff;
        border: 2px solid rgb(156, 189, 134);
        border-radius: 15px;
        transition: .2s;
        font-size: 20px;
        transition: .2s;
        margin: 0 auto;
    }
    
    .step-done-btn:hover {
        background-color: rgb(127, 158, 106);
        color: #fff;
        border: 2px dotted #fff;
    }
    
    .step-content {
        height: 60vh;
    }
    
    .next-btn-position {
        position: absolute;
        top: 50%;
        left: 88%;
    }
    
    .previous-btn-position {
        position: absolute;
        top: 50%;
        /* right: 88%;   */
    }

    .prev-step-btn { 
        background-color: transparent;
        height: 5vh;
        width: 8vw;
        color: #fff;
        border: 2px solid #599FA5;
        border-radius: 15px;
        transition: .2s;
        font-size: 18px;
        padding: 10px;
    }

    .prev-step-btn:hover {
               background-color: #599FA5 ;
        color: #fff;
        border: 2px dotted #fff ; 
    }
    
</style>