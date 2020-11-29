<template>
  <div>
  </nav>
  <!-- NAVIGATION -->
  <div class="mrgn-top"> </div>
  <div class="navigation">
    <a href="/create-lesson" id="lesson-nav" class="navlink">Lesson</a>
    |
    <a href="/create-quiz" id="quiz-nav" class="navlink active">Quiz</a>
  </div>
  <div class="mrgn-top"></div>
  <div class="steps">
    <!-- FIRST STEP -->
    <div class="step">
      <div class="step-header">
        <div class="header">
          <h3 class="quiz-step-color">First Step</h3>
        </div>
        <div class="subheader">Please determine your lessons Title and Description</div>
      </div>
      
      <div class="step-content one">
        <el-input type="textarea" autosize placeholder="Title" v-model="title"></el-input>
        <div style="margin: 20px 0;"></div>
        <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 4}" placeholder="description" v-model="description"></el-input>
        
        <!-- button -->
        <button  type="button" class="next-btn-quiz">Next</button>
      </div>
    </div>
    <div class="step minimized"> <!--minimize step-->
      
      <!-- SECOND STEP -->
      <div class="step-header">
        <div class="header">
          <h3 class="quiz-step-color">Second Step</h3>
        </div>
        <div class="subheader">Add a title, content and an image!</div>
      </div>
      
      
      <div class="step-content two">
        <div style="margin: 20px 0;"></div>
        <br>
        
        <el-radio v-model="selected" label="option1">
          <el-input v-model="option1"></el-input>
        </el-radio>
        <br>
        
        <el-radio v-model="selected" label="option2">
          <el-input v-model="option2"></el-input>
        </el-radio>
        <br>
        
        <el-radio v-model="selected" label="option3">
          <el-input v-model="option3"></el-input>
        </el-radio>
        <br>
        
        <el-radio v-model="selected" label="option4">
          <el-input v-model="option4"></el-input>
        </el-radio>
        <br>
        <button class="next-btn-quiz" type="button">Next</button>
      </div>
    </div>
    
    
    <!-- THIRD STEP  -->
    <div class="step minimized"> <!--minimize step-->
      <div class="step-header">
        <div class="header">
          <h3 class="quiz-step-color">Final Step</h3>
        </div>
        <div class="subheader">Last but not the least!</div>
      </div>
      
      <div class="step-content three" >
        <button class="done-btn" @click="addquiz">Done</button>
        <p v-if="submitting">
          <el-button class="submiting-btn" type="primary" :loading="true">Submiting</el-button>
        </p>
        <p v-if="loading">
          <el-button type="primary">Loading</el-button>
        </p>
        
      </div>
      <div id="afterdone">
        After you submit your quiz you can find it on the Quizzes page!
      </div>
      <a href="/quizzes">
        <el-button type="primary" class="go-to-created">Go to quizzes page<i class="el-icon-arrow-right el-icon-right"></i></el-button>
      </a>
    </div>
  </div>
</div>

</template>
<script>
  export default {
    data() {
      return {
        quizzes: [],
        selected: '',
        option1: '',
        option2: '',
        option3: '',
        option4: '',
        loading: false,
        submitting: false,
        title: '',
        description: ''
      }
    },
    methods: {
      fetchquizzes() {
        this.loading = true;
        this.quizzes = [];
        
        axios.get('http://interlearn.test/api/quizzes')
        .then((response) => {
          const data = response.data;
          this.quizzes = data;
          this.loading = false;
        });
      },
      addquiz() {
        this.submitting = true;
        axios.post('http://interlearn.test/api/quizzes', {
          title: this.title,
          description: this.description,
          option1: this.option1,
          option2: this.option2,
          option3: this.option3,
          option4: this.option4,
          selected: this.selected
        })
        .then((response) => {
          const data = response.data;
          this.quizzes.push(data);
          this.title = '';
          this.description = '';
          this.selected = '';
          this.option1 = '';
          this.option2 = '';
          this.option3 = '';
          this.option4 = '';
          this.submitting = false;
        });
      }
    },
    mounted() {
      
      // STEPPER 
      let curOpen;
      
      $(document).ready(function() {
        curOpen = $('.step')[0];
        
        $('.next-btn-quiz').on('click', function() {
          let cur = $(this).closest('.step');
          let next = $(cur).next();
          $(cur).addClass('minimized');
          setTimeout(function() {
            $(next).removeClass('minimized');
            curOpen = $(next);
          }, 400);
        });
        
        $('.close-btn-quiz').on('click', function() {
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
