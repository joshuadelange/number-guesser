<template>
    <div class="player--authenticate">

        <form @submit="authenticate">
            <label for="player-name">What is your name?</label>
            <input id="player-name" type="text" v-model="name" />
            <input type="submit" value="Play" />
        </form>
        
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