<template>
    <div class="player--authenticate">

        <form @submit.prevent="authenticate">
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
                if(!this.name) return;
                this.$emit('player-authenticated', this.name);
            }
        }
    }
</script>

<style lang="scss" scoped>
    input {
        width: 100%;
    }
</style>