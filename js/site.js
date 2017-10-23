var dataFormaOrganizacion = [
    'Colonia estrellada',
    'Colonia en zigzag',
    'Colonias tipo cenobio',
    'Colonia tipo cenobio-consorcio',
    'Con teca y cuernos',
    'Con forma de medialuna',
    'Con hemicélulas',
    'Colonia tipo filamento',
    'Incrustadas en el mucílago',
    'Colonias formadas por 4, 8 o 12 células',  
    'Más largas que anchas',
    'contraídas en la región media',
    'Contorno subcircular',
    'Simetría radial',
    'Con cingulo sobresaliente',
    'Matriz gelatinosa, grueso',
    'Sin matriz gelatinosa'
];

$(function() {
    loadTbody();

    $("#clase, #nivelOrganizacion, #paredCelular, #paredCelularOrnamentaciones, #cloroplastosN, #cloroplastosForma, #pirenoides").change(function() {
        loadTbody();
    });
    $("#formaCelula, #paredCelularOrnamentaciones").keyup(function(e){
        var code = e.which;
        if (code == 13) {
            loadTbody();
        }
    });

    var msFormaOrganizacion = $('#formaOrganizacion').magicSuggest({
        allowFreeEntries: true,
        data: dataFormaOrganizacion,
        typeDelay: 0
    });
    $(msFormaOrganizacion).on('selectionchange', function(e,m){
        loadTbody();
    });

    $('.algaelist').on('click', '.showAlgaeInfo', function () {
        var genero = $(this).data('genero');
        $('#myModalLabel').text(genero);

        $.ajax({
            url: "xhrGetModalBody.php?genero="+genero
        }).done(function(d) {
            $('.modal-body').html(d);
        });

        $('#myModal').modal('show');
    });
});

function loadTbody()
{
    $(".algaelist").html('<img src="images/loading.gif">');
    $.ajax({
        url: "xhrLoadTbody.php",
        data: $("#frmSearch").serializeArray(),
        // dataType: "dataType",
    }).done(function(d) {
        $(".algaelist").html(d);
    });
}