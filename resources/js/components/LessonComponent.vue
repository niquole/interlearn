<template>
    <div class="container">
        <div class="col mb-4 text-white">
            <div class="card text-center">
                <div class="card-body">
                    <a :href="'/lesson/' + lesson.id" class="card-title">
                        <h4>
                            {{lesson.title}}
                        </h4>
                    </a>
                    <div class="card-text">
                        {{ lesson.description }}
                    </div>

                    <a href="" class="btn btn-outline card-link mt-3 "> {{lesson.user.name }} </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["datalesson"],
        data() {
            return {
                lesson: {}
            }
        },
        mounted() {
            this.lesson = JSON.parse(this.datalesson);
            // console.log(this.quiz);

        },
        methods: {}
    }
</script>
