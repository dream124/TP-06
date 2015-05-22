<h2><?php echo $title ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['titre_article'] ?></h3>
        <div class="main">
                <?php echo $news_item['texte_libre'] ?>
        </div>
        <p><a href="<?php echo $news_item['Id_article'] ?>">View article</a></p>

<?php endforeach ?>