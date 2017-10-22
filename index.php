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
                <label for="nivelOrganizacion">Nivel de organización</label>
                <select id="nivelOrganizacion" name="nivelOrganizacion" class="form-control" />
                    <option value=""></option>
                    <option value="Colonia">Colonia</option>
                    <option value="Solitarias">Solitarias</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formaCelula">Forma de la célula</label>
                <input id="formaCelula" name="formaCelula" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="forma">Forma</label>
                <input id="forma" name="forma" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="paredCelularOrnamentaciones">Pared Celular/Ornamentaciones</label>
                <input id="paredCelularOrnamentaciones" name="paredCelularOrnamentaciones" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="nCloroplastosForma">N°de Cloroplastos/Forma</label>
                <input id="nCloroplastosForma" name="nCloroplastosForma" class="form-control" />
            </div>
            <div class="form-group">
                <label for="Pirenoides">Pirenoides</label>
                <input id="Pirenoides" name="Pirenoides" class="form-control" />
            </div>
        </form>
    </div>

    <div class="col-md-9 algaelist">
        <!-- <div class="row">
            <div class="col-md-4">
                <div>
                    <a href="javascript:void();"><img src="images/fotos/Asterionella/thumbnail.jpg" alt="" class="img-responsive img-rounded"></a>
                </div>
                <div>
                    <h4><a href="javascript:void();">Asterionella</a></h4>
                </div>
            </div>
            <div class="col-md-4"><img src="images/fotos/Ceratium/thumbnail.jpg" alt="" class="img-responsive img-rounded"></div>
            <div class="col-md-4"><img src="images/fotos/Closterium/thumbnail.jpg" alt="" class="img-responsive img-rounded"></div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-md-4"><img src="images/fotos/Cosmarium/thumbnail.jpg" alt="" class="img-responsive img-rounded"></div>
            <div class="col-md-4"><img src="images/fotos/Melosira/thumbnail.jpg" alt="" class="img-responsive img-rounded"></div>
            <div class="col-md-4"><img src="images/fotos/Micrasterias/thumbnail.jpg" alt="" class="img-responsive img-rounded"></div>
        </div> -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>