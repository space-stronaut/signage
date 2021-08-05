<template>
  <div>

      <div class="card p-4">
          <div class="card-header">
              Riwayat Pekerjaan
          </div>
          <div class="card-body" v-for="edu in works" :key="edu.id">
              <div class="mb-2">
                  <h4>Usaha/Pekerjaan : {{edu.nama_usaha}}</h4>
              </div>
              <div class="mb-2">
                  <p>{{edu.tahun_masuk}} - {{edu.tahun_keluar}}</p>
              </div>
          </div>
          
      </div>


  </div>
</template>

<script>
export default {
    data(){
        return {
            works : null,
        }
    },
    mounted() {
        this.getWorks()
    },
    methods : {
        async getWorks(){
            let response = await axios.get('/api/works')

            this.works = response.data.works
        }
    }
}
</script>

<style>

</style>
