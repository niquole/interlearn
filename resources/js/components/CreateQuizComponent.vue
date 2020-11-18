<template>
    <div>
        <div class="row justify-content-center">
            <div class="navigation">
                <a href="/create-lesson" id="lesson-nav" class="navlink ">Lesson</a>
                <a href="/create-quiz" id="quiz-nav" class="navlink active">Quiz</a>
            </div>
            <div class="col-md-12 mb-12">
                
                <form action="POST" enctype="multipart/form-data">
                    
                    <input  class="form-control mb-6" placeholder="Title"
                    v-model="form.title">
                    
                    <textarea class="form-control mb-1 form-control" placeholder="Body"
                    v-model="form.description"></textarea>
                    
                        <div>
                            <button @click="submitForm()" type="button" class="submitArticle btn upload">Submit</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</template>
    <script>
        export default {
            props: ["dataUser"],
            data() {
                return {
                    user: [],
                    
                    form: {
                        title: "",
                        description: "",
                    },
                    headers: {'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content}
                }
            },
            methods: {

                submitForm() {
                console.log(this.form);

                    axios.post("/api/quizzes", this.form);
                    // .then((response) => {
                    //     window.location.href = '/users/' + this.user.id;
                    // })
                }
            },
            mounted() {
                this.user = JSON.parse(this.dataUser);
            }
        }
    </script>