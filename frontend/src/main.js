import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import axios from 'axios';
import "bootstrap/dist/css/bootstrap.min.css";
import "@fortawesome/fontawesome-free/css/all.css";
import "@fortawesome/fontawesome-free/js/all.js";

import HomeComponent from "../src/pages/Home/HomeComponent";
import LoginComponent from "../src/pages/Login/LoginComponent";
import ProductsComponent from "../src/pages/Products/ProductsComponent";
import RegisterComponent from "../src/pages/Register/RegisterComponent";

Vue.config.productionTip = false;
Vue.use(VueRouter);

axios.defaults.baseURL = 'http://localhost:8000/api';

const routes = [
  { path: "/", name: "login", component: LoginComponent },
  { path: "/cadastro", name: "register", component: RegisterComponent },
  { path: "/home", name: "home", component: HomeComponent },
  { path: "/produtos", name: "products", component: ProductsComponent },
];

const router = new VueRouter({
  routes,
});

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
