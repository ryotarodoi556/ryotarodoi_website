<div class="box main">

    <div class="info-text form-text">

        <!-- Form title -->
        <h2>Contact Us</h2>

        <!-- Script: redirects to custom success page after form is submitted -->
        <script>
    var submitted = false;
</script>

        <!-- Hidden iframe to submit form without leaving the page -->
        <iframe 
            name="hidden_iframe" 
            id="hidden_iframe" 
            style="display:none;"
            onload="if(submitted) {window.location='index.php?page=form_success';}">
        </iframe>

        <!-- Contact form sending data to Google Forms -->
        <form 
            action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScWk6HZB710aPCQFSotYdIuvpP2aIluLbTYzIW6fLBXBAtrzA/formResponse"
            method="post" 
            target="hidden_iframe"
            onsubmit="submitted=true;">

            <!-- Name field -->
            <p>
                <input type="text" name="entry.726178720" placeholder="Name" required />
            </p>

            <!-- Email field -->
            <p>
                <input type="email" name="entry.453204156" placeholder="Email Address" required />
            </p>

            <!-- Message field -->
            <textarea name="entry.1589711585" placeholder="Your Message" required></textarea>

            <!-- Submit button -->
            <p>
                <button type="submit">Submit</button>
            </p>

        </form>

    </div> <!-- /form-text -->

</div> <!-- /main -->
