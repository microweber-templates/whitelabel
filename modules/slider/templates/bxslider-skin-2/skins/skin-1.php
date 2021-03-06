<div class="section-7 d-flex">
    <div class="container d-flex">
        <div class="row position-relative">
            <div class="col-lg-6 col-xl-5 align-self-center position-static">
                <div class=" allow-drop p-10">

                    <h2><?php echo $primaryText; ?></h2>
                    <p><?php echo $secondaryText; ?></p>

                    <div class="m-t-50 support-by">
                        <p><?php print _lang('С подкрепата на: ', 'templates/microweber-whitelabel'); ?> &nbsp; <a href="https://microweber.org" target="_blank"><img src="https://microweber.org/userfiles/media/microweber.org/logo_reverse.png" alt=""/></a></p>
                        <?php /*<p><?php print _lang('С подкрепата на: ', 'templates/microweber-whitelabel'); ?> &nbsp; <a href="https://neterra.net/bg" target="_blank"><img src="<?php print template_url(); ?>assets/img/neterra_logo.png" alt=""/></a></p>*/ ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-7 text-center allow-drop align-self-center">
                <a href="<?php print $url; ?>">
                    <img src="<?php if (isset($slide['images'][0])) { ?><?php print thumbnail($slide['images'][0], 1920, 1920); ?><?php } ?>" alt=""/>
                </a>
            </div>
        </div>
    </div>
</div>