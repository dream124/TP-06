<h2><?php echo $titre ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('articles/create') ?>

    <label for="titre">Titre</label>
    <input type="input" name="titre" /><br />

    <label for="texte">Texte</label>
    <textarea name="texte"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>

