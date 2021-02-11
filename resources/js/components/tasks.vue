<template>
    <div>
    <task v-for="task in tasks" v-bind:key="task.id">{{task.task}}</task>
    </div>
</template>

<script>
    export default {
        name: "tasks",
        data(){
            return {
                tasks:[
                    {id:1 , task:'go back to home' , completed:true},
                    {id:2 , task:'go  to school' , completed:false},
                    {id:3 , task:'go back to garden' , completed:true},
                    {id:4 , task:'go back to masjed' , completed:false},
                    {id:5 , task:'go back to mestash' , completed:true},
                    {id:6 , task:'go back to hot dogs' , completed:false},
                    {id:7 , task:'go back to darna' , completed:true}
                ]
            }
        }
    }
</script>

<style scoped>

</style>
