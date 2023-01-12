
// import './cv-form-add-skill';
// import './cv-form-edu';

ClassicEditor
    .create(document.querySelector('#description'), {

        licenseKey: '',

    })
    .then(editor => {
        window.editor = editor;

    })
    .catch(error => {
        console.error('Oops, something went wrong!');
        console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
        console.warn('Build id: lvci6fhu4lsj-oox7f88tvmun');
        console.error(error);
    });


$el("#profile").onclick = function () {
    window.onfocus = () => {
        if (this.value) {
            this.value = "";
            $el("#upload-profile-btn").removeAttribute("style");
            $el("#upload-profile-btn")
                .querySelector("svg")
                .removeAttribute("style");
        }
    };
};

$el("#profile").addEventListener("change", function (e) {
    window.onfocus = null;
    if (e.target.value) {
        const fileReader = new FileReader();
        fileReader.onload = function (e) {
            $el("#upload-profile-btn").style.backgroundImage = `url("${e.target.result}")`;
            // $el('#preview-cv-profile').style.backgroundImage = `url("${e.target.result}")`;
            $el("#upload-profile-btn").querySelector("svg").style.display = "none";
        };
        fileReader.readAsDataURL(e.target.files[0]);
    }
});

// const previewHandler = function (inputs) {
//     inputs.forEach(function (input) {
//         let timeout;
//         $el(input).addEventListener('keyup', function (e) {
//             if (timeout) clearTimeout(timeout)
//             timeout = setTimeout(() => {
//                 if (['email', 'address', 'phone-number'].includes(e.target.id) && e.target.value) {
//                     $el(`#preview-${e.target.id}`).parentElement.querySelector('svg')?.classList.remove('hidden')
//                 } else if (['email', 'address', 'phone-number'].includes(e.target.id)) {
//                     $el(`#preview-${e.target.id}`).parentElement.querySelector('svg')?.classList.add('hidden')
//                 }
//                 $el(`#preview-${e.target.id}`).innerText = e.target.value
//             }, 300)
//         })
//     })
// }

// previewHandler([
//     '#first-name',
//     '#last-name',
//     '#phone-number',
//     '#email',
//     '#address',
//     '#head-line',
//     '#post-code',
//     '#city',
// ])


