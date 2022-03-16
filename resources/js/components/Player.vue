<template>
    <div class="player">

        <PlayerAuthenticate @player-authenticated="authenticate_player($event)" v-if="player == null" />

        <Guess :game_id="game_id" v-if="player != null" :player_name="player" />
        
    </div>
</template>

<script>
    export default {
        props: ['game_id'],
        data() {
            return {
                player: 'test'
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

        margin: $gutter;
        padding: $gutter;

        background: white;

        @include border-soft;

        border-radius: $gutter--half;

    }

</style>