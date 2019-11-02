<template>
    <div>
        <div class="container">
            <h1>Chuta</h1>
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('App mounted.')
        }
    }
</script>