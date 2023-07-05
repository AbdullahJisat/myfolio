var table;
function read(url, title) {
    var table = $(`#${title}dataTable`).DataTable({
                // Load data for the table's content from an Ajax source//
                "ajax": {
                    "url": url,
                    "type": "POST",
                    // "data": function(data) {
                    //     console.log(data.code);
                    // }
                },

            });
}
