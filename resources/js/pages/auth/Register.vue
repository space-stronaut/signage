<template>
  <div>
      <div class="card p-4" style="width : 30rem">
          <form @submit.prevent="registered">
              <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="email" id="" v-model="forms.name">
              </div>
              <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email" id="" v-model="forms.email">
              </div>
              <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="email" class="form-control" id="" v-model="forms.password">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Daftar</button>
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
                name : null,
                email : null,
                password : null
            }
        }
    },
    methods : {
        async registered(){
            let response = await axios.post('/api/register', this.forms)

            if(response.status === 200){
                this.$router.push('/about')
            }
        }
    }
}
</script>

<style>

</style>