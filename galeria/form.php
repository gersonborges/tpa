<?php
if ( isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<form action="./upload.php" method="post" enctype="multipart/form-data">

    <br>
    Selecionar imagem para carregar:
    <input type="file" name="foto" id="foto">
    <input type="submit" value="Upload Image" name="submit">
</form>
