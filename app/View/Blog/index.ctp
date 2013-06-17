<div id="blog">

<?php foreach ($articles as $article) { ?>
    <div class="article">
    <h1><a href="index/<?= $article['Blog']['id'] ?>"
    title="<?= $article['Blog']['title'] ?>"><?= $article['Blog']['title'] ?></a></h1>
    <p class="date"><?= $article['Blog']['date'] ?></p>
    <p><?= $article['Blog']['introtext'] ?><a 
    href="index/<?= $article['Blog']['id'] ?>" title="<?= $article['Blog']['title'] ?>"
    class="readon">Read more...</a></p>
    </div>
<?php } ?>
</div>