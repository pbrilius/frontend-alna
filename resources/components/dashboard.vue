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
  mounted() {
    // this.$loading.hide();
  },
  methods: {
    submitForm: function (event) {
      event.preventDefault();
      event.stopPropagation();
      $(event.target).find('button[type="submit"]').addClass("disabled");
      $('div[role="alert"]').addClass("d-none");

      $(".progress")
        .find('[role="progressbar"]')
        .attr("aria-valuenow", "0")
        .css("width", "0");

      $(".progress")
        .removeClass("d-none")
        .fadeIn()
        .find('[role="progressbar"]')
        .attr("aria-valuenow", "50")
        .css("width", "50%");
      Axios.post(
        $(event.target).attr("action"),
        $(event.target).serializeArray()
      )
        .then((response) => {
          console.log("OK");
          // this.$loading.hide();
          $('div[role="alert"].alert-success')
            .html(response.data.site + "<br>" + response.data.css3)
            .toggleClass("d-none");
          $(".progress")
            .find('[role="progressbar"]')
            .attr("aria-valuenow", "100")
            .css("width", "100%");
          $(".progress").fadeToggle("500", function () {
            $(this).addClass("d-none");
          });
          $(event.target).find('button[type="submit"]').removeClass("disabled");
        })
        .catch((err) => {
          $('[role="alert"].alert-danger').html(err).toggleClass("d-none");
          $(".progress").addClass("d-none");
          $(event.target).find('button[type="submit"]').removeClass("disabled");
        });
    },
  },
};
</script>