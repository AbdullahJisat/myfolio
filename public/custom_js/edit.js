function edit(id, url) {
    $("#saveDataForm")[0].reset(); // reset form on show modals
    $(".error").each(function () {
        $(this).empty(); //remove error text
    });
    $("#saveDataForm").find(".is-invalid").removeClass("is-invalid"); //remover red border color
    $.ajax({
        url: url,
        type: "POST",
        data: {
            id: id,
            _token: _token,
        },
        dataType: "JSON",
        success: function (data) {
            return data;
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(
                thrownError +
                    "\r\n" +
                    xhr.statusText +
                    "\r\n" +
                    xhr.responseText
            );
        },
    });
}
