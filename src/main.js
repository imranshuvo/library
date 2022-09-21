import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue'

import './assets/style.css';

import LoginPage from './components/LoginPage.vue';
import SearchForm from './components/SearchForm.vue';
import AllBooks from './components/AllBooks.vue';
import UserDashboard from './components/UserDashboard.vue';
import AddBook from './components/AddBook.vue';

import './env.js';
import 'flowbite';


import { getAuth, onAuthStateChanged } from "firebase/auth";

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
        },
        {
            path: '/books',
            component: AllBooks
        },
        {
            path: '/dashboard',
            component: UserDashboard,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/add',
            component: AddBook,
            meta: {
                requiresAuth: true
            }
        }
    ]
});

router.beforeEach(function(to, from, next){
    if(to.path == '/dashboard'){
        //check if user is logged in other wise, show them an alert for now
        const auth = getAuth();
        onAuthStateChanged(auth, (user) => {
            if(user){
                //Signed in 
                //console.log(user);
                next();
            }else {
                router.push('/login');
                next(false);
            }
        });
    }else{
        next();
    }
});

createApp(App).use(router).mount('#app')
