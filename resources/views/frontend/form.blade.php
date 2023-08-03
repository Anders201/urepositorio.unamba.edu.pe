<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/formulario.css') }}" />

    <title>Registro Tramite Repositorio</title>
</head>

<body>
    <!------------ Formulario----------------------------------------------------------------------- Steps -->
    <form method="POST" enctype="multipart/form-data" class="form" id="data-form" action="{{ route('formulario.store') }}">
        @csrf
        <h1 class="text-center">Formulario de Registro</h1>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active"data-title="Terminos y Condiciones"></div>
            <div class="progress-step" data-title="Informacion Personal"></div>
            <div class="progress-step" data-title="Informacion del Asesor"></div>
            <div class="progress-step" data-title="Archivos Requeridos"></div>
        </div>

        <!------------ Primera pagina del formulario----------------------------------------------------------------------- Steps -->
        <div class="form-step form-step-active">
            <h3 class="fs-subtitle">Leer atentamente, evite errores.</h3>
            <div class="input-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" >
            </div>

            <div class="input-group">
                <label>No es función de la unidad de repositorio de revisar en todo su extremo la tesis, esa es
                    responsabilidad de usted, su asesor, jurados y la Unidad de Investigación, sin embargo a pesar de
                    estos filtros a la fecha existen muchas tesis rechazadas, este despacho verifica aleatoriamente el
                    formato y estilo de redacción, caso no este bien será rechazado y si reincide se aplica el <a
                        href="https://drive.google.com/file/d/1FNXxEnW_zWmuuFhHJ7tW2AqECUwekjBc">reglamento</a> y se
                    devuelve su expediente para que presente un nuevo empastado con informe al VRIN.</label><br>
                <div style="display: inline-flex; align-items: center;">
                    <input type="checkbox" name="TyC01" id="TyC01">
                    <label>Estoy de acuerdo.</label>
                </div>
            </div>
            <hr style="border:1px solid rgb(0, 0, 0);">

            <div class="input-group">
                <label>He leìdo y ajustado al formato oficial de la UNAMBA, el cual vi y descargue de aquí ===> <a
                        href="https://drive.google.com/file/d/1AjvGv7n6EzPf2cUb3ugRNSDbL3uRUf4C">Tesis cuantitativa</a>
                    o ====> <a href="https://drive.google.com/file/d/12nIxxRgELEXMPkA3j8Y8ChVGkHIw-xPK">Tesis
                        cualitativa.</a></label><br>
                <div style="display: inline-flex; align-items: center;">
                    <input type="checkbox" name="TyC02" id="TyC02">
                    <label>Sí, he ajustado.</label>
                </div>
            </div>
            <hr style="border:1px solid rgb(0, 0, 0);">

            <div class="input-group">
                <label>Conozco los errores más comunes que se presentan a la hora de presentar las tesis cuyo link esta
                    aquí : <a href="https://drive.google.com/file/d/10yNnvHp4i4srIA9KCfxZRBxby6F6DYkE">ERRORES COMUNES
                        EN DIAGRAMACION.</a></label><br>
                <div style="display: inline-flex; align-items: center;">
                    <input type="checkbox" name="TyC03" id="TyC03">
                    <label>Sí, he leído.</label>
                </div>
            </div>
            <hr style="border:1px solid rgb(0, 0, 0);">

            <div class="input-group">
                <label>Tengo en conocimiento que el trámite es virtual y que existe un página de seguimiento para mi
                    tramite, que el procedimiento para otorgar la constancia es de 5 días hábiles y existe un grupo de
                    WhatsApp para consultas dentro del horario laboral <a
                        href="https://vrin.unamba.edu.pe/repositorio-institucional.html">vrin.unamba.edu.pe ver
                        repositorio.</a></label><br>
                <div style="display: inline-flex; align-items: center;">
                    <input type="checkbox" name="TyC04" id="TyC04">
                    <label>Sí, estoy informado.</label>
                </div>
            </div>

            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Siguiente</a>
            </div>
        </div>

        <!-----------Segunda pagina del formulario----------------------------------------------------------------------- Steps -->


        <div class="form-step">
            <h3 class="fs-subtitle">Estos datos seran usados en su constancia.</h3>
            <div class="input-group">
                <label>Nombres</label>
                <input type="text" name="nombre" id="nombre" />
            </div>
            <div class="input-group">
                <label>Apellidos</label>
                <input type="text" name="apellido" id="apellido" />
            </div>

            <div class="input-group">
                <label>Número de DNI</label>
                <input type="text" name="dni" id="dni" />
            </div>

            <div class="input-group">
                <label>Numero de Contacto</label>
                <input type="text" name="telefono" id="telefono" />
            </div>

            <div class="input-group">
                <label>Escuela Profesional</label>
                <select name="escuela" id="escuela" class="form-select">
                    <option value="" selected disabled>Seleccione la escuela a la que pertenece</option>
                    <option value="administracion">Administración</option>
                    <option value="educacion_inicial">Educación Inicial Intercultural Bilingüe: Primeray Segunda
                        Infancia</option>
                    <option value="ciencia_politica">Ciencia Política y Gobernabilidad</option>
                    <option value="ingenieria_agroindustrial">Ingeniería Agroindustrial</option>
                    <option value="ingenieria_agroecologica">Ingeniería Agroecológica y Desarrollo Rural</option>
                    <option value="ingenieria_civil">Ingeniería Civil</option>
                    <option value="ingenieria_informatica">Ingeniería Informática y Sistemas</option>
                    <option value="ingenieria_minas">Ingeniería de Minas</option>
                    <option value="medicina_veterinaria">Medicina Veterinaria y Zootecnia</option>
                    <option value="maestria_educacion">Maestría en Educación con Mención en Administración Educativa
                    </option>
                </select>
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Anterior</a>
                <a href="#" class="btn btn-next">Siguiente</a>
            </div>
        </div>

        <!-----------tercera pagina del formulario----------------------------------------------------------------------- Steps -->

        <div class="form-step">
            <h3 class="fs-subtitle">Datos exigidos sobre el asesor</h3>

            <div class="input-group">
                <label>Existe una nueva disposición de Alicia para el registro de datos sobre el asesor los cuales están
                    detallados en el siguiente link: <a
                        href="http://repositorio.concytec.gob.pe/bitstream/20.500.12390/2174/3/olivares_pc-GuiaAlicia%202020.pdf">http://repositorio.concytec.gob.pe/bitstream/20.500.12390/2174/3/olivares_pc-GuiaAlicia%202020.pdf</a>
                </label>
                <img  src="{{ asset('frontend/assets/img/form/datosase.jpg') }}" style="width: 70%;" class="form-image">
            </div>

            <div class="input-group">
                <label>Apellidos y Nombre del Asesor, para su verificación de la Tesis Final</label>
                <input type="text" name="asesor" id="asesor" />
            </div>

            <div class="input-group">
                <label>Número DNI del Asesor</label>
                <input type="text" name="asesor_dni" id="asesor_dni" />
            </div>

            <div class="input-group">
                <label>ORCID del Asesor <a href="https://orcid.org/ ">https://orcid.org/ </a></label>
                <input type="text" name="asesor_orcit" id="asesor_orcit" />
            </div>

            <div class="input-group">
                <label>Número DNI del Segundo Asesor</label>
                <input type="text" name="asesor2_dni" id="asesor2_dni" />
            </div>

            <div class="input-group">
                <label>ORCID del segundo Asesor <a href="https://orcid.org/ ">https://orcid.org/ </a></label>
                <input type="text" name="asesor2_orcit" id="asesor2_orcit" />
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Anterior</a>
                <a href="#" class="btn btn-next">Siguiente</a>
            </div>
        </div>



        <!-----------cuarta pagina del formulario----------------------------------------------------------------------- Steps -->

        <div class="form-step">
            <h3 class="fs-subtitle">REQUISITOS (escaneados en PDF).</h3>
            <label>Hoja de autorización llenada y firmada, (Apellidos Nombres autorizacion.pdf).</label>
            <label>Constancia de conformidad de empastado otorgado por la Unidad de Investigación (Apellidos Nombres
                autorizacion.pdf). </label>
            <label>Tesis con el mismo contenido presentado en la Unidad de Investigación, ojo para que no tenga
                problemas con SUNEDU, (apellidos Nombre Tesis.pdf).</label>
            <hr>
            <div class="input-group">
                <label>Nombre del Proyecto tesis/Trabajo de investigación.</label>
                <input type="text" name="nombre_proyecto" id="nombre_proyecto" />
            </div>

            <div class="input-group">
                <label>Envié Hoja de autorización de publicación escaneado en formato PDF (Apellidos Nombre Hoja.pdf max
                    1 MB, firmado y con su huella digital).</label>
                <input type="file" class="form-control-file" name="autorizacion_pdf" id="autorizacion_pdf" />
            </div>

            <div class="input-group">
                <label>Envié constancia de entrega de empastados otorgado por la Unidad de Investigación de su Facultad
                    (Apellidos Nombres Acta.pdf) max 1 MB.</label>
                <input type="file" class="form-control-file" name="constancia_pdf" id="constancia_pdf" />
            </div>

            <div class="input-group">
                <label>Tesis con el mismo contenido presentado en Unidad de Investigación, ojo para que no tenga
                    problemas más adelante con SUNEDU, (apellidos Nombre Tesis.pdf), TAMAÑO A4 y máximo 10 Mb.</label>
                <input type="file" class="form-control-file" name="tesis_pdf" id="tesis_pdf" />
            </div>

            <div class="input-group">
                <label>Tesis con el mismo contenido presentado en Unidad de Investigación, formato .doc o docx</label>
                <input type="file" class="form-control-file" name="tesis_doc" id="tesis_doc" />
            </div>
            
            <div class="input-group">
                <label>Observacion <br>En caso de estar publicada la Tesis escriba el link de la tesis.</label>
                <input type="text" name="observacion" id="observacion" />
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Anterior</a>
                <input type="submit" value="Enviar" class="btn" />
            </div>

        </div>
    </form>
</body>

</html>
<script src="{{ asset('frontend/assets/js/form/formulario.js') }}"></script>
