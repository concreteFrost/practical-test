<template>
<div class="r">
    <p>
       Try me again!
    </p>
    <button v-on:click="hello">Click</button>
</div>
</template>

<script>
export default{
    name:'App',
    methods:{
        hello(){
            console.log('done')
        }
    }
}
</script>

<style>
    .r{
        background-color: red;
    }
</style>