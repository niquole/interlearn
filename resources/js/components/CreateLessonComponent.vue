<template>
    <div class="steps">
        <div class="step">
            <div class="step-header">
                <div class="header">Firt Step</div>
                <div class="subheader">Please determine your lessons Title and Description</div>
            </div>
            
            
            <div class="step-content one">
                <el-input
                type="textarea"
                autosize
                placeholder="Title"
                v-model="textarea1">
            </el-input>
            
            <div style="margin: 20px 0;"></div>
            <el-input
            type="textarea"
            :autosize="{ minRows: 2, maxRows: 4}"
            placeholder="Description"
            v-model="textarea2">
        </el-input>
        <button class="next-btn">Next</button>
    </div>
</div>

<div class="step minimized">
    <div class="step-header">
        <div class="header">Second Step</div>
        <div class="subheader">Add a title, content and an image!</div>
    </div>
    
    
    <div class="step-content two">
        <el-input
        type="textarea"
        autosize
        placeholder="Title"
        v-model="textarea1">
    </el-input>
     
    <div style="margin: 20px 0;"></div>
    <el-input
    type="textarea"
    :autosize="{ minRows: 2, maxRows: 4}"
    placeholder="Description"
    v-model="textarea2">
</el-input>
    <el-upload
    class="upload-demo"
    drag
    action="https://jsonplaceholder.typicode.com/posts/"
    :on-preview="handlePreview"
    :on-remove="handleRemove"
    :file-list="fileList"
    multiple>
    <i class="el-icon-upload"></i>
    <div class="el-upload__text">Drop file here or <em>click to upload</em></div>
    <div class="el-upload__tip" slot="tip">jpg/png files with a size less than 500kb</div>
    </el-upload>
    <div style="margin: 20px 0;"></div>
    <el-input
    type="textarea"
    :autosize="{ minRows: 2, maxRows: 4}"
    placeholder="Description"
    v-model="textarea2">
    </el-input>
    <br>
    <button class="next-btn">Next</button>
    </div>
    </div>
<div class="step minimized">
    <div class="step-header">
        <div class="header">And finally step three!</div>
        <div class="subheader">Last but not the least!</div>
    </div>
    <div class="step-content three">
        <button class="close-btn">Done</button>
    </div>
</div>
</div>
</template>

<script>let curOpen;
    
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
    })</script>