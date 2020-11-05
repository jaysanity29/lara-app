<template>
    <nav class="bottom-navbar header-toggled">
        <div class="container">
            <ul class="nav page-navigation">
                <li :class="[currentPage.includes('/research-personnel/dashboard') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'rp-dashboard'}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script>
export default {
    data() {
        return {
            activeClass: 'active',
            path : '',
        }
    },
    computed: {
        currentPage() {
            this.path = this.$route.path;
            return this.$route.path;
        }
    },
};

</script>
