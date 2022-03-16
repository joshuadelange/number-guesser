<template>
    <div class="game">

        <button @click="new_game">New Game</button>

        <div v-if="game_id" class="players">
            <Player v-for="index in number_of_players" :key="index" :game_id="game_id" />
        </div>

    </div>
</template>

<script>
    import Player from './Player.vue'
    import API from '../classes/api'

    export default {
        data() {
            return {
                game_id: null,
                number_of_players: 3
            }
        },
        methods: {
            new_game(){
                this.game_id = null;
                new API().new_game().then((response) => {
                    this.game_id = response.data.game_id
                });
            }
        }
    }
</script>

<style lang="scss" scoped>

    .players {
        display: flex;
    }

    button {
        display: block;
        width: 200px;
        margin: $gutter auto;
    }

</style>