import { jsPDF } from 'jspdf'

document.body.addEventListener('click', function () {
    const el = document.getElementById('export');
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
        windowWidth: document.getElementById('export').clientWidth //window width in CSS pixels
    });
})

