<?= $this->getContent() ?>

<div class="jumbotron">
    <h1>Page Not Found</h1>
    <p>The page you have accessed does not exists.</p>
    <p><?= $this->tag->linkTo(['index', 'Take me Back', 'class' => 'btn btn-primary']) ?></p>
</div>