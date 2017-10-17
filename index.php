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

<div class="row">
    <div class="col-md-3">
        <h2>Application uses</h2>
        <ul>
            <li>Sample pages using ASP.NET Core MVC</li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=518004">Bower</a> for managing client-side libraries</li>
            <li>Theming using <a href="https://go.microsoft.com/fwlink/?LinkID=398939">Bootstrap</a></li>
        </ul>
    </div>
    <div class="col-md-3">
        <h2>How to</h2>
        <ul>
            <li><a href="https://go.microsoft.com/fwlink/?LinkID=398600">Add a Controller and View</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=699315">Manage User Secrets using Secret Manager.</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=699316">Use logging to log a message.</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=699317">Add packages using NuGet.</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=699318">Add client packages using Bower.</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=699319">Target development, staging or production environment.</a></li>
        </ul>
    </div>
    <div class="col-md-3">
        <h2>Overview</h2>
        <ul>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=518008">Conceptual overview of what is ASP.NET Core</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=699320">Fundamentals of ASP.NET Core such as Startup and middleware.</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=398602">Working with Data</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkId=398603">Security</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkID=699321">Client side development</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkID=699322">Develop on different platforms</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkID=699323">Read more on the documentation site</a></li>
        </ul>
    </div>
    <div class="col-md-3">
        <h2>Run &amp; Deploy</h2>
        <ul>
            <li><a href="https://go.microsoft.com/fwlink/?LinkID=517851">Run your app</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkID=517853">Run tools such as EF migrations and more</a></li>
            <li><a href="https://go.microsoft.com/fwlink/?LinkID=398609">Publish to Microsoft Azure Web Apps</a></li>
        </ul>
    </div>
</div>
<?php include('footer.php'); ?>