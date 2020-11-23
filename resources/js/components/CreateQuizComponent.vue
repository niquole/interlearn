<template>
  <div >
    <div class="navigation">
      <a href="/create-lesson" id="lesson-nav" class="navlink">Lesson</a>
      <a href="/create-quiz" id="quiz-nav" class="navlink active">Quiz</a>
    </div>
    <div>
      <button class="btn btn-primary" @click="fetchquizzes">
        Fetch posts
      </button>
      <el-input class="add-search-input" type="text" v-model="title"></el-input>
      <el-input class="add-search-input" type="text" v-model="description"  @keyup.enter="addquiz"></el-input>
      <el-button @click="addquiz">submit</el-button>
      <div>
        <p v-if="submitting">Submitting...</p>
        <p v-if="loading">Loading...</p>
        <ul>
          <li v-for="quiz in quizzes">
            {{ quiz.title }}  <br>  {{ quiz.description }}
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        quizzes: [],
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
          description: this.description
          
        })
        .then((response) => {
          const data = response.data;
          this.quizzes.push(data);
          this.title = '';
          this.description = '';
          this.submitting = false;
        });
      }
    }
  }
</script>