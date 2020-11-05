<template>
    <div class="container-fluid">
        <!-- 404 Error Text -->
        <div style="margin-top:7%">
            <a-result status="404" title="404" sub-title="Sorry, the page you visited does not exist." />
        </div>
    </div>
</template>
<script>
export default {
    name : 'Header',
    data() {
        return {}
    },
    mounted: function() {
      
    },
    methods: {
        loadOnce () {
            location.reload();
        }
    }
}
</script>
