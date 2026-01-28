<template lang="html">
  <div id="contacto">

    <section class="container-fluid main-section">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-6 col-info">
          <div class="box-middle">
            <h2 class="mb-3 title-st-1">Contacto</h2>

            <div>
              <p class="text-center">
              Escríbenos acerca de lo que te gustaría tratarte o comentanos tu problema para realizar un análisis, nos contactaremos contigo a la brevedad.
              </p>

              <b-form class="mt-4" @submit="onSubmit">

                <b-form-group class="custom-group-1"
                  label="Correo electrónico:">
                  <b-form-input
                    size="sm"
                    v-model="form.email"
                    type="email"
                    placeholder=""
                    required
                  ></b-form-input>
                </b-form-group>

                <b-form-group class="custom-group-1"
                  label="Teléfono:">
                  <b-form-input
                    size="sm"
                    v-model="form.phone"
                    type="text"
                    placeholder=""
                    minlength="10"
                    maxlength="10"
                    required
                  ></b-form-input>
                </b-form-group>

                <b-form-group class="custom-group-1"
                  label="Asunto:">
                  <b-form-input
                    size="sm"
                    v-model="form.subject"
                    type="text"
                    placeholder=""
                    required
                  ></b-form-input>
                </b-form-group>

                <b-form-group class="custom-group-1"
                  label="Descripción:">
                  <b-form-textarea
                    size="sm"
                    v-model="form.msg"
                    placeholder=""
                    rows="3"
                    max-rows="3"
                  ></b-form-textarea>
                </b-form-group>

                <p class="text-center">
                  <b-button type="submit" class="btn-st-1 btn-color">Enviar</b-button>
                </p>

              </b-form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="placed-backg img-bg" v-bind:style="{ backgroundImage: 'url(public/images/home/contacto/ale.jpeg)' }"></div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      form: {
        email: null,
        phone: null,
        subject: null,
        msg: null,
      }
    }
  },

  methods: {
    makeToast(variant = null, msg, title) {
      this.$bvToast.toast(msg, {
        title: title,
        variant: variant,
        solid: true,
        toaster: 'b-toaster-top-right',
        appendToast: true
      })
    },

    onSubmit(event) {
      event.preventDefault();

      axios.post(tools.url("/api/contact"), this.form).then((response)=>{
          this.makeToast('success', response.data.response, 'Mensaje enviado');

          for (let prop in this.form) {
            this.form[prop] = '';
          }
        }).catch( (error)=> {
          // console.log(error.response);
          let errors = error.response.data;

          for (let prop in errors) {
            // console.log(errors[prop]);
            this.makeToast('danger', errors[prop], '¡Error!');
          }
      });
    },
  }
}
</script>
