<template>
<div class="nav">
    <ul>
        <li><router-link to="/">Home</router-link></li>
        <li><router-link to="/">Price</router-link></li>
        <li><router-link to="/">Add</router-link></li>
        <li><router-link to="/">Dashboard</router-link></li>
        <li><button class="sign-in-btn">Sign in</button></li>
    </ul>
    </div>
</template>

<script>
export default {
    name: "Navbar",
};
</script>

<style>
@import './Navbar.css';
</style>


