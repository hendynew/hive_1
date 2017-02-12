<?php foreach($posts as $p){ ?>
        <div class="w-row">
          <div class="colgambarblog w-col w-col-4"><img src="<?php echo base_url()?>resources/images/<?= ($p->url_image != "" ? $p->url_image : "Images9.jpg")?>">
          </div>
          <div class="w-col w-col-8">
            <div class="bloginfo">
              <h4 class="blogheader"><?= $p->title ?></h4>
              <h4 class="blogdate"><?= $p->date ?></h4>
              <p class="blogdesc"><?= $p->caption ?></p>
              <a class="btnseemore w-inline-block" href="<?= base_url()?>/blog/<?= $p->post_id?>"></a>
            </div>
          </div>
        </div>
<?php } ?>