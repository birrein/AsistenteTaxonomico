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
    'Formadas por 4, 8 o 12 células',  
    'Más largas que anchas',
    'contraídas en la región media',
    'Contorno subcircular',
    'Simetría radial',
    'Con cingulo sobresaliente',
    'Matriz gelatinosa, grueso',
    'Sin matriz gelatinosa'
];

$(function() {

    //fix para corregir sombra al agregar un segundo modal
    $(document).on('show.bs.modal', '.modal', function () {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });
    //fix para corregir scroll al cerrar segundo modal, el primero no queda "scrolleable"
    $(document).on('hidden.bs.modal', '.modal', function () {
        $('.modal:visible').length && $(document.body).addClass('modal-open');
    });

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
        $('#myModalInfoLabel').text(genero);

        $.ajax({
            url: "xhrGetModalBody.php?genero="+genero
        }).done(function(d) {
            $('#myModalInfoBody').html(d);
        });

        $('#myModalInfo').modal('show');
    });

    $('#myModalInfoBody').on('click', '.foto', function () {
        $("#myModalBody").html('<img src="'+$(this).data('imgsrc')+'" class="img-responsive">');
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