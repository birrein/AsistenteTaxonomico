var dataFormaCelula = [
    'Frústulo de sílice constituído por 2 valvas',
    'Valvas largas y estrechas con ápices capitados',
    'Valvas alargadas con extremos capitados',
    'Globulosas',
    'Alargadas',
    'Elipsoidales',
    'Fusiformes',
    'Sin apéndices',
    'Casi redondeadas',
    'Aplastada',
    'Sin istmo (constricción media profunda)',
    'Más largas que anchas',
    'Cilíndricas',
    'Variables en la razón alto-ancho',
    'Robustas',
    'Forma de barril',
    'Embebida en un grueso y copioso mucílago',
    'Células adyacentes unidas',
    'Células terminales con o sin cofia',
    'Uninucleadas',
    'Cortas o largas',
    'Células iguales'
];
var dataForma = [
    'Colonia estrellada',
    'raramente en zigzag',
    'unidas a través de la cara valvar',
    'en la zona basal presentan una almohadilla de mucílago',
    'Colonias constituídas por 4 a 8 células',
    'libre flotante',
    'Colonia en zigzag',
    'algunas veces con formas de estrellas',
    'Colonias tipo cenobio',
    'esféricas',
    'gelatinosas',
    'de no más de 1 mm de diámetro con 4 a 32  células incrustadas en el mucílago',
    'Colonia tipo cenobio-consorcio',
    'dispuestas linealmente',
    'alternando en 2 a 3 filas',
    'Células solitarias',
    'con tecas (epiteca e hipoteca)',
    'forma de medialuna',
    'raramente en cadenas variables en tamaño',
    'usualmente más largas que anchas',
    'de tamaño variable',
    'de contorno subcircular',
    'generalmente muy comprimidas y profundamente contraídas en la parte media',
    'usuamente de simetría radial y contraídas en la región media',
    'Colonia tipo filamento',
    'uniseriados',
    'con frústulos formando largas colonias unidos por la cara valvar',
    'los filamentos siempre se presentan en vista conectival',
    'agrupado en cenobio',
    'enrrollados y entrelazados',
    'matriz gelatinosa',
    'menbranosa o irregularmente lobulada',
    'globulada',
    'gruesa y firme',
    'solitarios o agregados',
    'derechos o flexibles',
    'contraídos o no a través de tabiques transversales',
    'Desprovistos de vaina y ocacionalmente pueden presentar vainas, hialinas finas o mucosas',
    'con filamento uniseriado libre flotante en estado adulto',
    'En estado juvenil presenta filamento fijo sin célula ápical diferenciada',
    'con filamentos uniseriados entrelazados formando grandes madejas',
    'con filamentos simples, uniseriado, a veces con rizoides en la base',
    'con filamentos no ramificados'
];
var dataParedCelularOrnamentaciones = [
    'Sílice',
    'Pared celular lisa',
    'de celulosa', 
    'Pared lisa o verrucosa',
    'Tecas con placas con poros',
    'lisas a densamente ornamentadas',
    'Pared lisa o con estrías o costas longitudinales',
    'Pared lisa, punctada, excroviculada, verrucosa o papilosa',
    'Pared lisa o con poros/escrobiculaciones o espinas',
    'Pared lisa, punctada, escrobiculada, granulada o con espinas',
    'Ausente',
    'Sin pared',
    'Pared delgada a gruesa raramente presenta tabiques en forma de H en sección óptica longitudinal',
    'Pared celular con dos capas internas',
    'Pared celular de dos capas con celulosa interna',
    'capa externa de mucílago que hace filamentos muy viscosos',
    'capa externa de mucílago'
];

$(function() {
    loadTbody();

    $("#clase, #nivelOrganizacion").change(function() {
        loadTbody();
    });

    var msFormaCelula = $('#formaCelula').magicSuggest({
        allowFreeEntries: false,
        data: dataFormaCelula,
        typeDelay: 0
    });
    $(msFormaCelula).on('selectionchange', function(e,m){
        loadTbody();
    });

    var msForma = $('#forma').magicSuggest({
        allowFreeEntries: false,
        data: dataForma,
        typeDelay: 0
    });
    $(msForma).on('selectionchange', function(e,m){
        loadTbody();
    });

    var msParedCelularOrnamentaciones = $('#paredCelularOrnamentaciones').magicSuggest({
        allowFreeEntries: false,
        data: dataParedCelularOrnamentaciones,
        typeDelay: 0
    });
    $(msParedCelularOrnamentaciones).on('selectionchange', function(e,m){
        loadTbody();
    });

    $('.algaelist').on('click', '.showAlgaeInfo', function () {
        var genero = $(this).data('genero');
        $('#myModalLabel').text(genero);
        $('#myModal').modal('show');
    });
});

function loadTbody()
{
    $.ajax({
        url: "xhrLoadTbody.php",
        data: $("#frmSearch").serializeArray(),
        // dataType: "dataType",
    }).done(function(d) {
        $(".algaelist").html(d);
    });
}