<template>
  <div class="stepper">
    <!-- NAVIGATION  -->
    <div class="mrgn-top"> </div>
    <div class="navigation">
      <a href="/create-lesson" id="lesson-nav" class="navlink">Lesson</a>
      |
      <a href="/create-quiz" id="quiz-nav" class="navlink active">Quiz</a>
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
      <div class="center-radio">
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
      </div>
      <br>
    <el-button  style="margin-top: 12px;" @click="gotofirst" >Previous step</el-button>
    <el-button  style="margin-top: 12px;" @click="next" >Next step</el-button>
    </el-form>


    <!-- STEP 3 CONTENT -->
    <el-form v-if="active===3">
    <el-button  style="margin-top: 12px;" @click="gotosecond" >Previous step</el-button>
    <el-button  style="margin-top: 12px;" @click="addquiz" >Done</el-button>
    </el-form>

    
    
  </div>
</template>


<script>
  export default {
    data() {
      return {
        active: 1,
        quizzes: [],
        selected: '',
        option1: '',
        option2: '',
        option3: '',
        option4: '',
        loading: false,
        submitting: false,
        title: '',
        description: '',
      };
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