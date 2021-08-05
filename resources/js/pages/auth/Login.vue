<template>
  <div>
      <div class="card p-4" style="width : 30rem">
          <form @submit.prevent="loggedIn">
              <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email" id="" v-model="forms.email">
              </div>
              <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="email" class="form-control" id="" v-model="forms.password">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Login</button>
              </div>
          </form>
      </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
            forms : {
                email : null,
                password : null
            }
        }
    },
    methods : {
        async loggedIn(){
            let response = await axios.post('/api/login', this.forms)

            if(response.data.status === true){
                this.$router.push('/about')
            }
        }
    }
}
</script>

<style>

</style>