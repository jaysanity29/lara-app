<template>
    <div class="container4">
        <div style="text-align:center">
            <h2>You're almost there!</h2>
            <p>Provide the neccessary information to proceed to the next step.</p>
        </div>
        <a-steps :current="current" type="navigation">
            <a-step v-for="item in steps" :key="item.title" :title="item.title" />
        </a-steps>
        <div class="steps-content">
            <div v-if="current === 0">
                <a-collapse v-model="activeKey" accordion>
                    <a-collapse-panel key="1" header="Create a group">
                        <form @submit.prevent="createGroup">
                            <div class="form-row" style="padding: 10px">
                                <div class="form-group col-md-6">
                                    <label for="inputGroup">Group Name</label>
                                    <input v-model="form.group_name" type="text" name="group_name" class="form-control" :class="{ 'is-invalid': form.errors.has('group_name') }" id="inputGroup">
                                    <has-error :form="form" field="group_name"></has-error>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputGroup">Research Title</label>
                                    <input v-model="form.group_title" type="text" name="group_title" class="form-control" :class="{ 'is-invalid': form.errors.has('group_title') }" id="inputGroup">
                                    <has-error :form="form" field="group_title"></has-error>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputGroup">Group Course</label>
                                    <br>
                                    <a-select default-value="2020" style="width: 150px" v-model="form.group_course">
                                        <a-select-option value="BSCS">
                                            BSCS
                                        </a-select-option>
                                        <a-select-option value="BSIT">
                                            BSIT
                                        </a-select-option>
                                        <a-select-option value="BSIS">
                                            BSIS
                                        </a-select-option>
                                        <a-select-option value="BSEMC">
                                            BSEMC
                                        </a-select-option>
                                    </a-select>
                                </div>
                            </div>
                            <div class="row" style="float:right;padding-right:30px;padding-bottom:30px;">
                                <button :disabled="form.busy" type="submit" class="btn btn-primary">Create Group</button>
                            </div>
                        </form>
                    </a-collapse-panel>
                    <a-collapse-panel key="2" header="Join a group">
                        <form @submit.prevent="joinGroup">
                            <label for="inputGroup">Access Code</label>
                            <input v-model="joinForm.access_code" type="text" name="access_code" class="form-control" :class="{ 'is-invalid': joinForm.errors.has('access_code') }" id="inputGroup">
                            <has-error :form="joinForm" field="access_code"></has-error>
                            <br>
                            <div class="row" style="float:right;padding-right:30px;padding-bottom:30px;">
                                <button :disabled="joinForm.busy" type="submit" class="btn btn-primary">Join Group</button>
                            </div>
                        </form>
                    </a-collapse-panel>
                </a-collapse>
            </div>
            <div v-if="current === 1">
                <a-divider>
                    <p>Section</p>
                </a-divider>
                <form @submit.prevent="createGroup">
                    <div class="row" style="padding: 10px">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input v-model="form.group_name" type="text" name="group_name" class="form-control" :class="{ 'is-invalid': form.errors.has('groupName') }" placeholder="sad">
                                <a-input v-model="form.group_name" v-decorator="[]" <has-error :form="form" field="group_name">
                                    </has-error>
                            </div>
                        </div>
                    </div>
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
            err: '',
            activeKey: ['1'],
            dashed: true,
            current: 0,
            steps: [{
                    title: 'Join / Create a Group',
                    content: 'First-content',
                },
                {
                    title: 'Join a Section',
                    content: 'Second-content',
                },
            ],
            form: new Form({
                group_name: '',
                group_title: '',
                group_course: '',
            }),
            joinForm: new Form({
                access_code: '',
            })
        }
    },
    mounted() {
        this.openNotificationWithIcon();
        // this.showGroups();
    },
    methods: {
        showGroups() {
            axios.get('/api/join-group').then((data) => {
                console.log(data);
            });
        },
        createGroup() {
            this.form.post('/create-group').then(() => {
                this.$message.success('Created Successfully', 2);
                this.$router.push({ name: 'dashboard' });
                // this.current++;
            }).catch((err) => {
                this.$message.error('Something went wrong happened.', 2);
            });
        },
        joinGroup() {
            this.joinForm.post('/join-group').then(({res}) => {
                window.location.href = '/student/dashboard';
                if(res.count > 0) {
                    this.$message.success('Joined successfully.', 2);
                } else {
                    this.$message.error('Group does not exist', 2);
                }     
            }).catch((err) => {
                
            }); 
        },
        openNotificationWithIcon() {
            this.$notification['success']({
                message: 'Welcome',
                description: 'Your account has been approved. You can now create or join a group and a section.',
                duration: 4,
            });
        },
    }
};

</script>
<style scoped>
.steps-content {
    margin-top: 16px;
    /* border: 1px dashed #e9e9e9;*/
    border-radius: 6px;
    /*background-color: #fafafa;*/
    min-height: 200px;

    padding-top: 10px;
}

.steps-action {
    margin-top: 24px;
}

div.container4 {
    height: 50%;
    margin: 0;
    position: absolute;
    top: 10%;
    left: 20%;
    width: 60%;
}

</style>
