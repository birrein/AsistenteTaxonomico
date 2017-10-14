$(function() {
    loadTbody();

    $("#nivelOrganizacion").change(function() {
        loadTbody();
    });
    $("#btnBuscar").click(function() {
        loadTbody();
    });
});

function loadTbody()
{
    $.ajax({
        url: "xhrLoadTbody.php",
        data: $("#frmSearch").serialize(),
        // dataType: "dataType",
    }).done(function(d) {
        $("#tbodyResult").html(d);
    });
}