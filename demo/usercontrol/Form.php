<div class="wgs-box wgs-quoteform">
    <h3 class="wgs-heading">Quick Contact</h3>
    <div class="wgs-content">
        <p>If you have any questions or would like to book a session please contact us.</p>
        <form id="contact" method="post" action="/send">
            <div class="form-results"></div>
            <div class="form-group row">
                <div class="form-field col-md-12 form-m-bttm">
                    <input name="name" type="text" placeholder="Name *" class="form-control required" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-field col-md-12 form-m-bttm">
                    <input name="email" type="email" placeholder="Email *" class="form-control required email" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-field col-md-12 form-m-bttm">
                    <input name="contact" type="text" placeholder="Phone" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-field col-md-12 form-m-bttm">
                    <input name="services" type="text" placeholder="Interest of Service" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-field col-md-12">
                    <textarea name="message" placeholder="Messages *" class="txtarea form-control required" required></textarea>
                </div>
            </div>
            <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
            <!-- Google reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Ld-BqooAAAAAGdznMd4vJUwzzZcoqoDURC9SErA"></div>
            <!-- Submit Button -->
            <div class="gaps"></div>
            <p role="alert">

            </p>
            <button type="submit" class="btn solid-btn sb-h">Submit</button>
        </form>

    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>