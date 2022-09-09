import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue'

import './assets/style.css';

import LoginPage from './components/LoginPage.vue';
import SearchForm from './components/SearchForm.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/login',
            component: LoginPage,
        },
        {
            path: '/', 
            component: SearchForm 
        } 
    ]
});

createApp(App).use(router).mount('#app')
