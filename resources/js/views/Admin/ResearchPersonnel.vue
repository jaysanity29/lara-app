<template>
    <div class="page-content">
        <a-back-top />
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0" style="color: #52616b">Research Personnel</h4>
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
                                    List of RP
                                </span>
                                <div class="table-responsive pt-3">
                                    <a-table :columns="columns" :data-source="users" @change="handleChange" :pagination="{ pageSize: 10}" :scroll="{ x:750, y: 500 }">
                                        <div slot="filterDropdown" slot-scope="{ setSelectedKeys, selectedKeys, confirm, clearFilters, column }" style="padding: 8px">
                                            <a-input v-ant-ref="c => (searchInput = c)" :placeholder="`Search ${column.dataIndex}`" :value="selectedKeys[0]" style="width: 188px; margin-bottom: 8px; display: block;" @change="e => setSelectedKeys(e.target.value ? [e.target.value] : [])" @pressEnter="() => handleSearch(selectedKeys, confirm, column.dataIndex)" />
                                            <a-button type="primary" icon="search" size="small" style="width: 90px; margin-right: 8px" @click="() => handleSearch(selectedKeys, confirm, column.dataIndex)">
                                                Search
                                            </a-button>
                                            <a-button size="small" style="width: 90px" @click="() => handleReset(clearFilters)">
                                                Reset
                                            </a-button>
                                        </div>
                                        <a-tag slot="status" slot-scope="text, record" :color="record.status === 'Approved' ? 'green' : 'geekblue'">
                                            {{ record.status | capitalize }}
                                        </a-tag>
                                        <!--    <span slot="expertises">
                                            <a-tag v-for="exps in exp">
                                                {{ exp }}
                                            </a-tag>
                                        </span> -->
                                        <a-tag slot="expertises" slot-scope="text, record" :color="'#f50'">
                                            {{ record.expertises | capitalize }}
                                        </a-tag>
                                        <span slot="created_at" slot-scope="text, record">
                                            {{ record.created_at | myDate }}
                                        </span>
                                        <a slot="action" slot-scope="text, record">
                                            <a-dropdown>
                                                <a-menu slot="overlay">
                                                    <a-menu-item key="1">
                                                        <a-icon type="check" />Approve
                                                    </a-menu-item>
                                                    <a-menu-item key="2">
                                                        <a-icon type="close" />Disapprove
                                                    </a-menu-item>
                                                    <a-menu-item key="3" @click="showModal(record)">
                                                        <a-icon type="user" />Edit </a-menu-item>
                                                    <a-menu-item key="4" @click="deleteUser(record.id)">
                                                        <a-icon type="user-delete" />Delete</a-menu-item>
                                                </a-menu>
                                                <a-button type="dashed" style="margin-left: 8px">
                                                    <a-icon type="setting" /> More Actions
                                                    <a-icon type="down" />
                                                </a-button>
                                            </a-dropdown>
                                        </a>
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
                                                <label>Field of Expertise</label>
                                                <a-select mode="multiple" style="width: 100%" placeholder="Please select" @change="handleChangeExp">
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
                </form>
            </a-modal>
        </div>
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
            exp: '',
            users: {},
            exps: [],
            items: [
                { sp: 'System Analysis and Design' },
                { sp: 'Data Science' },
                { sp: 'Programming' }
            ],
            form: new Form({
                id: '',
                name: '',
                email: '',
                exp: '',
                password: '',
                type: '',
                role: 3
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
                    title: 'Name',
                    dataIndex: 'name',
                    scopedSlots: {
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
                    title: 'Field of Expertise',
                    dataIndex: 'expertises',
                    ellipsis: true,
                    scopedSlots: {
                        customRender: 'expertises',
                    },
                    
                },
                {
                    title: 'Status',
                    dataIndex: 'status',
                    width: 120,
                    scopedSlots: {
                        customRender: 'status',
                    },
                    filters: [
                        { text: 'Pending', value: 'Pending' },
                        { text: 'Approved', value: 'Approved' },
                    ],
                    filteredValue: filteredInfo.status || null,
                    onFilter: (value, record) => record.status.includes(value),
                    sorter: (a, b) => a.status.length - b.status.length,
                    sortOrder: sortedInfo.columnKey === 'status' && sortedInfo.order,
                    ellipsis: true,
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
        }
    },
    created() {
        this.loadUsers();
    },
    methods: {
        showModal(record) {
            this.modalVisible = true;
            this.form.reset;
            this.form.fill(record);
        },
        handleSearch(selectedKeys, confirm, dataIndex) {
            confirm();
            this.searchText = selectedKeys[0];
            this.searchedColumn = dataIndex;
        },
        handleCancel(e) {
            console.log('Clicked cancel button');
            this.modalVisible = false;
            this.clear();
        },
        handleReset(clearFilters) {
            clearFilters();
            this.searchText = '';
        },
        handleChange(pagination, filters, sorter) {
            console.log('Various parameters', pagination, filters, sorter);
            this.filteredInfo = filters;
            this.sortedInfo = sorter;
        },
        handleChangeExp(value) {
            this.form.exp = `${value}`;
            console.log(this.form.exp);
        },
        handleOk(e) {
            this.confirmLoading = true;
            this.form.patch('/api/updateRP/' + this.form.id).then(() => {
                this.confirmLoading = false;
                this.modalVisible = false;
                this.confirmLoading = false;
                this.loadUsers();
                this.clear();
                this.$message.success('User updated successfully', 2);
            }).catch(() => {
                
            });
        },
        callback(key) {
            console.log(key);
        },
        createUser() {
            console.log(this.form.exp);
            if (this.form.name === '' || this.form.email === '' || this.form.password === '') {
                this.$message.warning('Please fill up the required fields.', 2);
            } else {
                this.form.post('/api/storePersonnels').then(() => {
                    this.$message.success('User created successfully', 2);
                }).catch(() => {
                    this.$message.error('Something wrong happened.', 2);
                });
            }
            this.clear();
            this.loadUsers();
        },
        loadUsers() {
            axios.get('/api/getPersonnels').then(({ data }) => {
                this.users = data
                this.exps = this.users.expertises.split(',');
            });
        },
        clear() {
            this.form.name = '';
            this.form.email = '';
            this.form.password = '';
            this.form.exp = ''
        }
    },
};

</script>
