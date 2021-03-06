<template>
    <div class="page-content">
        <a-back-top />
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0" style="color: #52616b">Research Archive</h4>
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
                                    List of Researches
                                </span>
                                <div class="table-responsive pt-3">
                                    <a-table :columns="columns" :data-source="researches" @change="handleChange" :pagination="{ pageSize: 10}" :scroll="{ x:700, y: 500 }">
                                        <a-tag slot="year" slot-scope="text, record" :color="'#f50'">
                                            {{ record.year }}
                                        </a-tag>
                                        <a slot="action" slot-scope="text, record">
                                            <a-dropdown>
                                                <a-menu slot="overlay">
                                                    <a-menu-item key="1" @click="showModal(record)">
                                                        <a-icon type="user" />Edit
                                                    </a-menu-item>
                                                    <a-menu-item key="2" @click="deleteUser(record.id)">
                                                        <a-icon type="user-delete" />Delete
                                                    </a-menu-item>
                                                    <a-menu-item key="3" @click="viewPDF(record)">
                                                        <a-icon type="user-delete" />View
                                                    </a-menu-item>
                                                </a-menu>
                                                <a-button type="dashed" style="margin-left: 8px">
                                                    <a-icon type="setting" /> More Actions
                                                    <a-icon type="down" />
                                                </a-button>
                                            </a-dropdown>
                                        </a>
                                    </a-table>
                                    <br>
                                    <div class="d-flex justify-content-center">
                                        <a-spin :spinning="spinning" :visible="spinningVisible">
                                            <a-icon slot="indicator" type="loading" style="font-size: 24px" spin />
                                        </a-spin>
                                    </div>
                                </div>
                            </a-tab-pane>
                            <a-tab-pane key="2">
                                <span slot="tab">
                                    <a-icon type="plus-square" />
                                    Add New Research
                                </span>
                                <a-divider orientation="left">
                                    Research Information
                                </a-divider>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label>Research Title</label>
                                            <input v-model="research.title" type="text" name="title" class="form-control">
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Adviser</label>
                                            <input v-model="research.adviser" type="text" name="adviser" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label>Author(s)</label>
                                            <a-input v-model="research.authors" type="text" class="form-control" mode="tags" :token-separators="[',']" >
                                                <a-tooltip slot="suffix" title="Please use comma to separate author(s)
                                                Example: Juan Dela Cruz, Thor Magtanggol">
                                                    <a-icon type="info-circle" style="color: rgba(0,0,0,.45)" />
                                                </a-tooltip>
                                            </a-input>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label>Year Published</label>
                                            <a-select default-value="2020" style="width: 230px" @change="handleChange" v-model="research.year">
                                                <a-select-option value="2020">
                                                    2020
                                                </a-select-option>
                                                <a-select-option value="2019">
                                                    2019
                                                </a-select-option>
                                                <a-select-option value="2018">
                                                    2018
                                                </a-select-option>
                                            </a-select>
                                        </div>
                                        <a-divider orientation="left">
                                            Upload a PDF File
                                        </a-divider>
                                        <div class="col-md-4 form-group">
                                            <div class="clearfix">
                                                <a-upload :file-list="fileList" :remove=" handleRemove" :before-upload="beforeUpload" accept=".pdf">
                                                    <a-button :disabled="file"> 
                                                        <a-icon type="upload" /> Select a PDF File </a-button>
                                                </a-upload>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary" @click="createArchive">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </a-tab-pane>
                        </a-tabs>
                        <!--  <a-modal :visible="visible">
                            
                        </a-modal> -->
                        <a-drawer :placement="'right'" width="60%" :after-visible-change="afterVisibleChange" :visible="visible" :closable="true" @close="onClose">
                            <div>
                                <pdf v-for="i in numPages" :key="i" :src="pdfFile" :page="i" @num-pages="pageCount = $event" @page-loaded="currentPage = $event"></pdf>
                            </div>
                        </a-drawer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
