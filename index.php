<?php
include('header.php');
include('class.algae.php');
?>

<div class="row" style="margin-top:30px;">
    <div class="col-md-3">
        <form id="frmSearch">
            <div class="form-group">
                <label for="clase">Clase</label>
                <select id="clase" name="clase" class="form-control" />
                    <option value=""></option>
<?php
                    $clases = Algae::getClases();
                    foreach ($clases as $clase) {
                        echo "<option value='$clase'>$clase</option>";
                    }
?>
                </select>
            </div>
            <div class="form-group">
                <label for="nivelOrganizacion">Nivel de organizaci&oacute;n</label>
                <select id="nivelOrganizacion" name="nivelOrganizacion" class="form-control" />
                    <option value=""></option>
                    <option value="Colonia">Colonia</option>
                    <option value="Solitarias">Solitarias</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formaOrganizacion">Forma de la  organizaci&oacute;n</label>
                <input id="formaOrganizacion" name="formaOrganizacion" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="formaCelula">Forma de la c&eacute;lula</label>
                <input id="formaCelula" name="formaCelula" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="paredCelular">Pared celular</label>
                <select id="paredCelular" name="paredCelular" class="form-control" />
                    <option value=""></option>
<?php
                    $paredes = Algae::getParedCelularOpts();
                    foreach ($paredes as $pared) {
                        echo "<option value='".utf8_encode($pared)."'>".utf8_encode($pared)."</option>";
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label for="paredCelularOrnamentaciones">Ornamentaciones de la pared celular</label>
                <select id="paredCelularOrnamentaciones" name="paredCelularOrnamentaciones" class="form-control" />
                    <option value=""></option>
<?php
                    $ornamentaciones = Algae::getParedCelularOrnamentaciones();
                    foreach ($ornamentaciones as $ornamentacion) {
                        echo "<option value='".utf8_encode($ornamentacion)."'>".utf8_encode($ornamentacion)."</option>";
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label for="cloroplastosN">N&uacute;mero de cloroplastos</label>
                <select id="cloroplastosN" name="cloroplastosN" class="form-control" />
                    <option value=""></option>
<?php
                    $numeros = Algae::getNCloroplastosOpts();
                    foreach ($numeros as $numero) {
                        echo "<option value='".utf8_encode($numero)."'>".utf8_encode($numero)."</option>";
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label for="cloroplastosForma">Forma de cloroplastos</label>
                <select id="cloroplastosForma" name="cloroplastosForma" class="form-control" />
                    <option value=""></option>
<?php
                    $formas = Algae::getFormasCloroplastos();
                    foreach ($formas as $forma) {
                        echo "<option value='".utf8_encode($forma)."'>".utf8_encode($forma)."</option>";
                    }
?>
                </select>
            </div>

            <div class="form-group">
                <label for="pirenoides">Pirenoides</label>
                <select id="pirenoides" name="pirenoides" class="form-control" />
                    <option value=""></option>
<?php
                    $pirenoides = Algae::getPirenoides();
                    foreach ($pirenoides as $pirenoide) {
                        echo "<option value='".utf8_encode($pirenoide)."'>".utf8_encode($pirenoide)."</option>";
                    }
?>
                </select>
            </div>
        </form>
    </div>

    <div class="col-md-9">
        <div class="algaelist-title"><h3>G&eacute;nero</h3></div>
        <div class="algaelist"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalInfoLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalInfoLabel"></h4>
            </div>
            <div class="modal-body" id="myModalInfoBody">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog full-screen">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close-button">
                    <button type="button" class="close close-brn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div id="myModalBody"></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php include('footer.php'); ?>