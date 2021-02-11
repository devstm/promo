<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="name in names " v-text="name"></li>
                        </ul>

                        <div class="input-group mb-3">
                            <input v-model="newName" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button @click="addName" class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                        </div>
                        <h1 :class="{'disable':haidden}" @click="hideMy">saleh</h1>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <h2>All Tasks</h2>
                        <ul>
                            <li v-for="task in tasks " v-text="task.description"></li>
                        </ul>
                        <h2>Incomplete Tasks </h2>
                        <ul>
                            <li v-for="task in incomplete " v-text="task.description"></li>
                        </ul>
                        <h2>complete Tasks </h2>
                        <ul>
                            <li v-for="task in complete " v-text="task.description"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                newName:'',
                names:['salooh', 'sophi','kawther'],
                haidden:false,
                tasks:[
                    {description:'go back to home' , completed:true},
                    {description:'go  to school' , completed:false},
                    {description:'go back to garden' , completed:true},
                    {description:'go back to masjed' , completed:false},
                    {description:'go back to mestash' , completed:true},
                    {description:'go back to hot dogs' , completed:false},
                    {description:'go back to darna' , completed:true}
                ]
            }
        },
        computed:{
            incomplete(){
                return this.tasks.filter(task=>!task.completed);
            },
            complete(){
                return this.tasks.filter(task=>task.completed);
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addName()
            {
                this.names.push(this.newName);
                this.newName = '';
            },
            hideMy(){
                this.haidden=true;
            }
        }
    }
</script>
<style scoped>
    .disable {
        display: none;
    }
</style>
