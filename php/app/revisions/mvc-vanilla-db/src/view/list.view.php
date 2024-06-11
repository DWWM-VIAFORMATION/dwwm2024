<!-- /src/view/list.view.php -->
<ul>
<?php
foreach ($params['recettes'] as $key => $recette) {?>
    <li><?=$recette->getTitre()?> <a href="/show/<?=$recette->getId()?>">voir</a> </li>
<?php }
?>
</ul>