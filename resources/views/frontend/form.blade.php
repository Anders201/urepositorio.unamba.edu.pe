<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="colorlib.com">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up Form</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="css/form.css">
</head>

<body>


  <div class="main">

    <div class="container">
      <form method="POST" id="signup-form" class="signup-form" action="#">
        <div>
          <h3>Aceptar terminos</h3>
          <fieldset>
            <h2>Importante leer antes de cometer errores</h2>
            <div class="fieldset-content">
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" />
                <span class="text-input">Example: <span>Jeff@gmail.com</span></span>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">No es función de la unidad de repositorio de revisar en todo su extremo la tesis, esa es responsabilidad de Usted, su asesor, jurados y la Unidad de Investigación, sin embargo a pesar de estos filtros a la fecha existen muchas tesis rechazadas, este despacho verifica aleatoriamente el formato y estilo de redacción, caso no este bien será rechazado y si reincide se aplica el <a href="https://drive.google.com/file/d/1FNXxEnW_zWmuuFhHJ7tW2AqECUwekjBc">reglamento</a> y se devuelve su expediente para que presente un nuevo empastado con informe al VRIN.</label>
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions" value="checkedValue">
                  Estoy de acuerdo
                </label>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">He leìdo y ajustado al formato oficial de la UNAMBA el cual lo vi y descargue de aquí ===> <a href="https://drive.google.com/file/d/1AjvGv7n6EzPf2cUb3ugRNSDbL3uRUf4C">Tesis cuantitativo</a> o ====> <a href="https://drive.google.com/file/d/12nIxxRgELEXMPkA3j8Y8ChVGkHIw-xPK">Tesis cualitativo</a></label>
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions" value="checkedValue">
                  Si he ajustado
                </label>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">He leído los errores más comunes que se presentan a la hora de presentar las tesis cuyo link esta aquí : <a href="https://drive.google.com/file/d/10yNnvHp4i4srIA9KCfxZRBxby6F6DYkE">ERRORES COMUNES EN DIAGRAMACION</a></label>
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions" value="checkedValue">
                  Si he leido
                </label>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Estoy informado que el trámite es virtual, existe un página de seguimiento para ver mi tramite, que el procedimiento para otorgar la constancia es de 5 días hábiles y hay grupo de WhatsApp para consultas dentro del horario laboral (vrin.unamba.edu.pe ver repositorio)</a></label>
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="terms_and_conditions" id="terms_and_conditions" value="checkedValue">
                  Si estoy informado
                </label>
              </div>
            </div>
          </fieldset>


          <h3>Informaciòn Personal </h3>
          <fieldset>
            <h2>Datos personales</h2>
            <div class="fieldset-content">
              <div class="form-row">
                <label class="form-label">Nombres y Apellidos:</label>
                <div class="form-flex">
                  <div class="form-group">
                    <input type="text" name="first_name" id="first_name" />
                    <span class="text-input">Nombres</span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="last_name" id="last_name" />
                    <span class="text-input">Apellidos</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="dni" class="form-label">Nùmero DNI</label>
                <input type="text" name="dni" id="dni" />
                <span class="text-input">Ejemplo:<span> 12345678</span></span>
              </div>
              <div class="form-group">
                <label for="phone" class="form-label">Nùmero de contacto:</label>
                <input type="text" name="phone" id="phone" />
              </div>

              <div class="form-group">
                <label for="terms" class="form-label">Escuela Profesional</label>
                <select name="terms" id="terms" class="form-select">
                  <option value="" selected disabled>ELIGE</option>
                  <option value="administracion">Administración</option>
                  <option value="educacion_inicial">Educación Inicial Intercultural Bilingüe: Primera y Segunda Infancia</option>
                  <option value="ciencia_politica">Ciencia Política y Gobernabilidad</option>
                  <option value="ingenieria_agroindustrial">Ingeniería Agroindustrial</option>
                  <option value="ingenieria_agroecologica">Ingeniería Agroecológica y Desarrollo Rural</option>
                  <option value="ingenieria_civil">Ingeniería Civil</option>
                  <option value="ingenieria_informatica">Ingeniería Informática y Sistemas</option>
                  <option value="ingenieria_minas">Ingeniería de Minas</option>
                  <option value="medicina_veterinaria">Medicina Veterinaria y Zootecnia</option>
                  <option value="maestria_educacion">Maestría en Educación con Mención en Administración Educativa</option>
                </select>
              </div>

            </div>
          </fieldset>

          <h3>Informaciòn Asesor </h3>
          <fieldset>
            <h2>Sobre el asesor</h2>
            <div class="fieldset-content">
              <div class="form-row">
                <label class="form-label">Nombres y Apellidos:</label>

                <div class="form-group">
                  <input type="text" name="first_name" id="first_name" />
                  <span class="text-input">Nombres</span>
                </div>
                <div class="form-group">
                  <input type="text" name="last_name" id="last_name" />
                  <span class="text-input">Apellidos</span>
                </div>

              </div>
              <div class="form-group">
                <label for="dni" class="form-label">Nùmero DNI</label>
                <input type="text" name="dni" id="dni" />
                <span class="text-input">Ejemplo:<span> 12345678</span></span>
              </div>
              <div class="form-group">
                <label for="phone" class="form-label">Nùmero de contacto:</label>
                <input type="text" name="phone" id="phone" />
              </div>

            </div>
          </fieldset>

          <h3>Set Financial Goals</h3>
          <fieldset>
            <h2>Set Financial Goals</h2>
            <p class="desc">Set up your money limit to reach the future plan</p>
            <div class="fieldset-content">
              <div class="donate-us">
                <div class="price_slider ui-slider ui-slider-horizontal">
                  <div id="slider-margin"></div>
                  <p class="your-money">
                    Your money you can spend per month :
                    <span class="money" id="value-lower"></span>
                    <span class="money" id="value-upper"></span>
                  </p>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </form>
    </div>

  </div>

  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
  <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
  <script src="vendor/minimalist-picker/dobpicker.js"></script>
  <script src="vendor/nouislider/nouislider.min.js"></script>
  <script src="vendor/wnumb/wNumb.js"></script>
  <script src="js/form.js"></script>
</body>

</html>