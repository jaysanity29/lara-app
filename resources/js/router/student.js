
import Chat from '../components/Chat.vue';
import NotFound from '../views/NotFound';
import Dashboard from '../views/Student/Dashboard.vue';
import ResearchArchive from '../views/Student/ResearchArchive.vue';
import Schedule from '../views/Student/StudentSchedule.vue';
import StudentView from '../views/Student/StudentView.vue';
import GroupInfo from '../views/Student/GroupInfo.vue';
import GroupMinutes from '../views/Student/GroupMinutes.vue';
import GroupSubmission from '../views/Student/GroupSubmission.vue';
import Evaluation from '../views/Student/StudentEvaluation.vue';
import Profile from '../components/Profile.vue';

const routes = [

    {
        path: '/student/dashboard',
        name: 'dashboard',
        component: Dashboard,
    },
    {

        path: '/student',
        component: StudentView,
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
                path: 'profile',
                name: 'student-profile',
                component: Profile,
            },
            {
                path: 'research-archive',
                name: 'research-archive',
                component: ResearchArchive,
            },
            {
                path: 'schedule',
                name: 'schedule',
                component: Schedule
            },
            {
                path: 'chat',
                name: 'chat',
                component: Chat
            },
            {
                path : 'group-info',
                name : 'group-info',
                component : GroupInfo
            },
            {
                path : 'group-minutes',
                name : 'group-minutes',
                component : GroupMinutes
            },
            {
                path : 'group-submission',
                name : 'group-submission',
                component : GroupSubmission
            },
            {
                path: 'evaluation',
                name : 'evaluation',
                component : Evaluation
            }
        ]   
    },
];

export default routes
