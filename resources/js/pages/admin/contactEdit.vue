<template>
  <div>
      <div class="card p-4" style="width : 30rem">
          <form @submit.prevent="update">
              <div class="form-group">
                  <label for="">Nomor</label>
                  <input type="number" maxlength="12" class="form-control" name="email" id="" v-model="forms.number">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
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
                number : null,
            }
        }
    },
    mounted(){
        this.getData()
    },
    methods : {
        async getData(){
            let response = await axios.get('/api/contacts/1')

            this.forms.number = response.data.contacts.number
        },
        async update(){
            let response = await axios.post('/api/contacts/update/1', this.forms)

            if(response.status === 200){
                this.$router.push('/admin')
            }
        }
    }
}
</script>

<style>

</style>