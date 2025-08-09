<form action="<?php
echo SITE_URL; ?>/contact/?success=1" method="post">
    <div class="form-container">
        <div class="form-group">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
        </div>

        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="Your Email" required>
        </div>

        <div class="form-group">
            <input type="tel" id="phone" name="phone" placeholder="Your Phone" required>
        </div>

        <fieldset>
            <legend>City</legend>
            <div class="radio-group">
                <input type="radio" id="nh" name="city" value="Chișinau" checked>
                <label for="ch">Chișinau</label>
            </div>
            <div class="radio-group">
                <input type="radio" id="vt" name="City" value="Balți">
                <label for="bl">Balți</label>
            </div>
            <div class="radio-group">
                <input type="radio" id="me" name="City" value="Tiraspoli">
                <label for="tr">Tiraspoli</label>
            </div>
            <div class="radio-group">
                <input type="radio" id="ma" name="City" value="Other">
                <label for="other">Other</label>
            </div>
        </fieldset>

        <div class="form-group">
            <textarea id="your-message" name="message" placeholder="Your Message" rows="3"
                      required></textarea>
        </div>

        <button type="submit" class="submit" tabindex="1">&nbsp;</button>
    </div>
</form>
