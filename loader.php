<?php
//CONNECT TO DB
require_once "db.php";
//QUERYS FROM DB
include 'queries.php'
?>

<h2>Nueva Tarea</h2>
<!-- <form action="" method="post" class="form_info" onsubmit="event.preventDefault()"> -->
<form action="task_create.php" method="" class="form_info" id="loader__form">

  <hr />

  <div class="form_title">  
    <h3>Datos del servicio:
    <?php
      //GET LAST TASK ID FROM DB AND SET THE CURRENT ONE
      if ($mysql_task_id_results->num_rows > 0) {
          while ($line = $mysql_task_id_results->fetch_assoc()) {
            echo ' ' . sprintf("%'.04d\n", $line['id'] + 1);
            echo '<input name="task_id" id="task_id" value="' . $line['id'] + 1 . '"';
          }
      } else {
        echo ' ' . sprintf("%'.04d\n", 1);
      }
    ?>
    </h3>
    <h3>
      <select name="task_stauts" id="loader_status__select">
      <?php
      //POPULATE TASK STATUS FROM DB
        if ($mysql_taskstatus_results->num_rows > 0) {
            while ($line = $mysql_taskstatus_results->fetch_assoc()) {
              echo '<option value="' . $line['id'] . '">' . $line['description'] . '</option>';
            }
        } 
      ?>
      </select>
      </h3>
  </div>

  <div class="task_info">
    <div>
      <span>Tipo:</span>
      <select name="task_type" id="task_type">
      <?php
      //POPULATE TASK TYPE FROM DB
      if ($mysql_task_types_results->num_rows > 0) {
          while ($line = $mysql_task_types_results->fetch_assoc()) {
              echo '<option value="' . $line['id'] . '">' . $line['description'] . '</option>';
          }
      }
      ?>
      </select>
    </div>

    <div>
      <span>Técnico:</span>
      <select name="technician" id="technician">
      <?php
      //POPULATE TECHNICIANS FROM DB
      if ($mysql_technicians_results->num_rows > 0) {
          while ($line = $mysql_technicians_results->fetch_assoc()) {
              echo '<option value="' . $line['id'] . '">' . $line['name'] . ' ' . $line['lastname'] .  '</option>';
          }
      }
      ?>
      </select>
    </div>

    <div><span>Fecha:</span><input type="date" name="date" /></div>

    <div>
      <span>Hora:</span>
      <select name="hour" id="">
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09" selected>09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
      </select>
      <select name="minute" id="">
        <option value="00" selected>00</option>
        <option value="15">15</option>
        <option value="30">30</option>
        <option value="45">45</option>
      </select>
    </div>

    <div>
      <span>Duración:</span>
      <select name="duration" id="">
        <option value="1">1</option>
        <option value="2" selected>2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
      <span>Horas</span>
    </div>
  </div>

  <div class="payment_info">
    <div>
      <span>Cargo:</span>
      <select name="task_charge" id="task_charge">
      <?php
      //POPULATE CHARGES FROM DB
      if ($mysql_charges_results->num_rows > 0) {
          while ($line = $mysql_charges_results->fetch_assoc()) {
              echo '<option value="' . $line['id'] . '">' . $line['description'] . '</option>';
          }
      }
      ?>
      </select>
    </div>

    <div>
      <span>Cobrar:</span>
      <select name="collect_currency" id="collect_currency">
      <?php
      //POPULATE CURRENCIES FROM DB
      if ($mysql_currency_results->num_rows > 0) {
          while ($line = $mysql_currency_results->fetch_assoc()) {
              echo '<option value="' . $line['id'] . '">' . $line['symbol'] . '</option>';
          }
      }
      ?>
      </select>
      <input type="number" name="collect" id="collect" min="0" value="0" />
    </div>

    <div>
      <span>Valor:</span>
      <select name="cost_currency" id="cost_currency">
        <?php
        //POPULATE CURRENCIES FROM DB
        if ($mysql_currency1_results->num_rows > 0) {
          while ($line = $mysql_currency1_results->fetch_assoc()) {
              echo '<option value="' . $line['id'] . '">' . $line['symbol'] . '</option>';
          }
        }
        ?>
      </select>
      <input type="number" name="cost" id="cost" min="0" value="0" />
    </div>

    <div>
      <span>Adicionales:</span><input type="text" name="additional" id="additional" />
    </div>
  </div>

  <hr />

  <h3>Datos del cliente</h3>

  <div class="customer_info">
    <div><span>Nombre:</span><input type="text" name="name" id="name" /></div>

    <div><span>Teléfono:</span><input type="tel" name="telephone" id="telephone" /></div>

    <div>
      <span>Zona:</span>
      <select name="zone" id="zone">
        <?php
        //POPULATE CURRENCIES FROM DB
        if ($mysql_zones_results->num_rows > 0) {
          while ($line = $mysql_zones_results->fetch_assoc()) {
              echo '<option value="' . $line['zone_id'] . '">' . $line['zone_name'] . '</option>';
          }
        }
        ?>
      </select>
    </div>

    <div><span>Dirección:</span><input type="text" name="address" id="address" /></div>
  </div>
  
  <div class="customer_info">

    <div><span>Lote/Unidad:</span><input type="text" name="address2" id="address2" /></div>

    <div>
      <span>Requiere Documentación:</span>
      <input type="checkbox" name="documentation" />
    </div>
           
    <div><span>Comentarios:</span><input name="comments" id="comments" /></div>
  </div>

  <div class="system_info">
    <div><span>Cliente:</span><input type="text" name="hansa_id" id="hansa_id" /></div>

    <div><span>Remito:</span><input type="text" name="hansa_delivery" id="hansa_delivery" /></div>

    <div><span>Factura:</span><input type="text" name="hansa_invoice" id="hansa_invoice" /></div>

    <div><span>OS:</span><input type="text" name="hansa_service" id="hansa_service" /></div>

    <div>
      <span>Canal:</span>
      <select name="channel" id="channel">
      <?php
      //POPULATE CHANNELS FROM DB
      if ($mysql_channels_results->num_rows > 0) {
          while ($line = $mysql_channels_results->fetch_assoc()) {
              echo '<option value="' . $line['id'] . '">' . $line['description'] . '</option>';
          }
      }
      ?>
      </select>
    </div>

    <div>
    <span>Contacto:</span>
      <select name="contact" id="contact">
        <option selected disabled>Sin especificar</option>
      </select>
    </div>
  </div>

  <hr />

  <h3>Datos de la cerradura</h3>
  <?php
    $i = 1;
    while ($i <= 10):
  ?>
  <div class="lock_info" id="lock_<?php echo $i ?>">
    <div class="lock_info__brand">
      <span>Marca:</span>
      <select name="brand_<?php echo $i ?>" id="brand_<?php echo $i ?>">
        <option value="" selected>Seleccione</option>
        <?php
          $sql5 = "SELECT * FROM lock_brands";
          $results5 = $conn->query($sql5);
          if ($results5->num_rows > 0) : while ($line = $results5->fetch_assoc()):
        ?>
        <option value="<?php echo $line['id'] ?>"><?php echo $line['brand'] ?></option>
        <?php endwhile; endif; ?>
      </select>
    </div>

    <div class="lock_info__model">
      <span>Modelo:</span>
      <select name="model_<?php echo $i ?>" id="model_<?php echo $i ?>">
        <option value="" selected>Indique Marca</option>
      </select>
    </div>

    <div class="lock_info__serial">
      <span>Serie:</span>
      <input type="text" name="serial_<?php echo $i ?>" />
    </div>

    <div class="lock_info__delivery">
      <span>Llevar:</span>
      <input type="checkbox" name="delivery_<?php echo $i ?>" />
    </div>

    <div class="lock_info__taken">
      <span>Retirada:</span>
      <input type="checkbox" name="taken_<?php echo $i ?>" />
    </div>

    <div class="lock_info__extra">
      <span>Extra</span>
      <input type="checkbox" name="extra_<?php echo $i ?>" />
    </div>

    <div class="lock_info__add">
      <button id="lock_button_<?php echo $i ?>" type="button"> + </button>
      <button id="lock_button1_<?php echo $i ?>" type="button"> - </button>
    </div>
  </div>
  <?php
    $i++;
    endwhile;
    $conn->close();
  ?>

  <input type="submit" value="Guardar" id="loader_submit__button"/>
</form>
<script src="./scripts/showlocks.js"></script>
<script src="./scripts/fetch_contacts.js"></script>
<script src="./scripts/fetch_models.js"></script>
<script src="./scripts/update_buttons.js"></script>