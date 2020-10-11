<template>
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Manage Subject Teacher</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a-tabs default-active-key="1" @change="callback">
                            <a-tab-pane key="1">
                                <span slot="tab">
                                    <a-icon type="ordered-list" />
                                    List of Subject Teacher
                                </span>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a-dropdown-button>
                                            Sort by Status
                                            <a-menu slot="overlay" @click="handleMenuClick">
                                                <a-menu-item key="1">
                                                    <a-icon type="check" />Approved
                                                </a-menu-item>
                                                <a-menu-item key="3">
                                                    <a-icon type="close" />Disapproved
                                                </a-menu-item>
                                            </a-menu>
                                        </a-dropdown-button>
                                    </div>
                                    <div class="col-md-3 ml-auto">
                                        <a-input-search placeholder="Search user" style="width: 200px" @search="onSearch" />
                                        <br /><br />
                                    </div>
                                </div>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Specialization</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ryan Pilapil</td>
                                                <td>rpilapil@umindanao.edu.ph</td>
                                                <td>System Analysist and Design</td>
                                                <td>
                                                    <a-tag color="green"> Approved </a-tag>
                                                </td>
                                                <td>
                                                    <a-dropdown>
                                                        <a-menu slot="overlay">
                                                            <a-menu-item key="1" @click="showModal(user)">
                                                                <a-icon type="user" />Edit </a-menu-item>
                                                            <a-menu-item key="2" @click="deleteUser(user.id)">
                                                                <a-icon type="user-delete" />Delete</a-menu-item>
                                                        </a-menu>
                                                        <a-button type="dashed" style="margin-left: 8px">
                                                            <a-icon type="setting" /> Actions
                                                            <a-icon type="down" />
                                                        </a-button>
                                                    </a-dropdown>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a-tab-pane>
                            <a-tab-pane key="2">
                                <span slot="tab">
                                    <a-icon type="plus-square" />
                                    Create Account
                                </span>
                                <div class="col-md-12">
                                    <form @submit.prevent="createUser">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label>Name</label>
                                                <input v-model="form.name" type="text" name="name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Juan Dela Cruz">
                                                <has-error :form="form" field="name"></has-error>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Email</label>
                                                <input v-model="form.email" type="email" name="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="example@email.com">
                                                <has-error :form="form" field="email"></has-error>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label>User Role</label>
                                                <input v-model="form.type" type="text" name="text" class="form-control" value="1" disabled>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Specialization</label>
                                                <a-select mode="multiple" style="width: 100%" placeholder="Please select" @change="handleChange">
                                                    <a-select-option v-for="item in items" :key="item.sp">
                                                        {{ item.sp }}
                                                    </a-select-option>
                                                </a-select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label>Password</label>
                                                <input v-model="form.password" type="text" name="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                                <has-error :form="form" field="password"></has-error>
                                            </div>
                                        </div>
                                        <button :disabled="form.busy" type="submit" class="btn btn-primary">Create</button>
                                    </form>
                                </div>
                            </a-tab-pane>
                        </a-tabs>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Form from 'vform';
const key = 'updatable';
export default {
    data() {
        return {
            users: {},
            items: [
                { sp: 'System Analysis and Design' },
                { sp: 'Data Science' },
                { sp: 'Programming' }
            ],
            form: new Form({
                id: '',
                name: '',
                email: '',
                specialization: '',
                password: '',
                type: 'Subject Teacher',
                role: 2
            }),
            visibleTable: true,
            title: 'Research List',
            modalVisible: false,
            confirmLoading: false,
            spinning: true,
            spinningVisible: true
        };
    },
    methods: {
        handleChange(value) {
            console.log(`selected ${value}`);
        },
        callback(key) {
            console.log(key);
        },
    },
};

</script>
