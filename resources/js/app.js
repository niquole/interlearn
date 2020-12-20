/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import ViewUI from 'view-design';
// import 'view-design/dist/styles/iview.css';

// Vue.use(ViewUI);

window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('create-component', require('./components/CreateComponent.vue').default);
Vue.component('quizzes-component', require('./components/QuizzesComponent.vue').default);
Vue.component('lessons-component', require('./components/LessonsComponent.vue').default);


Vue.component('landing-component', require('./components/LandingComponent.vue').default);
Vue.component('create-lesson-component', require('./components/CreateLessonComponent.vue').default);
Vue.component('create-quiz-component', require('./components/CreateQuizComponent.vue').default);



Vue.component('quiz-component', require('./components/QuizComponent.vue').default);
Vue.component('lesson-component', require('./components/LessonComponent.vue').default);


Vue.component('burger-menu-component', require('./components/BurgerMenuComponent.vue').default);
Vue.component('guest-burger-menu-component', require('./components/GuestBurgerMenuComponent.vue').default);

Vue.component('footer-component', require('./components/FooterComponent.vue').default);






/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// src/main.js

