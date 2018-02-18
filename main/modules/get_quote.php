<?php
require WPATH . "modules/classes/processor.php";
$sub = new Form_Process;
?>

<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-9">
                <form class="form-box" method="post">
                    <input type="hidden" name="action" value="quote"/>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Name</p>
                            <input id="name" name="name" placeholder="Name" type="text" class="form-control form-value" required>
                        </div>
                        <div class="col-md-6">
                            <p>Surname</p>
                            <input id="surname" name="surname" placeholder="Surname" type="text" class="form-control form-value" required>
                        </div>
                    </div>
                    <hr class="space xs" />
                    <div class="row">
                        <div class="col-md-6">
                            <p>Product/Service</p>
                            <select id="category" name="category" class="form-control form-value" required>
                                <?php echo $sub->getCategory(); ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <p>City</p>
                            <input id="city" name="city" placeholder="City" type="text" class="form-control form-value" required>
                        </div>
                        <div class="col-md-2">
                            <p>Country</p>
                            <select id="country" name="country" class="form-control form-value" required>
                                <?php echo $sub->getCountry(); ?>//
                            </select>
                        </div>
                    </div>
                    <hr class="space xs" />
                    <div class="row">
                        <div class="col-md-6">
                            <p>Phone</p>
                            <input id="phone" name="phone" placeholder="0789 999 999" type="text" class="form-control form-value">
                        </div>
                        <div class="col-md-6">
                            <p>Email</p>
                            <input id="email" name="email" placeholder="email@company.com" type="email" class="form-control form-value" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="space xs" />
                            <p>Description[<i>Important information we haven't asked</i>]</p>
                            <textarea id="quote" name="quote" class="form-control form-value" required></textarea>
                            <hr class="space s" />
                            <button class="anima-button circle-button btn-sm btn" type="submit"><i class="im-envelope-2"></i>Send inquiry</button>
                        </div>
                    </div>
                    <?php
                    if (!empty($_POST)) {
                        $success = $sub->execute();
                    }
                    ?>
                </form>
            </div>
            <div class="col-md-3">
                <hr class="space visible-sm" />
                <h3>Send your details</h3>
                <p>
                    We are always happy to hear from you. We know it's a start of something.
                    Find us on all social media platforms you know.
                </p>
                <hr class="space s" />
                <ul class="fa-ul text-left">
                    <li><i class="fa-li im-map"></i> PJ Plaza, 1st Flr, Links Road Nyali, Mombasa, KE</li>
                    <li><i class="fa-li im-phone-2"></i> 254-737-023-807</li>
                    <li><i class="fa-li im-envelope"></i> info@skylineplatinum.co.ke</li>
                    <li><i class="fa-li im-calendar-4"></i> Mon - Sat: 9:00 - 18:00</li>
                </ul>
            </div>
        </div>
    </div>
</div>




<!-- end contact -->

<?php require_once 'modules/inc/numbers.php'; ?>