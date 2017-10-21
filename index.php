<?php include('header.php'); ?>

<div class="row" style="margin-top:30px;">
    <div class="col-md-3">
        <form id="frmSearch">
            <div class="form-group">
                <label for="nivelOrganizacion">Nivel de organización</label>
                <select id="nivelOrganizacion" name="nivelOrganizacion" class="form-control" />
                    <option value=""></option>
                    <option value="Unicelular">Unicelular</option>
                    <option value="Colonia">Colonia</option>
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

    <div class="col-md-9">
        <div class="row">
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
        </div>
    </div>
</div>

<?php include('footer.php'); ?>