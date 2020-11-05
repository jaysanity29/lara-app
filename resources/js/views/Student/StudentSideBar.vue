<template>
 <nav class="sidebar">
      <div class="sidebar-header">
        <router-link to="/student/dashboard" class="sidebar-brand">
          <span>Student</span>
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
<!-- <template>
  <div style="height: 100%">
       <a-layout-sider breakpoint="lg"
       :style="{ height: '100%', borderRight: 0 }" :trigger="null" collapsed-width="0" v-model="collapsed" @breakpoint="onBreakpoint">
      <div class="logo"><h4>Student</h4></div>
      <a-menu theme="light" :default-selected-keys="['1']" :style="{ height: '100%', borderRight: 0 }"
 mode="inline">
        <a-menu-item key="1">
          <a-icon type="pie-chart" />
          <span>Option 1</span>
        </a-menu-item>
        <a-menu-item key="2">
          <a-icon type="desktop" />
          <span>Option 2</span>
        </a-menu-item>
        <a-sub-menu key="sub1">
          <span slot="title"><a-icon type="user" /><span>User</span></span>
          <a-menu-item key="3">
            Tom
          </a-menu-item>
          <a-menu-item key="4">
            Bill
          </a-menu-item>
          <a-menu-item key="5">
            Alex
          </a-menu-item>
        </a-sub-menu>
        <a-sub-menu key="sub2">
          <span slot="title"><a-icon type="team" /><span>Team</span></span>
          <a-menu-item key="6">
            Team 1
          </a-menu-item>
          <a-menu-item key="8">
            Team 2
          </a-menu-item>
        </a-sub-menu>
        <a-menu-item key="9">
          <a-icon type="file" />
          <span>File</span>
        </a-menu-item>
      </a-menu>
    </a-layout-sider>
  </div>
   
</template> -->
<script>
export default {
  data() {
    return {
      collapsed: false,
    }
  },
  methods: {
     onBreakpoint(broken) {
      console.log(broken);
    },
  }
};
</script>