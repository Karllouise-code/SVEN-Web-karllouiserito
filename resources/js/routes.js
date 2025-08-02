const Index = () => import("./pages/index.vue");
const Home = () => import("./pages/home.vue");

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
        ],
    },
];
