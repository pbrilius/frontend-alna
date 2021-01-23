<template>
  <form
    action="http://localhost:2124/api/crawl"
    method="POST"
    class="form"
    v-on:submit="submitForm"
  >
    <input
      type="text"
      v-model="article.url"
      name="URL"
      minlength="5"
      placeholder="URL"
    />
    <input
      type="text"
      v-model="article.css3"
      name="CSS3"
      placeholder="CSS3"
      minlength="6"
    />
    <button
      type="submit"
      class="bg-gradient-to-r from-green-400 to-blue-500 focus:from-pink-500 focus:to-yellow-500"
    >
      Submit
    </button>
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
      $(".flash-message").addClass("d-none");
      Axios.post(
        $(event.target).attr("action"),
        $(event.target).serializeArray()
      )
        .then((response) => {
          console.log("OK");
          $(".flash-message.success").toggleClass("d-none").html(response.data).show();
        })
        .catch((err) => {
          console.warn(err);
          $(".flash-message.error").toggleClass('d-none').html(err).show();
        });
    },
  },
};
</script>