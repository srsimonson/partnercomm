<template>
    <PartnercommPoll/>
</template>

<script>
import PartnercommPoll from "./views/PartnercommPoll.vue";

export default {
    name: "App",
    components: {
        PartnercommPoll,
    },
};
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
    width: 700px;
    margin: auto;
}
</style>
