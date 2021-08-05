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
            <div class="card-footer">
                <router-link class="btn btn-success" to="/profileEdit/1">Edit</router-link>
                <router-link class="btn btn-primary" to="/profile">Lihat</router-link>
            </div>
      </div>

      <div class="card p-4">
          <div class="card-header">
              Contacts
          </div>
          <div class="card-body" v-for="contact in contacts" :key="contact.id">
              <div class="mb-2">
                  <h4>Hubungi : {{contact.number}}</h4>
              </div>
          </div>
          <div class="card-footer">
                <router-link class="btn btn-success" to="/contactEdit/1">Edit</router-link>
                <router-link class="btn btn-primary" to="/contact">Lihat</router-link>
            </div>
      </div>

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
          <div class="card-footer">
                <router-link class="btn btn-success" to="/eduEdit/1">Edit</router-link>
                <router-link class="btn btn-primary" to="/edu">Lihat</router-link>
            </div>

      </div>

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
          <div class="card-footer">
                <router-link class="btn btn-success" to="/workEdit/1">Edit</router-link>
                <router-link class="btn btn-primary" to="/work">Lihat</router-link>
            </div>

      </div>


  </div>
</template>

<script>
export default {
    data(){
        return {
            profiles : [],
            works : null,
            educations : null,
            contacts : null
        }
    },
    mounted() {
        this.getProfile()
        this.getContact()
        this.getWorks()
        this.getEducation()
    },
    methods : {
        async getProfile(){
            let response = await axios.get('/api/profiles')

            this.profiles = response.data.profiles
        },
        async getWorks(){
            let response = await axios.get('/api/works')

            this.works = response.data.works
        },
        async getContact(){
            let response = await axios.get('/api/contacts')

            this.contacts = response.data.contacts
        },
        async getEducation(){
            let response = await axios.get('/api/educations')

            this.educations = response.data.educations
        },
    }
}
</script>

<style>

</style>
