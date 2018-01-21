<div class="row">
  <div class="col-xs-12 col-sm-8 col-sm-offset-2">
    <?php foreach ($posts as $post): ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="#"><?=$post['title']?></a>
        </div>
        <div class="panel-body">
          <?=$post['content']?>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</div>
