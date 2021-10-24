<?php
    require_once("../FX/navbar.php");
?>
<!-- INICIO -->
    <BR>
    </BR>
    <div class="container col-lg-6 justify-content-end border border-dark">
        <br>
        <h2>Contactenos para tener más Información</h2>
        <hr>
        <!-- nombres apellidos -->
        <div class="">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="">
                            <label for="Nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="" placeholder="Nombres">   
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label for="Apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="" placeholder="Apellidos">
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <br>
        <!-- Correo  telefono-->
        <div class="">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="">
                            <label for="Teléfono" class="form-label">Teléfono</label>
                            <input type="number" class="form-control" id="" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label for="Correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="" placeholder="Correo">
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <br>
        <!--NIT/identeficacion nombre empresa  -->
        <div class="">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="">
                            <label for="Nit" class="form-label">NIT/Identeficacion</label>
                            <input type="number" class="form-control" id="" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label for="NombreEmpresa" class="form-label">Nombre de la Empresa</label>
                            <input type="text" class="form-control" id="" placeholder="Nombre de la Empresa">
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <br>
        <!-- Asunto -->
        <div class="">
            <div class="container">
                <label for="asunto" class="form-label">Asunto</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Escoge una opción</option>
                    <option value="3">Soporte</option>
                    <option value="3">Planes y Precios</option>
                    <option value="1">Conocer más sobre nuestros Servicios</option>
                    <option value="2">Consulta con un asesor</option>
                    <option value="3">Otros</option>
                </select>
            </div>
        </div>
        <br>     
        <!-- Descripcion -->
        <div class="">
            <div class="container">
                <label for="Descripcion" class="form-label">Descripcion del asunto</label>
                <textarea class="form-control" id="descripcion" rows="3"></textarea>
            </div>
        </div>
        <br>
        <!-- Terminos y condicones -->
        <div class="">
            <div class="container ">
                <center>
                <div class="form-check-center">
                    <input class="form-check-input" type="checkbox" value="" id="terminos">
                    <label class="form-check-label" for="terminos">
                        Aceptar terminos y condiciones
                    </label>
                </div>
                </center>
            </div>
        </div>
        <br>
        <!-- botones -->
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-danger form-control  btn-block">Cancelar</button>
                    </div>
                    <div class="col">
                        <button id="btnSubmit" class="btn btn-outline-primary form-control btn-block" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
    <br>
<!-- FIN -->
<br>
<?php
    require_once("../FX/footer.php");
?>
<?php
    require_once("../FX/navbar.php");
?>