</style>
<script>
import pdf from 'vue-pdf';
export default {
    components: {
        pdf
    },
    data() {
        return {
            research: {
                title: '',
                adviser: '',
                authors: '',
                file: '',
                fileName: '',
                year: ''
            },
            filteredInfo: null,
            sortedInfo: null,
            researches: [],
            singleFile: true,
            fileList: [],
            uploading: false,
            file: false,
            authors: {},
            pdfFile: '',
            visibleTable: true,
            visible: false,
            spinning: true,
            spinningVisible: true,
            currentPage: 0,
            pageCount: 0,
            numPages: undefined,
            researchTitle: '',
            spinningPdf: true,
        }

    },
    beforeMount() {
        this.showAllResearches();
    },
    computed: {
        columns() {
            let { sortedInfo, filteredInfo } = this;
            sortedInfo = sortedInfo || {};
            filteredInfo = filteredInfo || {};
            const columns = [{

                    title: 'Research Title',
                    dataIndex: 'title',
                    key: 'title',


                    ellipsis: true,
                },
                {
                    title: 'Author(s)',
                    dataIndex: 'author',
                    key: 'author',
                },
                {
                    title: 'Adviser',
                    dataIndex: 'adviser',
                    key: 'adviser',
                },
                {
                    title: 'Year Published',
                    dataIndex: 'year',
                    key: 'year',
                    scopedSlots: {
                        customRender: 'year',
                    },
                    sorter: (a, b) => a.year - b.year,
                    sortOrder: sortedInfo.columnKey === 'year' && sortedInfo.order,
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
        handleRemove(file) {
            const index = this.fileList.indexOf(file);
            const newFileList = this.fileList.slice();
            newFileList.splice(index, 1);
            this.fileList = newFileList;
            this.file = false;
        },
        callback(val) {
            console.log(val);
        },
        handleChange(e) {
            console.log('Val', e);
        },
        beforeUpload(file) {
            this.file = true;
            this.fileList = [...this.fileList, file];
            let fileT = this.fileList[0];
            let fileName = this.fileList[0].name;
            let reader = new FileReader();
            var ext = fileName.split('.').pop();
            if (ext !== 'pdf') {
                this.fileList.pop();
                this.file = false;

                this.$message.warning('Please choose a PDF file', 2);
            } else {
                this.research.file = fileT;
                reader.readAsDataURL(file);
                this.research.fileName = fileName;
            }
            return false;
        },
        async viewPDF(record) {

            let loadingTask = pdf.createLoadingTask('/file/research-archive/' + record.file_name);
            this.pdfFile = loadingTask;
            this.researchTitle = record.title;
            await this.pdfFile.promise.then(pdf => {
                this.numPages = pdf.numPages;

            })
            this.visible = true;
        },
        afterVisibleChange(val) {

        },
        onClose() {
            this.visible = false;
            this.pdfFile = '';
        },
        createArchive() {
            let config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
            let formData = new FormData();

            formData.append('title', this.research.title);
            formData.append('authors', this.research.authors);
            formData.append('year', this.research.year);
            formData.append('file', this.research.file);
            formData.append('fileName', this.research.fileName);
            formData.append('adviser', this.research.adviser);
            axios.post('/api/archive', formData, config).then((res) => {
                this.$message.success('Success', 2);
                this.clear();
            }).catch(err => {
                this.$message.error('Something wrong try again.', 2);
            });
        },
        clear() {
            this.research.title = '';
            this.research.authors = '';
            this.research.year = '';
            this.research.file = '';
            this.research.fileName = '';
            this.research.adviser = '';
            this.fileList = null;
            this.file = false;
        },
        show() {
            this.visibleTable = false;
            this.title = 'Add New';
        },
        hide() {
            this.visibleTable = true;
            this.title = 'Research List';
        },
        showAllResearches() {
            axios.get('/api/archive').then(({ data }) => {
                this.researches = data.data;
                this.spinning = false
                this.spinningVisible = false
            });
        }
    }
}

</script>
