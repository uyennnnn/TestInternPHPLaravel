new Vue({
    el: '#app',
    data: {
      email: '',
      subject: '',
      message: '',
      successMessage: false
    },
    methods: {
      sendEmail: function() {
        axios.post('send.php', {
          email: this.email,
          subject: this.subject,
          message: this.message
        })
        .then(response => {
          if (response.data === 'success') {
            this.successMessage = true;
            setTimeout(() => {
              this.successMessage = false;
            }, 3000); // ẩn thông báo sau 3 giây
            this.email = '';
            this.subject = '';
            this.message = '';
          } else {
            console.error(response.data);
          }
        })
        .catch(error => {
          console.error(error);
        });
      }
    }
  });
  