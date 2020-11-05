<template>
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-md-block">
                <a-collapse default-active-key="1">
                    <template #expandIcon="props">
                        <a-icon type="caret-right" :rotate="props.isActive ? 90 : 0" />
                    </template>
                    <a-collapse-panel key="1" header="Submission History">
                        <a-timeline>
                            <a-timeline-item color="green">
                                <a-icon slot="dot" type="pushpin" style="font-size: 20px;" />
                                <p>Chapter 1 to 3</p>
                                <p>2015-09-01</p>
                            </a-timeline-item>
                            <a-timeline-item color="green">
                                <a-icon slot="dot" type="pushpin" style="font-size: 20px;" />
                                <p>Chapter 1 to 3</p>
                                <p>2015-09-01</p>
                            </a-timeline-item>
                            <a-timeline-item color="green">
                                <a-icon slot="dot" type="pushpin" style="font-size: 20px;" />
                                <p>Chapter 1 to 3</p>
                                <p>2015-09-01</p>
                            </a-timeline-item>
                            <a-timeline-item color="green">
                                <a-icon slot="dot" type="pushpin" style="font-size: 20px;" />
                                <p>Chapter 1 to 3</p>
                                <p>2015-09-01</p>
                            </a-timeline-item>
                        </a-timeline>
                    </a-collapse-panel>
                </a-collapse>
            </div>
        </div>
    </div>
    </div>
</template>
