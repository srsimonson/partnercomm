<template>
    <div class="partnercomm">
        <img class="logo" :src="require('@/assets/PComm-Logo-Blue.svg')" alt="Logo" />
        <div class="headers">
            <h1>{{ header }}</h1>
            <h2>{{ subheader }}</h2>
        </div>
        <ul>
            <li v-for="(response, index) in responses" :key="index">
                <QuestionCard :response="response" />
            </li>
        </ul>
    </div>
</template>

<script>
import { ref, onBeforeMount } from "vue";
import QuestionCard from "../components/QuestionCard.vue";

export default {
    components: {
        QuestionCard,
    },
    setup() {
        const header = ref('');
        const subheader = ref('');
        const responses = ref([]);

        onBeforeMount(() => {
            fetchPosts();
        });

        async function fetchPosts() {
            try {
                const response = await fetch(
                    "http://localhost:8000/wp-json/partnercomm/polls"
                );

                const data = await response.json();
                const poll = data[0];

                header.value = poll.header;
                subheader.value = poll.subheader;
                responses.value = poll.responses;
            } catch (error) {
                console.error("Error fetching posts:", error);
            }
        }

        return {
            header,
            subheader,
            responses,
        };
    },
};
</script>

<style scoped>
.logo {
    width: 100%;
}

.partnercomm {
    border: 5px solid #79bbff;
    margin: 30px;
    padding: 30px;
    box-shadow: -8px 8px 0px 0px rgba(0, 0, 0, 1);
}
</style>
