import RPView from '../views/ResearchPersonnel/RPView.vue';
import RPDashboard from '../views/ResearchPersonnel/Dashboard.vue';
import NotFound from '../views/NotFound';
const routes = [
	
	{
        path: '/research-personnel/dashboard',
        name: 'rp-dashboard',
        component: RPDashboard,
    },
    {
        path: '/research-personnel',
        component: RPView,
        children: [
            {
                path: 'not-found',
                component: NotFound,
            },
            {
                path: "*",
                redirect: 'not-found'
            },
        ]
    },
];

export default routes;
