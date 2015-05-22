<?php foreach ($articles as $article): ?>
<h2><?php echo $article['titre_article'] ?></h2>
<div id="main">
<?php echo $article['texte_libre'] ?>
</div>
<p><a href="view/<?php echo $article['Id_article'] ?>">Voir article</a></p>
<?php endforeach ?>

