    <div class="container">
        <div class="inner">
            <?php echo $txt; ?>
        </div>

        <div class ="logo">
            <img src="<?php echo URL::base(); ?>./img/bookHeader.png" alt="" />

        </div>
        <div class="exit">
            <?php if($user !== false)
                    echo '<a href="'.URL::base().'auth/logout" class="button24" role="button" >Выход</a>  ';
            ?>
        </div>

    </div>