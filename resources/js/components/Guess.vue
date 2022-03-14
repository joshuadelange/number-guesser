<template>
    <div class="game">

        <h2>Hi {{player_name}}! Make a guess:</h2>

        <div class="guesses">

            <button
                v-for="(n, i) in max_number"
                @click="guess(i + 1)"
                :disabled="(i+1) > hint_max || (i+1) < hint_min"
            >{{i + 1}}</button>

        </div>

    </div>
</template>

<script>
    export default {
        props: ['player_name'],
        data() {
            return {
                max_number: 100,
                hint_min: 0,
                hint_max: 100
            }
        },
        methods: {
            guess() {
                
            }
        }

    }
</script>

<style lang="scss">
    .players {
        display: flex;
    }
</style>