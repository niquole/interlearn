<template>
    
    <div>
        <div class="navigation">
            <a href="/create-lesson" id="lesson-nav" class="navlink ">Lesson</a>
            <a href="/create-quiz" id="quiz-nav" class="navlink active ">Quiz</a>
        </div>
        <div class="steps">
            
            
            <!-- FIRST STEP -->
            
            <div class="step">
                <div class="step-header">
                    <div class="header">Firt Step</div>
                    <div class="subheader">Please determine your lessons Title and Description</div>
                </div>
                
                <div class="step-content one">
                    <form>
                        <el-input type="textarea" autosize placeholder="Title" v-model="form.title"></el-input>
                        <div style="margin: 20px 0;"></div>
                        <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Description" v-model="form.description"></el-input>
                        
                        <!-- button -->
                        <button @click="submitForm" type="button" class="next-btn">Next</button>
                    </form>
                </div>
            </div>
            
            
            <div class="step minimized"> <!--minimize step-->
                
                <!-- SECOND STEP -->
                <div class="step-header">
                    <div class="header">Second Step</div>
                    <div class="subheader">Add a title, content and an image!</div>
                </div>
                
                
                <div class="step-content two">
                    <form enctype="multipart/form-data" class="post-form">
                        <el-input type="textarea" autosize placeholder="Title" ></el-input>
                        <div style="margin: 20px 0;"></div>
                        <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Description">
                        </el-input>
                        <el-upload class="upload-demo" action="">
                            <el-button size="small" type="primary">Click to upload an image</el-button>
                            <div slot="tip" class="el-upload__tip">jpg/png files with a size less than 500kb</div>
                        </el-upload>
                        <br>
                        <button class="next-btn" type="button">Next</button>
                    </form>
                </div>
            </div>
            
            
            <!-- THIRD STEP  -->
            <div class="step minimized"> <!--minimize step-->
                <div class="step-header">
                    <div class="header">And finally step three!</div>
                    <div class="subheader">Last but not the least!</div>
                </div>
                
                <div class="step-content three">
                    <button class="close-btn" type="submit">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>

</template>

<script>
    export default {
        data() {
            return {
                form: {
                    title: "",
                    description: "",
                }
            }
        },
        methods: {
            // handleUpload(result, file) {
            //     this.form.image = "/storage/" + result.name
            // },
            // submitForm() {
            //     axios.post("/api/lessons", this.form)
            // }
        },
        mounted() {

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