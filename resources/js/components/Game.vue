<template>
    <div class="game">

        <button>New Game</button>

        <div class="players">
            <Player v-for="index in number_of_players" :key="index" />
        </div>

    </div>
</template>

<script>
    import Player from './Player.vue'

    export default {
        data() {
            return {
                game_id: null,
                number_of_players: 3
            }
        }

    }
</script>

<style lang="scss">
    .players {
        display: flex;
    }
</style>