<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                       <ul>
                           <li v-for="name in names" v-text="name"></li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'listItem',
        mounted() {
            console.log('Component mounted.')
        }
        ,data() {
            return {
                names : ['saleh', 'mhmed']
            }
        }
    }
</script>
