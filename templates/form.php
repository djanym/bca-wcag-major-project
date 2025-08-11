<form action="<?php
echo SITE_URL; ?>/contact/?success=1" method="post">
    <div class="form-container">

        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" autocomplete="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" placeholder="Your Phone" autocomplete="tel" inputmode="tel"
                   required>
        </div>

        <fieldset class="radio-group-container" aria-labelledby="city-legend">
            <legend id="city-legend">City</legend>

            <div class="radio-group">
                <input type="radio" id="city-ch" name="city" value="Chișinau" checked>
                <label for="city-ch">Chișinau</label>
            </div>

            <div class="radio-group">
                <input type="radio" id="city-bl" name="city" value="Balți">
                <label for="city-bl">Balți</label>
            </div>

            <div class="radio-group">
                <input type="radio" id="city-tr" name="city" value="Tiraspoli">
                <label for="city-tr">Tiraspoli</label>
            </div>

            <div class="radio-group">
                <input type="radio" id="city-other" name="city" value="Other">
                <label for="city-other">Other</label>
            </div>
        </fieldset>

        <div class="form-group">
            <label for="your-message">Your message</label>
            <textarea id="your-message" name="message" placeholder="Your Message" rows="3" autocomplete="off"
                      required></textarea>
        </div>

        <button type="submit" class="btn">Send message</button>

    </div>
</form>
