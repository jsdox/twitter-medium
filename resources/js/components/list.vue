<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List</div>

                    <div class="card-body">
                            <ul class="list-group">
                            <li class="list-group-item" v-for="item in task" :key="item.id">
                                {{item.name}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('List component mounted.')
        },
        data() {
            return {
                task: {},
            }
        },
        created() { //or mounted
            axios.get('http://localhost/ucreate/twitter-medium/public/api/v1/users',
                {
                    headers: { 
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    } 
                }
            )
            .then((response) => this.task = response.data.data)
            .catch((error) => console.log(error));
        }
    }
</script>
