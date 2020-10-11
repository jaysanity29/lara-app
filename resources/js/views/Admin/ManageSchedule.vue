<template>
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Schedule</h4>
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
                                    List of Schedule
                                </span>
                                <div class="table-responsive pt-3">
                                    <a-table :columns="columns ">
                                    </a-table>
                                </div>
                            </a-tab-pane>
                            <a-tab-pane key="2">
                                <span slot="tab">
                                    <a-icon type="plus-square" />
                                    Create New Schedule
                                </span>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label>Select Group</label>
                                            <a-select default-value="Choose..." style="width:230px">
                                                <a-select-option value="CCERMS">CCERMS</a-select-option>
                                            </a-select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Defense</label>
                                            <a-select default-value="Choose..." style="width:230px">
                                                <a-select-option value="CCERMS">Outline</a-select-option>
                                            </a-select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label>Venue</label>
                                            <a-select default-value="Choose..." style="width:230px">
                                                <a-select-option value="CCERMS">Soft-Dev</a-select-option>
                                            </a-select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>Select Date & Time</label>
                                            <a-date-picker show-time @change="onChange" />
                                          
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <a-button type="primary" icon="search">
                                                Create
                                            </a-button>
                                        </div>
                                    </div>
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
export default {
    data() {
        return {

        }
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
    method: {

    }
};

</script>
