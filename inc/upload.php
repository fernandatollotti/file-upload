<?php

if(!empty($_FILES['file'])) {
  $files = $_FILES['file'];
  $names = $files['name'];
  $tmp_name = $files['tmp_name'];

  foreach($names as $index => $name) {
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $newName = uniqid() . '.' . $ext;

    move_uploaded_file($tmp_name[$index], '../uploads/' . $newName);
  }

  echo 'Upload feito com sucesso';
} else {
  echo 'Você não selecionou nenhum arquivo!';
}
