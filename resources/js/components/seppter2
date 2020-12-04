<template>
    
    <div>
        <!-- NAVIGATION -->
        <div class="mrgn-top"> </div>
        <div class="navigation">
            <a href="/create-lesson" id="lesson-nav" class="navlink active">Lesson</a>
            |
            <a href="/create-quiz" id="quiz-nav" class="navlink ">Quiz</a>
        </div>
        <div class="mrgn-top"></div>
        
        <div class="steps">
            <!-- FIRST STEP -->
            <div class="step">
                <div class="step-header">
                    <div class="header">
                        <h3 class="lesson-step-color">First Step</h3>
                    </div>
                    <div class="subheader">Please determine your lessons Title and Description on the following inputs, when you are positive about the fields please click the "NEXT" button to add the content</div>
                </div>
                
                <div class="step-content one">
                    <el-input type="textarea" autosize placeholder="Title" v-model="title"></el-input>
                    <div style="margin: 20px 0;"></div>
                    <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="description" v-model="description"></el-input>
                    
                    <!-- button -->
                    <button  type="button" class="next-btn">Next</button>
                </div>
            </div>
            
            
            <div class="step minimized"> <!--minimize step-->
                
                <!-- SECOND STEP -->
                <div class="step-header">
                    <div class="header">
                        <h3 class="lesson-step-color">Second Step</h3>
                    </div>
                    <div class="subheader">Add the lessons content and an image. When you are happy with the content please click the "NEXT" button</div>
                </div>
                
                
                <div class="step-content two">
                    <div style="margin: 20px 0;"></div>
                    <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Lessons Content" v-model="content"></el-input>
                    <el-upload class="upload-demo relative"  action=""  >
                        <el-button class="upload_position" size="small"  type="primary">Click to upload an image</el-button>
                        <div slot="tip" class="el-upload__tip text-align-right">This image will not appear to the actual end product (this is a sample)</div>
                    </el-upload>
                    <br>
                    <button class="next-btn" type="button">Next</button>
                </div>
            </div>
            
            
            <!-- THIRD STEP  -->
            <div class="step minimized" id="thirdstep"> <!--minimize step-->
                <div class="step-header">
                    <div class="header">
                        <h3 class="lesson-step-color">Final Step</h3>
                    </div>
                    <div class="subheader">This is a checking point, please make sure that all your wished content is added, you can go back to check by clicking on the step headers. 
                        <br>
                        When you are ready click the "DONE" button to upload your lesson!</div>
                    </div>
                    
                    <div class="step-content three" >
                        <button class="done-btn" @click="addlesson">Done</button>
                        <p v-if="submitting">
                            <el-button class="submiting-btn" type="primary" :loading="true">Submiting</el-button>
                        </p>
                        <p v-if="loading">
                            <el-button type="primary">Loading</el-button>
                        </p>
                        
                    </div>
                    <div id="afterdone">
                        After you submit your lesson you can find it on the Lessons page!
                    </div>
                    <a href="/lessons">
                        <el-button type="primary" class="go-to-created">Go to lessons page<i class="el-icon-arrow-right el-icon-right"></i></el-button>
                    </a>
                    
                    
                </div>
            </div>
        </div>
    </template>
    
    <script>
        export default {
            data() {
                return {
                    lessons: [],
                    loading: false,
                    submitting: false,
                    title: '',
                    description: '',
                    content: '',
                }
            },
            methods: {
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
                    });
                }
            },
            mounted() {
                // STEPPER 
                let curOpen;
                
                $(document).ready(function() {
                    curOpen = $('.step')[0];
                    
                    $('.next-btn').on('click', function() {
                        let cur = $(this).closest('.step');
                        let next = $(cur).next();
                        $(cur).addClass('minimized');
                        setTimeout(function() {
                            $(next).removeClass('minimized');
                            curOpen = $(next);
                        }, 400);
                    });
                    
                    $('.close-btn').on('click', function() {
                        let cur = $(this).closest('.step');
                        $(cur).addClass('minimized');
                        curOpen = null;
                    });
                    
                    $('.step .step-content').on('click' ,function(e) {
                        e.stopPropagation();
                    });
                    
                    $('.step').on('click', function() {
                        if (!$(this).hasClass("minimized")) {
                            curOpen = null;
                            $(this).addClass('minimized');
                        }
                        else {
                            let next = $(this);
                            if (curOpen === null) {
                                curOpen = next;
                                $(curOpen).removeClass('minimized');
                            }
                            else {
                                $(curOpen).addClass('minimized');
                                setTimeout(function() {
                                    $(next).removeClass('minimized');
                                    curOpen = $(next);
                                }, 300);
                            }
                        }
                    });
                })
            }
        }
    </script>
    
    