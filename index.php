<?php include('header.php'); ?>

<div class="row">
            <h4></h4>
            <hr />
    <form id="frmSearch">
        <div class="col-md-4">
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
            <button type="button" id="btnBuscar" class="btn btn-default">Buscar</button>
        </div>
        <div class="col-md-4">
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
        </div>
    </form>
</div>

<div class="row" style="margin-top:50px;">
    <div class="col-md-12">
        <table class="table table-condensed tableResult">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Genero</th>
                <th>Familia</th>
                <th>Clase</th>
                <th>Tamaños referenciales</th>
                <th>Nivel de organización</th>
                <th>Formas</th>
                <th>Forma Célula Car. 1</th>
                <th>Forma Célula Car. 2</th>
                <th>Forma Célula Car. 3</th>
                <th>Pared celular/Ornamentaciones</th>
                <th>Nº de Cloroplastos/Forma</th>
                <th>Pirenoides</th>
            </tr>
        </thead>
        <tbody id="tbodyResult">
        </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>