<?php
require('dbUtil.php');

$con = new ConectorBD();

if ($con->initConexion('schedule_db')=='OK') {

    echo "Se realizo la conexión";

   $data[0]['nombre'] = "'Fabian'";
   $data[0]['password'] = "'".password_hash("123456", PASSWORD_DEFAULT)."'";
   $data[0]['birthdate'] = "'2017-07-30'";
   $data[0]['email'] = "'fabian@mail.com'";

   $data[1]['nombre'] = "'FD'";
   $data[1]['password'] = "'".password_hash("123456", PASSWORD_DEFAULT)."'";
   $data[1]['birthdate'] = "'2017-07-19'";
   $data[1]['email'] = "'fd@mail.com'";

   $data[2]['nombre'] = "'Fabian Duarte'";
   $data[2]['password'] = "'".password_hash("123456", PASSWORD_DEFAULT)."'";
   $data[2]['birthdate'] = "'2017-07-31'";
   $data[2]['email'] = "'fabian.duarte@mail.com'";

   foreach ($data as $key => $values) {
     if ($con->insertData('user', $values)) {
       echo "Se inserto los datos del usuario correctamente";
     }else echo "Se ha producido un error en la inserción";
   }

  $con->cerrarConexion();

}else {
  echo "Se presentó un error en la conexión";
}


 ?>
