<template>
    <div class="game">

        <button>New Game</button>

        <Player v-for="index in number_of_players" :key="index" />

    </div>
</template>

<script>
    import Player from './Player.vue'

    export default {
        mounted() {
        },
        data() {
            return {
                game_id: null,
                number_of_players: 3
            }
        }

    }
</script>
