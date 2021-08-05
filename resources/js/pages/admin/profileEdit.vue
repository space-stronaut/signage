<template>
  <div>
      <div class="card p-4" style="width : 30rem">
          <form @submit.prevent="update">
              <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="email" id="" v-model="forms.nama">
              </div>
              <div class="form-group">
                  <label for="">Tentang Saya</label>
                  <textarea name="" id="" cols="30" v-model="forms.tentang_saya" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                  <label for="">TTL</label>
                  <input type="date" name="email" class="form-control" id="" v-model="forms.tempat_tanggal_lahir">
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
                nama : null,
                tentang_saya : null,
                tempat_tanggal_lahir : null
            }
        }
    },
    mounted(){
        this.getData()
    },
    methods : {
        async getData(){
            let response = await axios.get('/api/profiles/1')

            this.forms.nama = response.data.profiles.nama
            this.forms.tentang_saya = response.data.profiles.tentang_saya
            this.forms.tempat_tanggal_lahir = response.data.profiles.tempat_tanggal_lahir
        },
        async update(){
            let response = await axios.post('/api/profiles/update/1', this.forms)

            if(response.status === 200){
                this.$router.push('/admin')
            }
        }
    }
}
</script>

<style>

</style>