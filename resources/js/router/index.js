import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from '../pages/Home.vue';
import CategoryList from '../pages/category/List.vue';
import CategoryCreate from '../pages/category/Create.vue';
import CategoryEdit from '../pages/category/Edit.vue';
const routes = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home,
            name: 'home',
            meta: { title: route => { return "Home" } }
        },
        {
            path: '/category',
            component: CategoryList,
            name: 'category-list',
            meta: { title: route => { return "List" } }
        },
        {
            path: '/category/create',
            component: CategoryCreate,
            name: 'create-category',
            meta: { title: route => { return "Create" } }
        },
        {
            path: '/category/edit/:id',
            component: CategoryEdit,
            name: 'edit-category',
            meta: { title: route => { return "Edit" } }
        },
    ]
});
routes.afterEach((to, from) => {
    Vue.nextTick(() => {
        document.title = to.meta.title(to)
    })
})
export default routes;