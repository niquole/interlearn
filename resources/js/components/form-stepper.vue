<template>
    <div class="steps">
        <!-- FIRST STEP -->
        <div class="step">
            <div class="step-header">
                <div class="header">Firt Step</div>
                <div class="subheader">Please determine your lessons Title and Description</div>
            </div>
            
            <div class="step-content one">
                <form enctype="multipart/form-data" class="lesson-form">
                    <input type="textarea" autosize placeholder="Title" v-model="form.title"></input>
                <div style="margin: 20px 0;"></div>
                <input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Description" v-model="form.description"></input>
            
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
            <el-input type="textarea" autosize placeholder="Title" v-model="textarea1"></el-input>
            <div style="margin: 20px 0;"></div>
            <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="Description" v-model="textarea2">
            </el-input>
            <el-upload class="upload-demo" action="https://jsonplaceholder.typicode.com/posts/" :on-change="handleChange" :file-list="fileList">
                <el-button size="small" type="primary">Click to upload an image</el-button>
                <div slot="tip" class="el-upload__tip">jpg/png files with a size less than 500kb</div>
            </el-upload>
            <br>
            <button class="next-btn" type="submit">Next</button>
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
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    title: "",
                    description: "",
                    // image: "",
                    // category_id: ""
                }
            }
        },
        methods: {
            handleUpload(result, file) {
                this.form.image = "/storage/" + result.name
            },
            submitForm() {
                axios.post("/api/lessons", this.form)
            }
        },
        mounted() {
            // axios.get("/api/categories").then((response) => {
                //     this.categories = response.data;
                // })
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