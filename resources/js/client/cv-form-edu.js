const eduHandler = function (selectors) {
    const prefix = '#preview-edu'
    selectors.forEach(function(selector) {
        $el(selector).addEventListener('input', function(e) {
            console.log(e.target.value)
            $el(`${prefix}-${e.target.id}`).innerText = e.target.value;
        })
    })
}

eduHandler([
    '#degree',
    '#school',
    '#city-edu',
    '#start-date',
    '#end-date',
])
