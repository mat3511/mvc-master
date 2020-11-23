<?php
/** @var Array $data */
/** @var \App\Models\Article $article */
$article = $data['article'];
?>

<div class="container">
    <div class="row formular">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label class="popis">Titulok</label>
                    <input name="title" type="text" class="form-control" value="<?=$article->getTitle()?>" required>
                </div>
                <div class="form-group">
                    <label class="popis">Nadis</label>
                    <input name="header" type="text" class="form-control" value="<?=$article->getHeader()?>" required>
                </div>
                <div class="form-group">
                    <label class="popis">Text</label>
                    <textarea name="text" type="text" class="form-control" required><?=$article->getText()?></textarea>
                </div>
                <button type="submit" class="btn btn-secondary tlacidlo">Ulož</button>
            </form>
        </div>
    </div>
</div>
