<template>
  <div>
      <div class="card p-4">
          <div class="card-header">
              Profile
          </div>
          <div class="card-body" v-for="profile in profiles" :key="profile.id">
              <div class="mb-2">
                  <h4>NAMA : {{profile.nama}}</h4>
              </div>
              <div class="mb-2">
                  <h4>TTL : {{profile.tempat_tanggal_lahir}}</h4>
              </div>
              <div class="mb-2">
                  <h4>Tentang Saya : {{profile.tentang_saya}}</h4>
              </div>
          </div>
      </div>

  </div>
</template>

<script>
export default {
    data(){
        return {
            profiles : [],
        }
    },
    mounted() {
        this.getProfile()
    },
    methods : {
        async getProfile(){
            let response = await axios.get('/api/profiles')

            this.profiles = response.data.profiles
        },
    }
}
</script>

<style>

</style>
