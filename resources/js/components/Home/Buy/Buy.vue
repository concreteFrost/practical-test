<template>
    <div class="buy">
        <form class="send-form">
            <label for="send" class="send">Send</label>
            <div class="usd">
                <input type="text" name="send" id="send" value="USD" readonly />
                <input
                    type="text"
                    id="usd"
                    name="usd"
                    
                     placeholder="0.0214 BTC"
                />
            </div>
            <label for="receive">Receive</label>
            <div class="btc">
                <input
                    type="text"
                    name="receive"
                    d="receive"
                   value="BTC"
                    readonly
                />
                <input type="text" id="btc" name="btc"  placeholder="0.0214 BTC"  />
            </div>
            <p>
                1 USD ~ 0.000088 BTC
                <span
                    >Expected rate <br />
                    No extra fees</span
                >
            </p>

            <button class="buy-button">Buy Now</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Buy",
};
</script>

<style scoped>
@import "./Buy.css";
</style>
