<div class="jumbotron">
  <h1><?=$name ?></h1>
  <p>on my own PHP framework.</p>
</div>
<div class="row">
  <div class="col-sm-8 col-xs-12">
    <div class="row">
      <?php foreach ($posts as $post): ?>
        <div class="col-sm-6 col-md-4 col-xs-6">
          <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="...">
            <div class="caption">
              <h3><?=$post['title']?></h3>
              <p>some products description </p>
              <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="col-sm-3 col-sm-offset-1 col-xs-12">
    <h3>News</h3>
    <?php foreach ($posts as $post): ?>
    <h4><?=$post['title']?></h4>
    <p><?=$post['content']?></p>
    <?php endforeach ?>
  </div>
  <!-- <div class="col-xs-12 col-sm-8 col-sm-offset-2"> -->

  <!-- </div> -->

</div>
