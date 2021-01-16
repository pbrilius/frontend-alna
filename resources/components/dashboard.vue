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
        <button type="submit">Submit</button>
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