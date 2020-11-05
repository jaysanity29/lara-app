<template>
    <nav class="bottom-navbar header-toggled">
        <div class="container">
            <ul class="nav page-navigation">
                <li :class="[currentPage.includes('/admin/dashboard') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'dashboard'}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </router-link>
                </li>
                <li :class="[currentPage.includes('/student/group-info') ? activeClass : '', 'nav-item']">
                    <a href="javascript:;" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="menu-title">Group</span>
                    </a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li :class="[currentPage.includes('/student/group-info') ? activeClass : '', 'nav-item']">
                                <router-link :to="{ name : 'group-info' }">
                                    Group Information
                                </router-link>
                            </li>
                            <li class="nav-item"><a href="#">Section</a>
                            </li>
                            <li :class="[currentPage.includes('/student/group-submission') ? activeClass : '', 'nav-item']">
                                <router-link :to="{ name : 'group-submission' }">
                                    Submission
                                </router-link>
                            </li>
                            <li :class="[currentPage.includes('/student/group-minutes') ? activeClass : '', 'nav-item']">
                                <router-link :to="{ name : 'group-minutes' }">
                                    Minutes
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </li>
                <li :class="[currentPage.includes('/student/research-archive') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'research-archive' }" class="nav-link" exact>
                        <i class="link-icon" data-feather="layers"></i>
                        <span class="link-title">Research Archive</span>
                    </router-link>
                </li>
                <li :class="[currentPage.includes('/student/schedule') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'schedule' }" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Schedule</span>
                    </router-link>
                </li>
                <li :class="[currentPage.includes('/student/evaluation') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'evaluation' }" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Evaluation</span>
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
