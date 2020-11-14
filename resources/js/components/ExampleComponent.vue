<template>
    <ul id="example-1">
  <li v-for="(user,i) in users" :key="i" >
    {{ user.name }}
  </li>
</ul>
</template>
<script>
  export default {
    data() {
      return {
        users: []
      }
    },
    mounted() {
        axios.get('/api/users').then((response) => {
            this.users = response.data
        })
    }
  }
</script>