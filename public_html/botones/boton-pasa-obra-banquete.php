<?php function pasaObraBanquete($linkObra) {
echo'
<div class="pasa-obra">
  <a style="text-decoration: none; color: #e7dbc5" href="' . $linkObra . '">
    siguiente obra
  </a>
</div>';
}

?>
<style>
  .pasa-obra {
    position: absolute;
    bottom:0;
    right: 0px;
    font-family: monospace;
    background-color: #c14953;
    color: var(--color-titulo);
    border: solid 1px var(--color-titulo);
    padding: 5px;
    width: 150px;
    border-radius: 30px;
    cursor: pointer;
    text-align: center;
  }
</style>
