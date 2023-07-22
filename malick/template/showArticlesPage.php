<?php ob_start();
    if (isset($request)){
        foreach ($request as $data){
            ?>
            <div class="mesarticles">
                <h3><?= htmlspecialchars($data['titre']) ?></h3>
                <p><?= nl2br(htmlspecialchars($data['contenu'])) ?></p>
            </div>
            <?php
        }
    }
    else
        echo 'Pas articles ';

    ?>

    <?php $content = ob_get_clean();
        $title = 'actuesp';
    ?>
    <?php require('template.php');  ?>
