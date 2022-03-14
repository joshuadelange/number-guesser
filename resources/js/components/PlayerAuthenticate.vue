<template>
    <div class="player--authenticate">

        <label for="player-name">What is your name?</label>
        <input id="player-name" type="text" v-model="name" />
        <button @click="authenticate">Play</button>
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: null
            }
        },
        methods: {
            authenticate(){
                this.$emit('player-authenticated', this.name);
            }
        }
    }
</script>

<style lang="scss">
</style>