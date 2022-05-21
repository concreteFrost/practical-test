<template>
    <form class="message-form">
        <div class="full-name-field">
            <label for="full-name"><span class="title">Full Name</span> </label>
            <input
                type="text"
                name="full-name"
                id="full-name"
                placeholder="Full name"
            />
        </div>
        <div class="email-field">
            <label for="email"><span class="title"> Email</span></label>
            <input type="email" name="email" id="email" placeholder="email" />
        </div>
        <div class="message-field">
        <textarea
            name="message"
            id="message"
            placeholder="Tell us what we can help you with!"
            
        ></textarea>
        

        
        </div>
        <button class="send-message-button">Send Message</button>
    </form>
</template>

<script>
export default {
    name: "Form",
};
</script>

<style scoped>
@import "./Form.css";
</style>
