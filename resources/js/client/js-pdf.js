import { jsPDF } from 'jspdf'

// document.body.addEventListener('click', function () {
//     const el = document.querySelector('#export');
//     const pdf = new jsPDF()

//     pdf.html(el, {
//         callback: function (doc) {
//             // Save the PDF
//             doc.save('sample-document.pdf');
//         },
//         margin: [10, 10, 10, 10],
//         autoPaging: 'text',
//         x: 0,
//         y: 0,
//         width: 190, //target width in the PDF document
//         windowWidth: el.clientWidth //window width in CSS pixels
//     });
// })

window.downloadPdf = function(){
    const el = document.querySelector('#export');
    const pdf = new jsPDF()

    pdf.html(el, {
        callback: function (doc) {
            // Save the PDF
            doc.save('sample-document.pdf');
        },
        margin: [10, 10, 10, 10],
        autoPaging: 'text',
        x: 0,
        y: 0,
        width: 190, //target width in the PDF document
        windowWidth: el.clientWidth //window width in CSS pixels
    });
}

