<template>
    <div class="container">
        <div class="col mb-4 text-white">
            <div class="card text-center">
                <div class="card-body">
                    <a :href="'/quiz/' + quiz.id" class="card-title">
                        <h4>
                            {{quiz.title}}
                        </h4>
                    </a>
                    <div class="card-text">
                        {{ quiz.description }}
                    </div>

                    <a href="" class="btn btn-outline card-link mt-3 "> {{quiz.user}} </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["dataquiz"],
        data() {
            return {
                quiz: {}
            }
        },
        mounted() {
            this.quiz = JSON.parse(this.dataquiz);
            // console.log(this.quiz);

        },
        methods: {}
    }
</script>
