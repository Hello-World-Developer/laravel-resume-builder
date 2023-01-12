import "./bootstrap";
import "../css/app.css";
import axios from "axios";
import { jsPDF } from "jspdf";
window.axios = axios;
window.$el = function (val) {
    return document.querySelector(val);
};
window.$els = function (val) {
    return document.querySelectorAll(val);
}

window.jsPDF = jsPDF;

// window.addEventListener('load', function(){
//     const pdf = new jsPDF("p", "pt", "a4");

//     pdf.html(document.getElementById('export'), {
//         callback: function(doc) {
//             // Save the PDF
//             doc.save('sample-document.pdf');
//         },
//     });
// })
