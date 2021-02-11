<template>
    <article class="message" v-show="isVisibul">
        <div class="message-header">
            <p>{{title}}</p>
            <button class="delete" @click="isVisibul=false" aria-label="delete"></button>
        </div>
        <div class="message-body">
        {{body}}
        </div>
    </article>
</template>

<script>
    export default {
        name: "message",
        props:['title','body'],
        data(){
            return{
                isVisibul:true
            }
        }
    }

</script>

<style scoped>

</style>
