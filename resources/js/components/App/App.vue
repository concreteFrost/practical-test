<template>
    <div class="container">
        <div>
            <Navbar></Navbar>
            <Home></Home>
        </div>
    </div>
</template>

<script>
export default {
    components: {
        Navbar,
        Home,
    },
    name: "App",
    data() {
        return {};
    },
};

import Navbar from "../Navbar/Navbar.vue";
import Home from "../Home/Home.vue";
</script>

<style>
@import "./App.css";
</style>
