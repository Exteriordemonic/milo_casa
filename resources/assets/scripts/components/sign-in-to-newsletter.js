//TO DO : PUT CLASS w8 when sending to let ppl is allerdy doing smh

const CONFIG = {
  ELEM: '[data-sign-in-to-newsletter]',
  CLASS: {
    succes: '-succes',
    fail: '-fail',
  },
}

const SignInToNewsletter = {
  init() {
    const {ELEM, CLASS} = CONFIG;

    this.$elem = document.querySelector(ELEM);

    this.class = CLASS;

    this.addEvents()

    console.log('test');
  },

  addEvents() {
    this.$elem.addEventListener('submit', (event) => {
      event.preventDefault();

      const form = event.currentTarget;

      // Collect the form data while iterating over the inputs
      const data = {};

      for (let i = 0, ii = form.length; i < ii; ++i) {
        const input = form[i];
        if (input.name) {
          data[input.name] = input.value;
        }
      }

      // Construct an HTTP request
      var xhr = new XMLHttpRequest();
      xhr.open(form.method, form.action, true);
      xhr.setRequestHeader('Accept', 'application/json; charset=utf-8');
      xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');

      // Send the collected data as JSON
      xhr.send(JSON.stringify(data));

      // Callback function

      xhr.onloadend = (response) => {
        if (response.target.status === 0) {

          // Failed XmlHttpRequest should be considered an undefined error.
          this.fail();

        } else if (response.target.status === 400) {

          this.fail();
        } else if (response.target.status === 200) {

          this.succes();
        }
      };
    })
  },

  succes() {
    this.$elem.classList.add(this.class.succes)
  },

  fail() {
    this.$elem.classList.add(this.class.fail)
  },
}

export default SignInToNewsletter;

