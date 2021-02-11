<template>
    <label>
        <input type="text" placeholder="enter" @blur="onApplied">

    </label>
</template>

<script>
    export default {
        name: "coupon",
        methods:{
            onApplied(){
             this.$emit('applied');
            }
        }
    }
</script>

<style scoped>

</style>
