<template>
    <form action="localhost:2124/crawl" method="POST" class="form" v-on:submit="submitForm">
        <input
            type="text"
            v-model="article.url"
            name="URL"
            minlength="5"
            placeholder="URL"
        >
        <input
            type="text"
            v-model="article.css3"
            name="CSS3"
            placeholder="CSS3"
            minlength="6"
        >
        <button type="button" class="bg-gradient-to-r from-green-400 to-blue-500 focus:from-pink-500 focus:to-yellow-500">Submit</button>
    </form>
</template>

<script>
import Axios from "axios"
export default {
    data() {
        return {
            article: {
                url: '',
                css3: ''
            }
        };
    },
    methods: {
        submitForm: function(event) {
            event.preventDefault();
            event.stopPropagation();
            console.log('noted');
        }
    }
}
</script>