import Dashboard from '../views/Admin/Dashboard';

import ManageStudents from '../views/Admin/ManageStudents';
import SubjectTeacher from '../views/Admin/SubjectTeacher';
import CreateStudent from '../views/Admin/CreateUserStudent';
import ManageSchedule from '../views/Admin/ManageSchedule';
import ManageArchive from '../views/Admin/ManageArchive';
import ResearchPersonnel from '../views/Admin/ResearchPersonnel.vue';
import CapstoneOne from '../views/Admin/CapstoneOne.vue';
import CapstoneTwo from '../views/Admin/CapstoneTwo.vue';
import StudentDashboard from '../views/Student/Dashboard.vue';
import StudentResearchArchive from '../views/Student/ResearchArchive.vue';
import StudentSchedule from '../views/Student/StudentSchedule.vue';
import StudentChat from '../views/Student/StudentChat.vue';
import PendingAccount from '../components/PendingAccount.vue';

export default [

    {
        path: '/admin/page-not-found',
        component : NotFound,
    },
    {
        path: '*',
        redirect: '/admin/page-not-found',
    },
    {
        path: '*',
        component : NotFound,
    },
    {
        path: '/pending-account',
        name: 'Pending',
        component: PendingAccount
    },
    // Admin
    {
        path: '/admin/dashboard',
        name: 'Dashboard',
        component: Dashboard
    },
    {
        path: '/home',
        redirect: '/dashboard'
    },
    {
        path: '/admin/schedule',
        name: 'Schedule',
        component: ManageSchedule
    },
    {
        path: '/admin/archive',
        name: 'Archive',
        component: ManageArchive
    },
    {
        path: '/admin/profile',
        name: 'Profile',
        component: Profile
    },
    {
        path: '/admin/chat',
        name: 'Message',
        component: Chat
    },
    {
        path: '/admin/manage/students',
        name: 'Students',
        component: ManageStudents
    },
    {
        path: '/admin/manage/subject-teacher',
        name: 'Subject Teacher',
        component: SubjectTeacher
    },
    {
        path: '/admin/manage/research-personnel',
        name: 'Research Personnel',
        component: ResearchPersonnel
    },
    {
        path: '/admin/profile',
        name: 'Profile',
        component: Profile
    },
    {
        path: '/admin/manage/capstone-one',
        component: CapstoneOne
    },
    {
        path: '/admin/manage/capstone-two',
        component: CapstoneTwo
    },
    {
        path: '/login'
    },
    {
        path: '/register'
    },


    // Student
    {
        path: '/student/chat',
        component: Chat
    },
    {
        path: '/student/dashboard',
        component: StudentDashboard,
        name: 'Dashboard'
    },
    {
        path: '/student/research-archive',
        component: StudentResearchArchive,
        name: 'Research Archive'
    },
    {
        path: '/student/schedule',
        component: StudentSchedule,
        name: 'Schedule'
    },
    {
        path: '/student/chat',
        component: StudentChat
    },
    {
        path: '/page-not-found',
        component: NotFound
    },
  
]
