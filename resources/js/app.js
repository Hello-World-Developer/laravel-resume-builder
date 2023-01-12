import "./bootstrap";
import "../css/app.css";
import axios from "axios";

window.axios = axios;

window.$el = function (val) {
    return document.querySelector(val);
};
window.$els = function (val) {
    return document.querySelectorAll(val);
}


