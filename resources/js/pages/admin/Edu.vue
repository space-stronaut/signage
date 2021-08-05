<template>
  <div>

      <div class="card p-4">
          <div class="card-header">
              Pendidikan
          </div>
          <div class="card-body" v-for="edu in educations" :key="edu.id">
              <div class="mb-2">
                  <h4>Sekolah : {{edu.sekolah}}</h4>
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
            educations : null,
        }
    },
    mounted() {
        this.getEducation()
    },
    methods : {
        async getEducation(){
            let response = await axios.get('/api/educations')

            this.educations = response.data.educations
        },
    }
}
</script>

<style>

</style>
