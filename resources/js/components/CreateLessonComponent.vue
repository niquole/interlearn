<template>
    <div>
        <div class="row justify-content-center">
            <div class="navigation">
                <a href="/create-lesson" id="lesson-nav" class="navlink active">Lesson</a>
                <a href="/create-quiz" id="quiz-nav" class="navlink">Quiz</a>
            </div>
            <div class="col-md-12 mb-12">
                
                <form enctype="multipart/form-data" class="lesson-form">
                    
                    <input class="form-control mb-6" placeholder="Title"
                    v-model="form.title"></input>
                    
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
                }
            },
            methods: {

                submitForm() {
                    axios.post("/api/lessons", this.form)
                    .then((response) => {
                        window.location.href = '/users/' + this.user.id;
                    })
                }
            },
            mounted() {
                axios.get("/api/categories").then((response) => {
                    this.categories = response.data;
                });
                this.user = JSON.parse(this.dataUser);
            }
        }
    </script>