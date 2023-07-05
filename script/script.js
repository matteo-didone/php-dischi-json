const { createApp } = Vue;

createApp({

  data() {

    return {
      apiUrl: "./server.php",
      items: [],
    };
  },

  methods: {
    getItems() {
      //Axios call
      axios.get(this.apiUrl, {
        params: {

        },
      })
      .then((response) => {
        console.log(response);
        // Why do we need to add ".data"?
        // Because Axios returns a response object with a data property that contains the data we requested.
        this.items = response.data;
      })
      .catch(function (error) {
        console.log(error);
      })
      .finally(function () {
        // always executed
      });
    }
  },

  created() {
    this.getItems();
  }

}).mount("#app");
