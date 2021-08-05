<template>
  <div>
      <div class="card p-4" style="width : 30rem">
          <form @submit.prevent="update">
              <div class="form-group">
                  <label for="">nama_usaha</label>
                  <input type="text" class="form-control" name="email" id="" v-model="forms.nama_usaha">
              </div>
              <div class="form-group">
                  <label for="">Tahun masuk</label>
                  <input type="date" name="" v-model="forms.tahun_masuk" id="">
              </div>
              <div class="form-group">
                  <label for="">Tahun Keluar</label>
                  <input type="date" name="email" class="form-control" id="" v-model="forms.tahun_keluar">
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
                nama_usaha : null,
                tahun_masuk : null,
                tahun_keluar : null
            }
        }
    },
    mounted(){
        this.getData()
    },
    methods : {
        async getData(){
            let response = await axios.get('/api/works/1')

            this.forms.nama_usaha = response.data.works.nama_usaha
            this.forms.tahun_masuk = response.data.works.tahun_masuk
            this.forms.tahun_keluar = response.data.works.tahun_keluar
        },
        async update(){
            let response = await axios.post('/api/works/update/1', this.forms)

            if(response.status === 200){
                this.$router.push('/admin')
            }
        }
    }
}
</script>

<style>

</style>