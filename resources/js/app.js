import "./bootstrap";
import "../css/app.css";
window.addEventListener('load', function () {
    Alpine.start();
    setTimeout(()=>{
        loader.stop();
    },500)
})

window.loader = {
    start() {
        document.querySelector('#loader-01').style.display = 'block';
    },

    stop() {
        document.querySelector('#loader-01').style.display = 'none';
    }
}


