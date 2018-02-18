<?php
require WPATH . "modules/classes/processor.php";
$sub = new Form_Process;
?>
<div class="section-map box-middle-container full-screen-size" data-sub-height="58">
    <div class="google-map" data-coords="-1.2808975,36.8184283,20z" data-zoom="8" data-marker-pos="col-md-6-right" data-marker-top="50" data-marker="http://templates.framework-y.com/techline/images/marker-map.png"></div>
    <div class="overlaybox overlaybox-side">
        <div class="container content">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 overlaybox-inner box-middle">
                    <h3>Contacts</h3>
                    <p>
                        We are always happy to hear from you. We know it's a start
                        of something. Find us on all social media platforms you know.
                    </p>
                    <hr class="space s" />
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><i class="fa-li im-home-3"></i> PJ Plaza, 1st Flr, Links Road Nyali, Mombasa, KE</li>
                                <li><i class="fa-li im-headset"></i>  254-737-023-807</li>
                                <li><i class="fa-li im-headset"></i>  254-737-993-003</li>
                                <li><i class="fa-li im-headset"></i>  254-729-482-878</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><i class="fa-li im-balloon"></i>  Skyline Platinum Freighters</li>
                                <li><i class="fa-li im-mail-3"></i>  info@skylineplatinum.co.ke</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="space s" />
                    <form class="form-box" method="post">
                        <input type="hidden" name="action" value="inquiry"/>
                        <div class="row">
                            <div class="col-md-4">
                                <input id="name" name="name" placeholder="name" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-4">
                                <input id="email" name="email" placeholder="email" type="email" class="form-control form-value" required>
                            </div>
                            <div class="col-md-4">
                                <input id="phone" name="phone" placeholder="phone" type="text" class="form-control form-value">
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" placeholder="message" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="anima-button btn-xs btn" type="submit"><i class="im-mailbox-empty"></i>Send messagge</button>
                            </div>
                        </div>

                    </form>
                    <?php
                    if (!empty($_POST)) {
                        $success = $sub->execute();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>