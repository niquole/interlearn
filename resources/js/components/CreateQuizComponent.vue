<!-- <template>
    <div>
        <div class="navigation">
            <a href="/create-lesson" id="lesson-nav" class="navlink">Lesson</a>
            <a href="/create-quiz" id="quiz-nav" class="navlink active">Quiz</a>
        </div>
        
        <form enctype="multipart/form-data" class="article-form form-group">
            <input type="text" v-model="form.title">
            <input type="text" v-model="form.description">
        </form>
        <div>
            <button @click="submitForm" type="submit" class="">Submit</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["dataUser"],
        data() {
            return {
                
                form: {
                    title: "",
                    description: ""
                },
                // headers: {'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content},
            }
        },
        methods: {
            submitForm() {
                axios.post("/api/quizzes", this.form);
            }
        },
        mounted() {
        }
    }
</script> -->

<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="post-form">
                            <input class="form-control mb-2" placeholder="title" type="text" v-model="form.title">
                            <input class="form-control mb-2" placeholder="description" type="text"v-model="form.description">
                            <button @click="submitForm" type="button" class="submitPost btn btn-outline-light form-control mt-3" >Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        components: {},
        data() {
            return {
                form: {
                    title: "",
                    description: "",
                }
            }
        },
        methods: {
            submitForm() {
                axios.post("/api/quizzes", this.form)
            }
        },
        mounted() {
            // this.user = JSON.parse(this.dataUser); 
            // console.log(this.user)
        }
    }
</script>