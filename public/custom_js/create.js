/*************************************************
 ******* Start :: Store Form Data Function *******
 **************************************************/
function store(table, url, method, data) {
    $.ajax({
        url: url,
        type: "POST",
        // data: $("#saveDataForm").serialize(),
        data: data,
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#save-btn").addClass(
                "kt-spinner kt-spinner--md kt-spinner--light"
            );
            $("#save-btn").attr("disabled", true);
        },
        complete: function () {
            $("#save-btn").removeClass(
                "kt-spinner kt-spinner--md kt-spinner--light"
            );
            $("#save-btn").removeAttr("disabled");
        },
        success: function (data) {
            $("#saveDataForm").find(".is-invalid").removeClass("is-invalid");
            $("#saveDataForm").find(".error").remove();
            if (data.status) {
                bootstrap_notify(data.status, data.message);
                if (data.status == "success") {
                    if (method == "update") {
                        table.ajax.reload(null, false);
                    } else {
                        table.ajax.reload();
                    }

                    $("#saveDataForm")[0].reset();
                    $("#saveDataForm .selectpicker").selectpicker("refresh");
                    $("#saveDataModal").modal("hide");
                }
            } else {
                $.each(data.errors, function (key, value) {
                    $("#saveDataForm .form-group")
                        .find(".error_" + key)
                        .text(value);
                    $("#saveDataForm input[name='" + key + "']").addClass(
                        "is-invalid"
                    );
                    $("#saveDataForm select#" + key)
                        .parent()
                        .addClass("is-invalid");
                    $("#saveDataForm textarea[name='" + key + "']").addClass(
                        "is-invalid"
                    );
                    $("#saveDataForm input[name='" + key + "']").after(
                        '<div id="' +
                            key +
                            '" class="error invalid-feedback">' +
                            value +
                            "</div>"
                    );
                    $("#saveDataForm select#" + key)
                        .parent()
                        .after(
                            '<div id="' +
                                key +
                                '" class="error invalid-feedback">' +
                                value +
                                "</div>"
                        );
                    $("#saveDataForm textarea[name='" + key + "']").after(
                        '<div id="' +
                            key +
                            '" class="error invalid-feedback">' +
                            value +
                            "</div>"
                    );
                });
            }
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
/*************************************************
 ******* End :: Store Form Data Function *******
 **************************************************/
