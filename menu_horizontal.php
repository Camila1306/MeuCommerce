<a class="btn btn-success" href="?pagina=sacola">
    Sacola

    <?php if (isset($_SESSION['sacola'])) {
        echo '(' . count($_SESSION['sacola']) . ')';
    } ?>
</a>
<?php if (isset($_SESSION['autenticado'])) { ?>
<a class="btn btn-info" href="?pagna=meus_pedidos">Meus Pedidos</a>
<?php }
?>