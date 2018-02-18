<?php
require WPATH . "modules/classes/processor.php";
$sub = new Form_Process;
?>
<div class="section-bg-image parallax-window" data-natural-height="750" data-natural-width="1920" data-parallax="scroll" data-image-src="images/bg-1.jpg">
    <div class="container content">
        <div class="title-base text-left">
            <hr />
            <h2>Our newsletter</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>We are always happy to hear from you. We know it's a start of something. Sign-up. We promise not to spam you!</p>
            </div>
            <div class="col-md-4">
                <form class="form-box" method="post">
                    <input type="hidden" name="action" value="subscription"/>
                    <input id="email" name="email" placeholder="Email" type="email" class="form-control form-value" required="">
                    <hr class="space s">
                    <button class="btn btn-xs " type="submit">Sign-up now</button>
                        
                    <?php
                    if (!empty($_POST)) {
                        $success = $sub->execute();
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>