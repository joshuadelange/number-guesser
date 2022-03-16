<template>
    <div class="game">

        <button @click="new_game">New Game</button>

        <div v-if="game_id" class="players">
            <Player
                v-for="index in number_of_players"
                :key="index"
                :game_id="game_id"
                :game_winner="game_winner"
                @game-won="game_won"
            />
        </div>

    </div>
</template>

<script>
    import Player from './Player.vue'
    import API from '../classes/api'

    import confetti from 'canvas-confetti';


    export default {
        data() {
            return {
                game_id: null,
                number_of_players: 3,
                game_winner: null
            }
        },
        methods: {
            new_game(){
                this.game_id = null;
                this.game_winner = null;
                new API().new_game().then((response) => {
                    this.game_id = response.data.game_id
                });
            },
            game_won(player_name){
                this.game_winner = player_name;
                confetti();
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