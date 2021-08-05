<template>
  <div>
      <div class="card p-4" style="width : 30rem">
          <form @submit.prevent="update">
              <div class="form-group">
                  <label for="">sekolah</label>
                  <input type="text" class="form-control" name="email" id="" v-model="forms.sekolah">
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
                sekolah : null,
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
            let response = await axios.get('/api/educations/1')

            this.forms.sekolah = response.data.educations.sekolah
            this.forms.tahun_masuk = response.data.educations.tahun_masuk
            this.forms.tahun_keluar = response.data.educations.tahun_keluar
        },
        async update(){
            let response = await axios.post('/api/educations/update/1', this.forms)

            if(response.status === 200){
                this.$router.push('/admin')
            }
        }
    }
}
</script>

<style>

</style>