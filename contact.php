<?php
$_GET['title'] = 4;
require_once "./header.php";
require_once $to_home . "breadcrumb.php";
?>
<!-- Contact Widget Section Begin -->
<section class="contact-widget spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 contact__widget__item">
                <i class="fas fa-envelope"></i>
                <h4>contacto.cosmicstudios@gmail.com</h4>
            </div>
            <div class="col-lg-5 contact__widget__item">
                <i class="fas fa-phone"></i>
                <h4>+57 (312) 584 7234</h4>
            </div>
        </div>
    </div>
</section>
<!-- Contact Widget Section End -->
<!-- Call To Action Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe style="height:420px;width:100%;border:0;filter:invert(99%);margin-bottom:24px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.35330665071!2d-74.889348684749!3d4.150743947335077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ed34df51acbb1%3A0xbdb77d4ff326b7a4!2sCosmic%20Studios!5e0!3m2!1ses-419!2sco!4v1634200215224!5m2!1ses-419!2sco"></iframe>
            </div>
            <div class="col-md-6 contact__form">
                <h3><?= $getintouch; ?></h3>
                <form id="mail_form" name="mail_form">
                    <input type="text" id="mail_name" name="mail_name" placeholder="<?= $_name; ?>" required>
                    <input type="email" id="mail_email" name="mail_email" placeholder="<?= $_email; ?>" required>
                    <input type="tel" id="mail_phone" name="mail_phone" placeholder="<?= $_tphone; ?>">
                    <input type="text" id="mail_subject" name="mail_subject" placeholder="<?= $_subject; ?>" required>
                    <textarea id="mail_message" name="mail_message" rows="3" placeholder="<?= $_msg; ?>" required></textarea>
                    <div class="g-recaptcha" id="mail_recaptcha" name="mail_recaptcha" data-sitekey="6LdBMSIaAAAAANG0gtgkpXUE0K5QS2nu0tJWC1Fm"></div><br>
                    <button type="submit" id="mail_submit" name="mail_submit" class="site-btn" value="<?= $_send; ?>"><?= $_send; ?></button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->
<?php
require_once $to_home . "footer.php";
?>
<script>
    $(document).ready(() => active_contact());

    $("#mail_form").submit(function(event) {
        $("#mail_submit").attr("disabled", true);
        event.preventDefault();
        let formData = $("#mail_form").serializeArray();
        formData.push({
            name: "mail_submit",
            value: "1"
        });
        $.ajax({
            type: "POST",
            url: "<?= $to_home; ?>_contact.php",
            data: formData,
            dataType: "json",
            success: function(response) {
                if (response.status == 200 || response.status == 201 || response.status == 202) showModal("success", "INFO.", "<?= $_mail_thanks; ?>", "javascript:$('#modal_front').modal('hide');", true);
                else showModal("danger", "ERROR", "<?= $_mail_wrong; ?><br><code>(" + response.message + ")</code>", "javascript:$('#modal_front').modal('hide');", true);
                $("#mail_submit").removeAttr("disabled");
            },
            error: function(xhr, status, error) {
                showModal("danger", "ERROR", "<?= $_mail_wrong; ?>", "javascript:$('#modal_front').modal('hide');", true);
                $("#mail_submit").removeAttr("disabled");
                console.error(xhr.responseText);
            }
        });
    });
</script>