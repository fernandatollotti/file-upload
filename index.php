<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagens</title>
  </head>
  <body>
    <form action="./inc/upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file[]" multiple>
      <button>Upload</button>
    </form>
  </body>
</html>