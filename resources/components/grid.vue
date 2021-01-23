<template>
  <div class="container">
    <button
      class="bg-gradient-to-r from-green-400 to-blue-500 focus:from-pink-500 focus:to-yellow-500 refresh"
      v-on:click="refreshGrid"
    >
      Load Crawl Data
    </button>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>URL</th>
          <th>CSS3</th>
          <th>Content</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="article in articles" v-bind:key="article.id">
          <td>{{ article.id }}</td>
          <td>
            <a v-bind:href="article.URL">{{ article.URL }}</a>
          </td>
          <td>{{ article.CSS3 }}</td>
          <td>{{ article.content }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
const { default: Axios } = require("axios");

export default {
  data() {
    return {
      articles: null,
    };
  },
  mounted() {
    Axios.get("http://localhost:2124/api/articles").then(
      (response) => (this.articles = response.data)
    );
  },
  methods: {
    refreshGrid: function (event) {
      console.log("event propagation - refresh.");
      Axios.get("http://localhost:2124/api/articles").then(
        (response) => (this.articles = response.data)
      );
    },
  },
};
</script>