<template>
    <div class="message-form">
        <form @submit.prevent="sendMessage">
            <div class="full-name-field">
                <label for="full-name"
                    ><span class="title">Full Name</span>
                </label>
                <input
                    type="text"
                    v-model="form.name"
                    name="full-name"
                    id="full-name"
                    placeholder="Full name"
                    required
                />
            </div>
            <div class="email-field">
                <label for="email"><span class="title"> Email</span></label>
                <input
                    type="email"
                    v-model="form.email"
                    name="email"
                    id="email"
                    placeholder="email"
                    required
                />
            </div>
            <div class="message-field">
                <textarea
                    name="message"
                    id="message"
                    v-model="form.message"
                    placeholder="Tell us what we can help you with!"
                    required
                ></textarea>
            </div>

            <button class="send-message-button">Send Message</button>
        </form>
        <div v-if="show" class="sent">Email sent!</div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Form",
    data() {
        return {
            form: {
                name: "",
                email: "",
                message: "",
            },
            show: false,
        };
    },
    methods: {
        sendMessage() {
            axios
                .post("api/send-contact", {
                    name: this.form.name,
                    email: this.form.email,
                    message: this.form.message,
                })
                .then((res) => {})
                .catch((e) => console.log(e));
            this.resetInput();
            this.show = true;
            setTimeout(() => {
                this.show = false;
            }, 2000);
        },
        resetInput() {
            this.form.name = "";
            this.form.email = "";
            this.form.message = "";
        },
    },
};
</script>

<style scoped>
@import "./Form.css";
</style>
