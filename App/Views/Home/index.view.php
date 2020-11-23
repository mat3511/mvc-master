<?php /** @var Array $data */ ?>

<div class="container">
    <div class="row clankyTop">
        <?php
        /** @var \App\Models\Article $article */
        foreach ($data['articles'] as $article) { ?>
        <div class="col-6 clankyVnutro">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article->getTitle() ?></h5>
                        <h6 class="card-title"><?= $article->getHeader() ?></h6>
                        <p class="card-text"><?= $article->getText() ?></p>
                        <a href="?c=home&a=edit&id=<?=$article->getId()?>" class="btn btn-primary btn-small">Edit</a>
                        <a href="?c=home&a=delete&id=<?=$article->getId()?>" class="btn btn-danger btn-primary btn-small">Delete</a>
                    </div>
                </div>
        </div>
            <?php
        }
        ?>
    </div>
</div>
