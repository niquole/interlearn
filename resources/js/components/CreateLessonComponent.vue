<template>
    
    <div>
        <!-- NAVIGATION -->
        <div class="navigation">
            <a href="/create-lesson" id="lesson-nav" class="navlink active">Lesson</a>
            <a href="/create-quiz" id="quiz-nav" class="navlink ">Quiz</a>
        </div>

        <div class="steps">
            <!-- FIRST STEP -->
            <div class="step">
                <div class="step-header">
                    <div class="header">First Step</div>
                    <div class="subheader">Please determine your lessons Title and Description</div>
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
                    <div class="header">Second Step</div>
                    <div class="subheader">Add a title, content and an image!</div>
                </div>
                
                
                <div class="step-content two">
                    <div style="margin: 20px 0;"></div>
                    <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Lessons Content" v-model="content"></el-input>
                    <el-upload class="upload-demo relative"  action=""  >
                        <el-button class="upload_position" size="small"  type="primary">Click to upload an image</el-button>
                        <div slot="tip" class="el-upload__tip text-align-right">jpg/png files with a size less than 500kb</div>
                    </el-upload>
                    <br>
                    <button class="next-btn" type="button">Next</button>
                </div>
            </div>
            
            
            <!-- THIRD STEP  -->
            <div class="step minimized"> <!--minimize step-->
                <div class="step-header">
                    <div class="header">And finally step three!</div>
                    <div class="subheader">Last but not the least!</div>
                </div>
                
                <div class="step-content three">
                    <button class="close-btn" @click="addlesson">Done</button>
                    <p v-if="submitting">Submitting...</p>
                    <p v-if="loading">Loading...</p>
                </div>
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