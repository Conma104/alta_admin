<?php if(\System\Core\Session::has('success')) {} { ?>

    <div class="alert alert-success" role="alert">
        <?=\System\Core\Session::get('error')?>
    </div>

<?php } ?>


<?php if(\System\Core\Session::has('error')) {} { ?>

<div class="alert alert-danger" role="alert">
    <?=\System\Core\Session::get('error')?>
</div>

<?php } ?>