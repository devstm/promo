<template>
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button @click="close" class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <slot></slot>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success">Save changes</button>
<!--                <button @click="close" class="modal-close is-large" aria-label="close"></button>-->

            </footer>
        </div>
    </div>

</template>

<script>
    export default {
        name: "modal",
        methods:{
            close(){
                this.$emit('close')
            }
        }
    }

</script>

<style scoped>

</style>
