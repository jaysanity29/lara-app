<template>
 <nav class="sidebar">
      <div class="sidebar-header">
        <router-link to="/student/dashboard" class="sidebar-brand">
          Student<span></span>
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
            <router-link to="/student/dashboard" class="nav-link"  exact>
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </router-link>
          </li>
           <li class="nav-item">
            <router-link to="/student/research-archive" class="nav-link" exact>
              <i class="link-icon" data-feather="layers"></i>
              <span class="link-title">Research Archive</span>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/student/schedule" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Schedule</span>
            </router-link>
          </li>
           <li class="nav-item">
            <a to="pages/apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Evaluation</span>
            </a>
          </li>
          
           
           
          <li class="nav-item nav-category">Group</li>
        <li class="nav-item">
                  <a to="pages/email/inbox.html" class="nav-link">
                     <i class="link-icon" data-feather="info"></i>
              <span class="link-title">Information</span>
              </a>
                </li>
                <li class="nav-item">
                  <a to="pages/email/read.html" class="nav-link">
                  <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Section</span>
              </a>
                </li>
                <li class="nav-item">
                  <a to="pages/email/compose.html" class="nav-link">
                   <i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">Submission</span>
              </a>
                </li>
                <li class="nav-item">
                  <a to="pages/email/compose.html" class="nav-link">
                   <i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">Minutes</span>
              </a>
                </li>
        </ul>
      </div>
    </nav>
</template>