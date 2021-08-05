<template>
  <div>

      <div class="card p-4">
          <div class="card-header">
              Contacts
          </div>
          <div class="card-body" v-for="contact in contacts" :key="contact.id">
              <div class="mb-2">
                  <h4>Hubungi : {{contact.number}}</h4>
              </div>
          </div>
      </div>

  </div>
</template>

<script>
export default {
    data(){
        return {
            contacts : null
        }
    },
    mounted() {
        this.getContact()
    },
    methods : {
        async getContact(){
            let response = await axios.get('/api/contacts')

            this.contacts = response.data.contacts
        }
    }
}
</script>

<style>

</style>
