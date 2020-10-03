<template>
   <div class="page-content">
         <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Research Archive</h4>
          </div>
        </div>   

        <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ title }}</div>
                
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
                                <div v-if="visibleTable" class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Research Title
                                                </th>
                                                <th>
                                                    Year Published
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CCERMS: A multiplatform</td>
                                                <td>2020</td>
                                                <td>Show</td>
                                            </tr>
                                            <tr>
                                                <td>CCERMS: A multiplatform</td>
                                                <td>2020</td>
                                                <td>Show</td>
                                            </tr>
                                            <tr>
                                                <td>CCERMS: A multiplatform</td>
                                                <td>2020</td>
                                                <td>Show</td>
                                            </tr>
                                            <tr>
                                                <td>CCERMS: A multiplatform</td>
                                                <td>2020</td>
                                                <td>Show</td>
                                            </tr>
                                            <tr>
                                                <td>CCERMS: A multiplatform</td>
                                                <td>2020</td>
                                                <td>Show</td>
                                            </tr>
                                            <tr>
                                                <td>CCERMS: A multiplatform</td>
                                                <td>2020</td>
                                                <td>Show</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a-pagination
      show-size-changer
      :default-current="3"
      :total="500"
      @showSizeChange="onShowSizeChange"
    />
    <br />
  
                                </div>
                            </transition>
                            </div>
                        </div>
                    </div>
                </div>   
    </div>
</template>
<style>
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>
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
            }),
          visibleTable: true,
          title : 'Research List',
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
        },
        show() {
            this.visibleTable = false;
            this.title = 'Add New';
        },
        hide() {
            this.visibleTable = true;
            this.title = 'Research List';
        }
    }
}
</script>

