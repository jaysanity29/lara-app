<template>
    <div class="page-content">
        <a-back-top />
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0" style="color: #52616b">Manage Subject Teacher</h4>
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
                                <div class="table-responsive pt-3">
                                    <a-table :columns="columns ">
                                    </a-table>
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
    computed: {
        columns() {
            let { sortedInfo, filteredInfo } = this;
            sortedInfo = sortedInfo || {};
            filteredInfo = filteredInfo || {};
            const columns = [{
                    title: 'Group',
                    dataIndex: 'group',
                    width: 200,
                },
                {
                    title: 'Defense Type',
                    dataIndex: 'type',
                },
                {
                    title: 'Date & Time',
                    dataIndex: 'date',
                },
                {
                    title: 'Venue',
                    dataIndex: 'year',
                },
                {
                    title: 'Action',
                    key: 'action',
                    scopedSlots: {
                        customRender: 'action',
                    },
                },
            ];
            return columns;
        }
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
