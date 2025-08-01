const Index = () => import("./pages/index.vue");
const Home = () => import("./pages/home.vue");
const About = () => import("./pages/about.vue");

export default [
    {
        path: "/",
        name: "Index",
        component: Index,
        children: [
            {
                path: "/",
                name: "Home",
                component: Home,
            },
            {
                path: "/about",
                name: "About",
                component: About,
            },
        ],
    },
];
