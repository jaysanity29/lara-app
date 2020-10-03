import Dashboard from '../views/Admin/Dashboard';
import Profile from '../views/Admin/Profile';
import NotFound from '../views/NotFound';
import ManageStudents from '../views/Admin/ManageStudents';
import SubjectTeacher from '../views/Admin/SubjectTeacher';
import CreateStudent from '../views/Admin/CreateUserStudent';
import ManageSchedule from '../views/Admin/ManageSchedule';
import ManageArchive from '../views/Admin/ManageArchive';
import ResearchPersonnel from '../views/Admin/ResearchPersonnel.vue';
import StudentDashboard from '../views/Student/Dashboard.vue';
import StudentResearchArchive from '../views/Student/ResearchArchive.vue';
import StudentSchedule from '../views/Student/StudentSchedule.vue';
import StudentChat from '../views/Student/StudentChat.vue';

export default [
    // Admin
    { path: '/admin/dashboard', component: Dashboard },
    { path: '/home', redirect: '/dashboard' },
    { path: '/admin/schedule', component: ManageSchedule },
    { path: '/admin/archive', component: ManageArchive },
    { path: '/admin/profile', component: Profile },
   
    { path: '/admin/manage/students', component: ManageStudents },
    { path: '/admin/manage/students/create', component: CreateStudent },
    { path: '/admin/manage/subject-teacher', component: SubjectTeacher },
    { path: '/admin/manage/research-personnel', component: ResearchPersonnel},
    { path: '/admin/profile', component: Profile },
    { path: '/login' },
    { path: '/register' },
    { path: '/page_not_found', component: NotFound },
    { path: '*', redirect: '/page_not_found' },

    // Student
    { path: '/student/dashboard', component: StudentDashboard},
    { path: '/student/research-archive', component: StudentResearchArchive},
    { path: '/student/schedule', component: StudentSchedule},
    { path: '/student/chat', component: StudentChat}

]
