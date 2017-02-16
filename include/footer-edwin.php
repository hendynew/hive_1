<div class="footer-section">
    <div class="footer-container w-container">
      <div class="w-row">
        <div class="w-clearfix w-col w-col-8"><img class="logo moblogo" src="<?=base_url('resources/')?>images/EdwinLogo_2.png" width="91"><img class="tandatangan" sizes="(max-width: 479px) 100vw, (max-width: 767px) 142px, 225px" src="<?=base_url('resources/')?>images/EdwinLogo_3.png" srcset="<?=base_url('resources/')?>images/EdwinLogo_3-p-500x87.png 500w, <?=base_url('resources/')?>images/EdwinLogo_3.png 528w" width="258">
          <div class="divsosmed w-clearfix">
            <a class="linkinstagram w-inline-block" href="#"><img src="<?=base_url('resources/')?>images/icon5.png" width="27.5">
            </a>
            <a class="linkinstagram w-inline-block" href="#"><img src="<?=base_url('resources/')?>images/icon6.png" width="27.5">
            </a>
            <a class="linkinstagram w-inline-block" href="#"><img src="<?=base_url('resources/')?>images/icon7.png" width="27.5">
            </a>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="divtelp"><img class="phoneicon" src="<?=base_url('resources/')?>images/icon8.png" width="22">
            <div class="phonetext"><?= $user->telp?></div>
          </div>
          <div class="divemail"><img class="emailico" src="<?=base_url('resources/')?>images/icon9.png" width="26">
            <div class="email phonetext"><?= $user->email?></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>resources/js/webflow.js" type="text/javascript"></script>
  <script src="<?= base_url()?>resources/js/custom.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->