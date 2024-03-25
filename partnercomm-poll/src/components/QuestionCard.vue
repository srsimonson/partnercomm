<template>
    <div class="response-card counter-container">
        <p>{{ response }}</p>
        <button @click="voteCounter">vote</button>
        <!-- <p>Votes: {{ counter }}</p> -->
        <span class="counter" :class="{ animate: animateCounter }">{{
            counter
        }}</span>
    </div>
</template>

<script>
import { ref } from "vue";

export default {
    props: {
        response: String,
    },
    setup() {
        const counter = ref(0);
        const animateCounter = ref(false);

        function voteCounter() {
            counter.value++;
            animateCounter.value = true;
            setTimeout(() => (animateCounter.value = false), 400); // Duration of the animation
        }

        return {
            counter,
            voteCounter,
            animateCounter,
        };
    },
};
</script>

<style>
ul {
    list-style-type: none;
}
.counter-container {
    position: relative;
}

.counter {
    transition: transform 0.7s, opacity 0.7s;
    position: relative;
    z-index: 1;
}

.animate {
    font-size: 2em;
    font-weight: bold;
    color: #e2ff19;
    opacity: 0;
    transform: translateY(-20px);
    transition: transform 0.7s, opacity 0.7s;
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000,
        1px 1px 0 #000;
}

.response-card {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 10px;
    align-items: center;
    justify-items: center;
    border: 1px solid #eb0d8a;
    margin: 8px 0;
}
</style>
