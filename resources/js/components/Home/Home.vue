<template>
    <div>
        <div class="home-top">
            <Subscribe></Subscribe>
            <Buy></Buy>
        </div>
        <div class="home-middle">
            <p>Ask Question</p>
            <h2>Let us hear from you directly!</h2>
        </div>
        <div class="home-bottom">
            <Contact></Contact>
            <Form></Form>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    components: {
        Subscribe,
        Buy,
        Contact,
        Form,
    },
};

import Subscribe from "./Subscribe/Subscribe.vue";
import Buy from "./Buy/Buy.vue";
import Contact from "./Contact/Contact.vue";
import Form from "./Form/Form.vue";
</script>

<style scoped>
@import "./Home.css";
</style>
