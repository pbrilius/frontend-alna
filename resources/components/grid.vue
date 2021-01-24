<template>
  <div class="container container-fluid ml-0 mr-0 pl-0 pr-0">
    <button
      class="btn btn-secondary"
      v-on:click="refreshGrid"
    >
      Load Crawl Data
    </button>
    <table class="table table-secondary mt-2">
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
      Axios.get("http://localhost:2124/api/articles").then(
        (response) => (this.articles = response.data)
      );
    },
  },
};
</script>