<template>
    
    <div>
        <div class="container">
            <router-link to="/">Home</router-link>
            <router-link to="/admin">Halaman Admin</router-link>
        </div>
        <div class="container mt-4">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
