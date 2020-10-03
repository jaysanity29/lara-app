<template>
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Manage Student</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ title }}</div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                            </div>
                        </div>
                        <hr>
                        <a-button v-if="visibleTable" icon="box" type="dashed" @click="show">
                            Create New
                        </a-button>
                        <a-button v-if="!visibleTable" type="danger" @click="hide">
                            Cancel
                        </a-button>
                        <transition name="slide-fade">
                            <div v-if="!visibleTable" class="table-responsive pt-3">
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
                        </transition>
                        <transition name="slide-fade">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                User Type
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Date Created
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="user in users" :key="user.id">
                                            <td>{{ user.name }}</td>
                                            <td>{{ user.email}} </td>
                                            <td>{{ user.type }}</td>
                                            <td>
                                                <a-tag v-if="user.status === 'pending'" color="geekblue">{{ user.status | capitalize }}</a-tag>
                                                <a-tag v-if="user.status === 'approve'" color="green">{{ user.status | capitalize }}</a-tag>
                                            </td>
                                            <td>{{ user.created_at | myDate }}</td>
                                            <td>
                                                <a-dropdown>
                                                    <a-menu slot="overlay">
                                                        <a-menu-item key="1" @click="showModal(user)">
                                                            <a-icon type="user" />Edit </a-menu-item>
                                                        <a-menu-item key="2" @click="deleteUser(user.id)">
                                                            <a-icon type="user-delete" />Delete</a-menu-item>
                                                    </a-menu>
                                                    <a-button style="margin-left: 8px"> Actions
                                                        <a-icon type="down" />
                                                    </a-button>
                                                </a-dropdown>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </transition>
                        <a-modal title="Edit User" :visible="modalVisible" :confirm-loading="confirmLoading" @ok="handleOk" @cancel="handleCancel">
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
                                </form>
                        </a-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
import Form from 'vform';
export default {
    data() {
        return {
            users: {},
            form: new Form({
                name: '',
                email: '',
                password: '',
                type: 'Student',
                role: 2
            }),
            visibleTable: true,
            title: 'Research List',
            modalVisible: false,
            confirmLoading : false
        }

    },

    methods: {
        showModal(user) {
            this.modalVisible = true;
            this.form.reset;
            this.form.fill(user);
        },
        handleOk(e) {
            this.confirmLoading = true;
            setTimeout(() => {
                this.modalVisible = false;
                this.confirmLoading = false;
            }, 2000);
        },
        handleCancel(e) {
          console.log('Clicked cancel button');
          this.modalVisible = false;
        },
        loadUsers() {
            axios.get('/api/user').then(({ data }) => (this.users = data.data));
        },
        deleteUser(id) {
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonCOlor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                this.form.delete('/api/user/' + id).then(() => {
                    if (result.value) {
                        swal.fire({
                            title: 'Deleted',
                            text: 'User has been deleted.',
                            type: 'success'
                        });
                        this.loadUsers();
                    }
                }).catch(() => {
                    swal.fire({
                        title: 'Failed',
                        text: 'There was something wrong.',
                        type: 'warning'
                    });
                });

            });
        },
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
        },
        show() {
            this.visibleTable = false;
            this.title = 'Add New';
        },
        hide() {
            this.visibleTable = true;
            this.title = 'Research List';
        }
    },
    created() {
        this.loadUsers();
    },
}

</script>
