<?php
include "db_chat.php";

$q = "SELECT * FROM `msg`";

if ($rq = mysqli_query($db, $q)) {

  if (mysqli_num_rows($rq) > 0) {

    while ($data = mysqli_fetch_assoc($rq)) {
      if($data["celular"]==$_SESSION["celular"]){
?>
    <p class="sender">
        <span><?= $data["celular"] ?></span>
        <?= $data["msg"] ?>
    </p>

<?php
      }else{
?>
  <p>
    <span><?= $data["celular"] ?></span>
    <?= $data["msg"] ?>
</p>

<?php
      }
    }
  } else {

    echo "<h3> El chat está vacío en este momento!!</h3>";
  }
}
?>