<template>
    <!-- Page Heading -->
    <div class="page-content">
        <a-back-top />
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0" style="color: #52616b">Dashboard</h4>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Students</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2"> {{ students }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Researches</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">3,897</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">New Customers</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">3,897</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Group Progress-->
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Capstone 1 | Group Progress</div>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Group Name
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            CCERMS
                                        </td>
                                        <td>
                                            <a-progress :percent="50" status="active" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Haley Kennedy
                                        </td>
                                        <td>
                                            <a-progress :percent="75" status="active" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bradley Greer
                                        </td>
                                        <td>
                                            <a-progress :percent="100" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Capstone 2 | Group Progress</div>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Group Name
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            CCERMS
                                        </td>
                                        <td>
                                            <a-progress :percent="50" status="active" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Haley Kennedy
                                        </td>
                                        <td>
                                            <a-progress :percent="75" status="active" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bradley Greer
                                        </td>
                                        <td>
                                            <a-progress :percent="100" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
            login: false,
            students: '',
        }
    },
    beforeMount() {
        this.countStudent();
    },
    mounted() {
         window.onpopstate = event => {
            if(window.localStorage.getItem("info") !== null && this.$route.path == "/login") {
                    this.$router.push("/admin/dashboard");
            }
        }
    },
    created() {

    },
    methods: {
        countStudent() {
            axios.get('/api/countStudent').then(({ data }) => {
                this.students = data.users;
            })
        },
        countResearches() {
            axios.get('/api/countResearches').then(({data}) => {

            })
        }
    },
};

</script>
