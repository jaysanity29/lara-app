<template>
    <nav class="sidebar" >
        <div class="sidebar-header" style="background-color: #0278ae">
            <router-link to="#" class="sidebar-brand" >
                <span></span>
                <span style="color:white;">Coordinator</span>
            </router-link>
            <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li :class="[currentPage.includes('/admin/dashboard') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name: 'Dashboard'}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </router-link>
                </li>
                <li :class="[currentPage.includes('/admin/archive') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'Archive' }" class="nav-link">
                        <i class="link-icon" data-feather="layers"></i>
                        <span class="link-title">Research Archive</span>
                    </router-link>
                </li>
                <li :class="[currentPage.includes('/admin/schedule') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'Schedule' }" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Schedule</span>
                    </router-link>
                </li>
                <li class="nav-item nav-category">Manage Users</li>
                <li :class="[currentPage.includes('/admin/students') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'Students' }" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">Student</span>
                    </router-link>
                </li>
                <li :class="[currentPage.includes('/admin/manage/subject-teacher') ? activeClass : '', 'nav-item']">
                    <router-link to="/admin/manage/subject-teacher" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Subject Teacher</span>
                    </router-link>
                </li>
                <li :class="[currentPage.includes('/admin/manage/research-personnel') ? activeClass : '', 'nav-item']">
                    <router-link :to="{ name : 'Research Personnel' }" class="nav-link">
                        <i class="link-icon" data-feather="file-text"></i>
                        <span class="link-title">Research Personnel</span>
                    </router-link>
                </li>
                <li class="nav-item nav-category">Manage Groups</li>
                <li class="nav-item">
                    <router-link to="/admin/manage/capstone-one" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">Capstone 1</span>
                    </router-link>
                </li>
                <li class="nav-item">
                     <router-link to="/admin/manage/capstone-two" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">Capstone 2</span>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a to="pages/email/compose.html" class="nav-link">
                        <i class="link-icon" data-feather="file-text"></i>
                        <span class="link-title">Done</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Manage Minutes</li>
                <li class="nav-item">
                    <a to="pages/email/inbox.html" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">View Minutes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a to="pages/email/read.html" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Title-Outline</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a to="pages/email/compose.html" class="nav-link">
                        <i class="link-icon" data-feather="file-text"></i>
                        <span class="link-title">Final</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Generate Report</li>
                <li class="nav-item">
                    <a to="pages/email/inbox.html" class="nav-link">
                        <i class="link-icon" data-feather="info"></i>
                        <span class="link-title">Reports</span>
                    </a>
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
        }
    },
    computed: {
        currentPage() {
            return this.$route.path;
        }
    },
};
</script>

