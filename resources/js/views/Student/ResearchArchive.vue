<template>
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <a-input-search style="width: 300px" placeholder="Search title..." enter-button @search="" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <a-list item-layout="vertical" :pagination="{ pageSize: 10}" :data-source="researches" bordered>
                    <div slot="header">
                        List of Researches
                    </div>
                    <a-list-item slot="renderItem" slot-scope="item, index">
                        <a slot="actions" @click="viewInfo(item)">More Info</a>
                        <a slot="actions" @click="viewPDF(item)">View</a>
                        <a-list-item-meta :description="item.title">
                            <a-tag slot="title" color="#f50"> {{ item.year }}</a-tag>
                        </a-list-item-meta>
                    </a-list-item>
                </a-list>
                <a-drawer :placement="'right'" width="60%" :after-visible-change="afterVisibleChange" :visible="visible" :closable="true" @close="onClose">
                            <div>
                                <pdf v-for="i in numPages" :key="i" :src="pdfFile" :page="i" @num-pages="pageCount = $event" @page-loaded="currentPage = $event"></pdf>
                            </div>
                        </a-drawer>
            </div>
        </div>
    </div>
</template>
<script>
import pdf from 'vue-pdf';
export default {
    name: 'Header',
    components: {
        pdf
    },
    data() {
        return {
            researches: [],
            visible: false,
            visibleInfo: false,
            currentPage: 0,
            pageCount: 0,
            numPages: undefined,
            pdfFile: '',
            researchInfo: {},
            filteredInfo: null,
            sortedInfo: null,
        }
    },
    beforeMount() {
        this.showAllResearches();
    },
    methods: {

         afterVisibleChange(val) {

        },
        showAllResearches() {
            axios.get('/api/archive').then(({ data }) => {
                this.researches = data.data;
                this.spinning = false
                this.spinningVisible = false
            });
        },
        viewInfo(item) {
            this.visibleInfo = true;
            this.researchInfo = item;
            
        },
        onCloseView() {
            this.visibleInfo = false;

        },
        async viewPDF(record) {
            let loadingTask = pdf.createLoadingTask('/file/research-archive/' + record.file_name);
            this.pdfFile = loadingTask;

            await this.pdfFile.promise.then(pdf => {
                this.numPages = pdf.numPages;

            })
            this.visible = true;
        },
        onClose() {
            this.visible = false;
            this.pdfFile = '';
        },
        handleChange(e) {
            console.log('Val', e);
        },
        afterVisibleChange(val) {

        },
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
};

</script>
