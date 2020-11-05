import ManageStudents from '../views/Admin/ManageStudents';
import SubjectTeacher from '../views/Admin/SubjectTeacher';
import ManageSchedule from '../views/Admin/ManageSchedule';
import ManageArchive from '../views/Admin/ManageArchive';
import ResearchPersonnel from '../views/Admin/ResearchPersonnel.vue';
import CapstoneOne from '../views/Admin/CapstoneOne.vue';
import CapstoneTwo from '../views/Admin/CapstoneTwo.vue';
import Dashboard from '../views/Admin/Dashboard.vue';
import AdminView from '../views/Admin/AdminView.vue';
import NotFound from '../views/NotFound.vue';
import AdminProfile from '../views/Admin/Profile.vue';

const routes = [
    {
        path: '/admin/dashboard',
        name: 'Dashboard',
        component: Dashboard,
    },
    {
        path: '/admin',
        component: AdminView,
        children: [

            {
                path: 'not-found',
                component: NotFound,
            },
            {
                path: "*",
                redirect: 'not-found'
            },

            {

                path: 'students',
                name: 'Students',
                component: ManageStudents,

            },
            {
                path: 'profile',
                name: 'admin-profile',
                component : AdminProfile,
            },
            {
                path: 'teachers',
                name: 'Subject Teacher',
                component: SubjectTeacher,
            },
            {
                path: 'schedule',
                name: 'Schedule',
                component: ManageSchedule,
            },
            {
                path: 'archive',
                name: 'Archive',
                component: ManageArchive,
            },
            {
                path: 'research-personnel',
                name: 'Research Personnel',
                component: ResearchPersonnel
            },
            {
                path: 'capstone-1',
                name: 'Capstone 1',
                component: CapstoneOne
            },
            {
                path: 'capstone-2',
                name: 'Capstone 2',
                component: CapstoneTwo
            }

        ]
    },
];

export default routes
