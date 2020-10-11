<template>
    <!-- Page Heading -->
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Dashboard</h4>
            </div>
        </div>
        <div class="row">
          
             <div class="col-md-6 grid-margin stretch-card">
                <a-card title="NUMBER OF GROUPS">
                    <p>card content</p>
                </a-card>
            </div>
             <div class="col-md-6 grid-margin stretch-card">
                <a-card title="NUMBER OF GROUPS" :bordered="true">
                    <p>card content</p>
                </a-card>
            </div>
        </div>
        <!-- Content Row -->
        <a-row :gutter="15">
            <a-col :span="10">
                <a-card title="NUMBER OF GROUPS" :bordered="true">
                    <p>card content</p>
                </a-card>
            </a-col>
            <a-col :span="10">
                <a-card title="NUMBER OF RESEARCHES" :bordered="true">
                    <p>card content</p>
                </a-card>
            </a-col>
            <a-col :span="8">
                <a-card title="NUMBER OF ADVISERS" :bordered="true">
                    <p>card content</p>
                </a-card>
            </a-col>
        </a-row>
        <br>
        <a-row :gutter="16">
            <a-col :span="8">
                <a-card title="NUMBER OF SUBJECT TEACHERS" :bordered="true">
                    <p>card content</p>
                </a-card>
            </a-col>
            <a-col :span="8">
                <a-card title="NUMBER OF RESEARCHES" :bordered="true">
                    <p>card content</p>
                </a-card>
            </a-col>
            <a-col :span="8">
                <a-card title="SCHEDULE FOR TODAY" :bordered="true">
                    <p>card content</p>
                </a-card>
            </a-col>
        </a-row>
        <br>
        <a-row :gutter="16">
            <a-col :span="8">
                <a-card title="NUMBER OF PANELS" :bordered="true">
                    <p>card content</p>
                </a-card>
            </a-col>
        </a-row>
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
        }
    },
    beforeMount() {
        
    },
    mounted() {
       
    },
    created() {
       
    },
    methods: {
        
    },
};

</script>
