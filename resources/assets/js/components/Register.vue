<template>
  <form  @submit.prevent="register">

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" v-model="name"/>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" v-model="email"/>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" v-model="password"/>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>

  </form>
</template>

<script type="text/javascript">
    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    password: ''
                },
                error: {},
                isProcessing: false
            }
        },
        methods: {
            register() {
                this.isProcessing = true
                this.error = {}
                axios.post('/register', {
                  name: this.name,
                  email: this.email,
                  password: this.password
                })
                .then((response) => {
                  if(response.data.registered) {
                            console.log('Register Success!');
                            this.$router.push('/home');
                        }
                        this.isProcessing = false;
                        this.$evt.$emit('logged_in');
                })
                .catch((error) => {
                  console.log('Register Failed!');
                  // show an error message
                });
            }
        }
    }
</script>
