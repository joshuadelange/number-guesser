<template>
    <div class="game">

        <p>Hi {{player_name}}!</p>
        <h2> Make a guess:</h2>

        <div class="guesses">

            <button
                v-for="(n, i) in max_number"
                @click="guess(i + 1)"
                :disabled="(i+1) > hint_max || (i+1) < hint_min"
            >{{i + 1}}</button>

        </div>

        <p v-if="message">
            {{message | titleize}}!
            <span v-if="message == 'correct'">🎉🎈</span>
        </p>

    </div>
</template>

<script>

    import API from '../classes/api';

    export default {
        props: ['player_name', 'game_id'],
        data() {
            return {
                max_number: 100,
                hint_min: 0,
                hint_max: 100,
                message: null
            }
        },
        filters: {
            titleize(value){
                return value.replace(/(?:^|\s|-)\S/g, x => x.toUpperCase());
            }
        },
        methods: {
            set_hints(guessed_number){

                if(this.message == 'lower' || this.message == 'correct') this.hint_max = guessed_number
                if(this.message == 'higher' || this.message == 'correct') this.hint_min = guessed_number

            },
            guess(guessed_number) {
                new API().guess({
                    game_id: this.game_id,
                    guess: guessed_number
                }).then((response) => {
                    this.message = response.data.message
                    this.set_hints(guessed_number);
                });
            }
        }

    }

</script>

<style lang="scss">
    .guesses button {
        margin: -1px;
        padding: 5px;
        width: 31px;
    }
</style>