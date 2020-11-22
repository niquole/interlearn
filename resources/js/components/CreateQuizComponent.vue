<template>
    <div id="app-vue">
      <div class="posts">
        <button class="btn btn-primary" @click="fetchquizzes">
          Fetch posts
        </button>

        <input
          class="add-search-input"
          type="text"
          v-model="title"
          
        >

                <input
          class="add-search-input"
          type="text"
          v-model="description"
          @keyup.enter="addquiz"
        >

        <div>
          <p v-if="submitting">Submitting...</p>
          <p v-if="loading">Loading...</p>

          <ul>
            <li v-for="quiz in quizzes">
              {{ quiz.title }} - <br> - {{ quiz.description }}
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