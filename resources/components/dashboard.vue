<template>
  <form
    action="http://localhost:2124/api/crawl"
    method="POST"
    class="form"
    v-on:submit="submitForm"
  >
    <div class="mb-3">
      <label for="URL" class="form-label">URL</label>
      <input
        type="text"
        v-model="article.url"
        name="URL"
        minlength="5"
        placeholder="URL"
        class="form-control"
        id="URL"
        required
      />
    </div>
    <div class="mb-3">
      <label for="CSS3" class="form-label">CSS3</label>
      <input
        type="text"
        v-model="article.css3"
        name="CSS3"
        placeholder="CSS3"
        minlength="6"
        id="CSS3"
        class="form-control"
        required
      />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</template>

<script>
import Axios from "axios";
export default {
  data() {
    return {
      article: {
        url: "",
        css3: "",
      },
    };
  },
  methods: {
    submitForm: function (event) {
      event.preventDefault();
      event.stopPropagation();
      console.log("noted");
      $('div[role="alert"]').addClass("d-none");
      Axios.post(
        $(event.target).attr("action"),
        $(event.target).serializeArray()
      )
        .then((response) => {
          console.log("OK");
          $('div[role="alert"].alert-success')
            .html(response.data.site + "<br>" + response.data.css3)
            .toggleClass("d-none");
        })
        .catch((err) => {
          console.warn(err);
          console.log($('[role="alert"].alert-warning').length);
          $('[role="alert"].alert-warning').html(err).toggleClass("d-none");
        });
    },
  },
};
</script>