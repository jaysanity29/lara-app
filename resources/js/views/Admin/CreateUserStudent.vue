<template>
    <div class="container-fluid">
        <div class="card shadow mb-3" style="width: 30rem">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create New User</h6>
            </div>
            <div class="card-body">
                <form @submit.prevent="createUser">
                    <div class="form-group">
                        <label>Name</label>
                        <input v-model="form.name" type="text" name="name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input v-model="form.email" type="email" name="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <input v-model="form.type" type="text" name="text" class="form-control" value="1" disabled>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input v-model="form.password" type="text" name="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error :form="form" field="password"></has-error>
                    </div>
                    <button :disabled="form.busy" type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import Form from 'vform';
export default {
    data() {
        return {
            form: new Form({
                name: '',
                email: '',
                password: '',
                type: 'Student',
                role: 2
            })
        }
    },
    methods: {
        createUser() {
            this.form.post('/api/user')
            toast.fire({
                icon: 'success',
                title: 'User created successfully'
            })
            this.clear()
        },
        clear() {
            this.form.name = ''
            this.form.email = ''
            this.form.password = ''
        }
    },
    mounted() {

    }
}

</script>
