<template>
    <div class="page-content">
        <div class="row">
            <div class="col-md-3 grid-margin d-md-block">
                <a-collapse default-active-key="1">
                    <template #expandIcon="props">
                        <a-icon type="caret-right" :rotate="props.isActive ? 90 : 0" />
                    </template>
                    <a-collapse-panel key="1" header="Group Members">
                    	<p>Ian Jay Subang</p>
                    </a-collapse-panel>
                </a-collapse>
            </div>
            <div class="col-md-3 grid-margin d-md-block">
                <a-collapse default-active-key="1">
                    <template #expandIcon="props">
                        <a-icon type="caret-right" :rotate="props.isActive ? 90 : 0" />
                    </template>
                    <a-collapse-panel key="1" header="Group Members">
                    	<p>Ian Jay Subang</p>
                    </a-collapse-panel>
                </a-collapse>
            </div>
            <div class="col-md-3 grid-margin d-md-block">
                <a-collapse default-active-key="1">
                    <template #expandIcon="props">
                        <a-icon type="caret-right" :rotate="props.isActive ? 90 : 0" />
                    </template>
                    <a-collapse-panel key="1" header="Panels">
                    	<p>Ian Jay Subang</p>
                    </a-collapse-panel>
                </a-collapse>
            </div>
        </div>
    </div>
</template>
