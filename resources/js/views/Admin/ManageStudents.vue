<template>
    <div class="page-content">
        <a-back-top />
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0" style="color: #52616b">Manage Student </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-3 grid-margin">
                <div class="card" style="background-color: #9ab3f5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline" style="color:white">
                            <h6 class="card-title mb-0" style="color:white">Students</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5" style="color:white">
                                <h3 class="mb-2" style="color:white"> {{ students }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 grid-margin">
                <div class="card" style="background-color: #e0f9b5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0" style="color:white">Approved</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2" style="color:white"> {{ students }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Pending</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2"> {{ students }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 grid-margin stretch-card">
                <div class="card" style="background-color: #f67280">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Disapproved</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2"> {{ students }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a-tabs default-active-key="1">
                            <a-tab-pane key="1">
                                <span slot="tab">
                                    <a-icon type="ordered-list" />
                                    List of Students
                                </span>
                                <div class="table-responsive pt-3">
                                    <a-table :columns="columns" :data-source="users" @change="handleChange" :pagination="{ pageSize: 10}" :scroll="{ x:700, y: 500 }" :loading="loading">
                                        <div slot="filterDropdown" slot-scope="{ setSelectedKeys, selectedKeys, confirm, clearFilters, column }" style="padding: 5px">
                                            <a-input v-ant-ref="c => (searchInput = c)" :placeholder="`Search ${column.dataIndex}`" :value="selectedKeys[0]" style="width: 188px; margin-bottom: 8px; display: block;" @change="e => setSelectedKeys(e.target.value ? [e.target.value] : [])" @pressEnter="() => handleSearch(selectedKeys, confirm, column.dataIndex)" />
                                            <a-button type="primary" icon="search" size="small" style="width: 90px; margin-right: 8px" @click="() => handleSearch(selectedKeys, confirm, column.dataIndex)">
                                                Search
                                            </a-button>
                                            <a-button size="small" style="width: 90px" @click="clearFilters">
                                                Reset
                                            </a-button>
                                        </div>
                                        <a-icon slot="filterIcon" slot-scope="filtered" type="search" :style="{ color: filtered ? '#108ee9' : undefined }" />
                                        <a-tag slot="status" slot-scope="text, record" :color="record.status === 'Approved' ? 'green' : record.status === 'Pending' ? 'geekblue' : 'volcano'">
                                            {{ record.status | capitalize }}
                                        </a-tag>
                                        <span slot="created_at" slot-scope="text, record">
                                            {{ record.created_at | myDate }}
                                        </span>
                                        <a slot="action" slot-scope="text, record">
                                            <a-dropdown>
                                                <a-menu slot="overlay">
                                                    <a-menu-item key="1" @click="statusApprove(record.id)" :disabled="record.status === 'Approved'">
                                                        <a-icon type="check" />Approve
                                                    </a-menu-item>
                                                    <a-menu-item key="2" @click="disapproveStudent(record.id)" :disabled="record.status === 'Pending' || record.status === 'Disapproved'">
                                                        <a-icon type="close" />Disapprove
                                                    </a-menu-item>
                                                    <a-menu-item key="3" @click="showModal(record)">
                                                        <a-icon type="user" />Edit </a-menu-item>
                                                    <a-menu-item key="4" @click="showDeleteConfirm(record)">
                                                        <a-icon type="user-delete" />Delete</a-menu-item>
                                                </a-menu>
                                                <a-button type="dashed" style="margin-left: 8px">
                                                    <a-icon type="setting" /> More Actions
                                                    <a-icon type="down" />
                                                </a-button>
                                            </a-dropdown>
                                        </a>
                                    </a-table>
                                    <!-- <div class="d-flex justify-content-center">
                                        <a-spin :spinning="spinning" :visible="spinningVisible">
                                            <a-icon slot="indicator" type="loading" style="font-size: 24px" spin />
                                        </a-spin>
                                    </div> -->
                                </div>
                            </a-tab-pane>
                            <a-tab-pane key="2">
                                <span slot="tab">
                                    <a-icon type="plus-square" />
                                    Create New Account
                                </span>
                                <div class="col-md-6">
                                    <a-divider orientation="left" dashed="true">
                                        Student Information
                                    </a-divider>
                                    <form @submit.prevent="createUser">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input v-model="form.name" type="text" name="name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Juan Dela Cruz">
                                            <has-error :form="form" field="name"></has-error>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input v-model="form.email" type="email" name="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="example@email.com">
                                            <has-error :form="form" field="email"></has-error>
                                        </div>
                                        <div class="form-group">
                                            <label>User Role</label>
                                            <input v-model="form.type" type="text" name="text" class="form-control" value="2" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input v-model="form.password" type="text" name="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                            <has-error :form="form" field="password"></has-error>
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
        <a-modal title="Edit User" :visible="modalVisible" :confirm-loading="confirmLoading" @ok="handleOk" @cancel="handleCancel">
            <form @submit.prevent="createUser">
                <div class="form-group">
                    <label>Name</label>
                    <input v-model="form.name" type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
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
            </form>
        </a-modal>
    </div>
</template>
<script>
import Form from 'vform';
const key = 'updatable';
export default {
    data() {
        return {
            filteredInfo: null,
            sortedInfo: null,
            searchText: '',
            searchInput: null,
            searchedColumn: '',
            users: [],
            students: '',
            form: new Form({
                id: '',
                name: '',
                email: '',
                password: '',
                type: '2',
                role: 2
            }),
            loading: false,
            visibleTable: true,
            title: 'Research List',
            modalVisible: false,
            confirmLoading: false,
            spinning: true,
            spinningVisible: true
        }

    },
    computed: {
        columns() {
            let { sortedInfo, filteredInfo } = this;
            sortedInfo = sortedInfo || {};
            filteredInfo = filteredInfo || {};
            const columns = [{
                    title: 'Name',
                    dataIndex: 'name',
                    scopedSlots: {
                        filterIcon: 'filterIcon',
                        filterDropdown: 'filterDropdown',

                    },
                    onFilter: (value, record) =>
                        record.name
                        .toString()
                        .toLowerCase()
                        .includes(value.toLowerCase()),
                    onFilterDropdownVisibleChange: visible => {
                        if (visible) {
                            setTimeout(() => {
                                this.searchInput.focus();
                            }, 0);
                        }
                    },
                    fixed: 'left',
                },
                {
                    title: 'Email',
                    dataIndex: 'email',
                },
                {
                    title: 'Group',
                    dataIndex: 'group',
                },
                {
                    title: 'Status',
                    dataIndex: 'status',
                    width: 120,
                    scopedSlots: {
                        customRender: 'status'
                    },
                    filters: [
                        { text: 'Pending', value: 'Pending' },
                        { text: 'Approved', value: 'Approved' },
                        { text: 'Disapproved', value: 'Disapproved' },
                    ],
                    filteredValue: filteredInfo.status || null,
                    onFilter: (value, record) => record.status.includes(value),
                    sorter: (a, b) => a.status.length - b.status.length,
                    sortOrder: sortedInfo.columnKey === 'status' && sortedInfo.order,

                },
                {
                    title: 'Date Created',
                    dataIndex: 'created_at',
                    width: 120,
                    scopedSlots: {
                        customRender: 'created_at',
                    },
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
        },

    },
    methods: {
        handleSearch(selectedKeys, confirm, dataIndex) {
            confirm();
            this.searchText = selectedKeys[0];
            this.searchedColumn = dataIndex;
        },
        clearFilters() {
            this.filteredInfo = null;
            this.sortedInfo = null;
        },
        handleReset(clearFilters) {
            clearFilters();
            this.searchText = '';
        },
        handleChange(pagination, filters, sorter) {

            this.filteredInfo = filters;
            this.sortedInfo = sorter;
        },
        changeSpinning() {
            this.spinning = !this.spinning;
        },
        showModal(record) {
            this.modalVisible = true;
            this.form.reset;
            this.form.fill(record);
        },
        handleOk(e) {
            this.confirmLoading = true;
            this.form.put('/api/user/' + this.form.id).then(() => {
                this.confirmLoading = false;
                this.modalVisible = false;
                this.confirmLoading = false;
                this.loadUsers();
                this.clear();
                this.$message.success('User updated successfully', 2);
            }).catch(() => {

            });
        },
        handleCancel(e) {
            this.modalVisible = false;
            this.clear();
        },
        loadUsers() {
            this.loading = true;
            axios.get('/api/students').then(({ data }) => {
                this.users = data
                this.loading = false;
                this.spinning = false
                this.spinningVisible = false
            });
        },
        countStudent() {
            axios.get('/api/countStudent').then(({ data }) => {
                this.students = data.users;
            })
        },
        showDeleteConfirm(record) {
            this.$confirm({
                title: 'Are you sure delete this student account?',
                content: 'Student Name: ' + record.name,
                okText: 'Yes',
                okType: 'danger',
                onOk() {
                    axios.delete('/api/user/' + record.id).then(() => {
                        this.$message.$success('User has been delete successfully', 2);
                        this.$loadUsers();
                    })
                },
                onCancel() {

                },
            });
        },
        disapproveStudent(id) {
            axios.patch('/api/disapproveStudent/' + id).then(() => {
                this.$message.success('User has been disapproved.', 2);
                this.loadUsers();
            }).catch(() => {
                this.$message.success('Something was wrong. Try again.');
            });
        },
        statusApprove(id) {
            axios.patch('/api/approveStudent/' + id).then(() => {
                this.$message.success('User has been approved.', 2);
                this.loadUsers();
            }).catch(() => {
                this.$message.success('Something was wrong. Try again.');
            });
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

                if (result.isConfirmed) {
                    this.form.delete('/api/user/' + id).then(() => {
                        this.$message.success('User has been deleted successfully.', 2);
                        this.loadUsers();
                    }).catch(() => {
                        this.$message.error({ content: 'Something wrong happened.', key, duration: 2 });
                    });
                }
            });
        },
        createUser() {
            if (this.form.name === '' || this.form.email === '' || this.form.password === '') {
                this.$message.warning('Please fill up the required fields.', 2);
            } else {
                this.form.post('/api/user').then(() => {
                    this.$message.success('User created successfully', 2);
                }).catch(() => {
                    this.$message.error('Something wrong happened.', 2);
                });
            }
            this.clear()
            this.loadUsers()
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
    mounted: function() {
        this.$nextTick(function() {
            this.loadUsers();
            this.countStudent();
            console.log('ASDA');
        })
    }
};

</script>
