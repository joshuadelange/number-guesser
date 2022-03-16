<template>
    <div class="player">

        <PlayerAuthenticate
            v-if="player == null" 
            @player-authenticated="authenticate_player($event)"
        />

        <Guess
            v-if="player != null && game_winner == null"
            :game_id="game_id"
            :player_name="player"
            @game-won="(player_name) => this.$emit('game-won', player_name)" 
        />

        <p v-if="game_winner != null && game_winner != player">You lost! {{game_winner}} won the game.</p>
        <p v-if="game_winner != null && game_winner == player">You won! 🎉🎈</p>
        
    </div>
</template>

<script>
    export default {
        props: ['game_id', 'game_winner'],
        data() {
            return {
                player: null
            }
        },
        methods: {
            authenticate_player(name) {
                this.player = name;
            }
        }
    }
</script>

<style lang="scss">

    .player {

        flex: 1 1 0;
        min-width: 220px;
        @media(max-width: 825px) {
            flex-grow: 2;
        }

        margin: $gutter;
        padding: $gutter;

        background: white;

        @include border-soft;

        border-radius: $gutter--half;

    }

</style>