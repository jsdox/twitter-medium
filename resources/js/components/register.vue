<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Signup</div>

                    <div class="card-body">
                        <p class="alert alert-sucess" v-if="sucess.length > 0">{{sucess}}</p>
                        
                        name: <input type="text" name="name" id="name" v-model="name"><br/>
                        Email: <input type="text" name="email" id="email" v-model="email"><br/>
                        Password: <input type="password" name="password" id="password" v-model="password"><br/>
                        <input type="submit" name="signup" value="Signup" @click="addRecord">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    axios.default.withCredentials = true;

    export default {
        mounted() {
            console.log('Register component mounted.')
        },
        data() {
            return {
                error: [],
                sucess: '',
                name: '',
                email: '',
                password: '',
            }
        },
        methods: {
            addRecord() {
                axios.get('http://localhost/ucreate/twitter-medium/public/api/airlock/csrf-cookie')
                    .then(response => {
                        const headers = {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                        };
                        const data = {
                            'name': this.name,
                            'email': this.email,
                            'password': this.password,
                        };
                        axios.post('http://localhost/ucreate/twitter-medium/public/api/v1/users', data, {
                            headers: headers
                        })
                        .then(data => {
                            if (data.status = 422) {
                                console.log( data.data);
                                this.error = data.data;
                            } else {
                                this.sucess = 'Record Added Sucessfully!!';
                                console.log(data.status)
                            }
                        })
                        .catch((error) => {
                            console.log(error)
                        })
                });
            }
        }
    }
</script>