<template>
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">My Profile</h4>
            </div>
        </div>
        <div class="row">
            <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                   <!--  <h6 class="card-title mb-0">Avatar</h6> -->
                         <avatar username="user" :size="60"></avatar>
                  </div>
                  <div class="mt-3">
                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Name:</label>
                    <p class="text-muted"> {{ user.name }}</p>
                  </div>
                  <div class="mt-3">
                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Expertises:</label>
                    <p class="text-muted"> {{ user.expertises }}</p>
                  </div>
                 
                  <div class="mt-3">
                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                    <p class="text-muted">{{ user.email }}</p>
                  </div>
                  
          
                </div>
              </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            user: '',
        }
    },
    created() {
        this.getUser();
    },
    methods: {
        getUser() {
            axios.get('/profile').then(({data}) => {
                this.user = data.data
                console.log(this.user.name);
            });
        }
    },
};

</script>
