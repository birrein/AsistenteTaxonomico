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

var dataFormaCelula = [
    '2 Valvas largas y estrechas',
    '2 Valvas alargadas con extremos capitados',
    'Células globulosas',
    'Células terminales con espinas',
    'Célula aplastada',
    'Más largas que anchas',
    'contraídas en la región media',
    'Célula con istmo (constricción media profunda)',
    'generalmente más largas que anchas',
    '2 valvas cilindricas',
    'Células cilindricas ó con forma de barril',
    'Células adyacentes unidas',
    'células terminales con o sin cofia',
    'Células uninucleadas, cilindricas',
    'Célula alargada, cilindrica',
    'Células cilindricas, cortas a muy largas',
    'Células iguales o varias veces mas largas que anchas',
    'cilindricas, cortas o largas',

    'Valvas heteropolares, márgenes asimétricos',
    'Valvas más anchas en el centro que en los extremos',
    'Células agrupada de 2 o 4 ó a menudo en tetraedros regulares en el centro de la colonia',
    'Alargadas, elipsoidales o fusiformes, sin apéndices, casi redondeadas',
    '1 cuerno largo en la epiteca, 2 ó 3 en la hipoteca',
    'Células cilindricas-fusiformes, elongadas',
    'Células sin procesos',
    'Con procesos, es decir, con ápices a veces prolongados en forma de brazos',
    'Células unidas en pares, con poca ornamentación',
    'Con células vegetativas y heterocistos terminales o intercalares',
    'Células cortas cilíndricas o discoides (siempre más cortas que anchas)',
    'Células con diferenciación basal, en algunas especies',
    'Células sin diferenciación basal distal',

    'Células con cingulo y sulco',
    'Extremos agudos, redondeados o truncados',
    'Hemicélulas de contornos variables, elípticas',
    'Hemicélulas en general con 5 lóbulos (algunas veces 3)',
    'Hemicélulas fusiformes, o poligonales en vista polar',
    'Isopolares,',
    'Células con granulación fina o con gránulos solitarios'
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

    var msFormaCelula = $('#formaCelula').magicSuggest({
        allowFreeEntries: true,
        data: dataFormaCelula,
        typeDelay: 0
    });
    $(msFormaCelula).on('selectionchange', function(e,m){
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