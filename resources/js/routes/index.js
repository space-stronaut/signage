import Home from '../pages/Home'
import About from '../pages/About'
import Login from '../pages/auth/Login'
import Register from '../pages/auth/Register'
import All from '../pages/admin/All'
import profileEdit from '../pages/admin/profileEdit'
import contactEdit from '../pages/admin/contactEdit'
import eduEdit from '../pages/admin/eduEdit'
import workEdit from '../pages/admin/workEdit'
import Contact from '../pages/admin/Contact'
import Profile from '../pages/admin/Profile'
import Edu from '../pages/admin/Edu'
import Work from '../pages/admin/Work'

export default{
    routes : [
        {
            path : '/',
            name : "home",
            component : Home
        },
        {
            path : '/about',
            name : 'about',
            component : About
        },
        {
            path : '/login',
            name : 'login',
            component : Login
        },
        {
            path : '/register',
            name : 'register',
            component : Register
        },
        {
            path : '/admin',
            name : 'admin',
            component : All
        },
        {
            path : '/contact',
            name : 'contact',
            component : Contact
        },
        {
            path : '/profile',
            name : 'profile',
            component : Profile
        },
        {
            path : '/edu',
            name : 'edu',
            component : Edu
        },
        {
            path : '/work',
            name : 'work',
            component : Work
        },
        {
            path : '/profileEdit/:id',
            name : 'profileEdit',
            component : profileEdit
        },
        {
            path : '/contactEdit/:id',
            name : 'contactEdit',
            component : contactEdit
        },
        {
            path : '/eduEdit/:id',
            name : 'eduEdit',
            component : eduEdit
        },
        {
            path : '/workEdit/:id',
            name : 'workEdit',
            component : workEdit
        },
    ]
}
