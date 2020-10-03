<template>

 <nav class="sidebar">
      <div class="sidebar-header">
        <router-link to="/student/dashboard" class="sidebar-brand">
          <span>Coordinator</span>
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
          <li class="nav-item">
            <router-link to="/admin/dashboard" class="nav-link"  exact>
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </router-link>
          </li>
           <li class="nav-item">
            <router-link to="/admin/archive" class="nav-link" exact>
              <i class="link-icon" data-feather="layers"></i>
              <span class="link-title">Research Archive</span>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/schedule" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Schedule</span>
            </router-link>
          </li>
          <li class="nav-item nav-category">Manage Users</li>
        <li class="nav-item">
                  <router-link to="/admin/manage/students" class="nav-link">
                     <i class="link-icon" data-feather="info"></i>
              <span class="link-title">Student</span>
              </router-link>
                </li>
                <li class="nav-item">
                  <router-link to="/admin/manage/subject-teacher" class="nav-link">
                  <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Subject Teacher</span>
              </router-link>
                </li>
                <li class="nav-item">
                  <router-link to="/admin/manage/research-personnel" class="nav-link">
                   <i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">Research Personnel</span>
              </router-link>
                </li>
                <li class="nav-item nav-category">Manage Groups</li>
        <li class="nav-item">
                  <a to="pages/email/inbox.html" class="nav-link">
                     <i class="link-icon" data-feather="info"></i>
              <span class="link-title">Capstone 1</span>
              </a>
                </li>
                <li class="nav-item">
                  <a to="pages/email/read.html" class="nav-link">
                  <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Capstone 2</span>
              </a>
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
</script>
<style type="text/css">
  #components-layout-demo-custom-trigger .logo {
  height: 32px;
  background: rgba(255, 255, 255, 0.2);
  margin: 16px;
}
</style>