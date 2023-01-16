import './cv-form-store';
import './cv-form-skill';
import './cv-form-language';

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

