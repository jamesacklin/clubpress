<form id="contact-form">
  <div class="form-row">
    <label class="control-label" for="contact-name">Your Name</label>
    <p class="help-text">e.g. John Doe</p>
    <input class="form-control" name="name" id="contact-name" type="text" required>
  </div>
  <div class="form-row">
    <label class="control-label" for="contact-email">Your Email Address</label>
    <p class="help-text">e.g. you@example.com</p>
    <input class="form-control" name="email" id="contact-email" type="email" required>
  </div>
  <div class="form-row">
    <label class="control-label" for="contact-phone">Your Phone Number (Optional)</label>
    <p class="help-text">e.g. (555) 555-1234</p>
    <input class="form-control" name="phone" id="contact-phone" type="tel" optional>
  </div>
  <div class="form-row">
    <label class="control-label" for="club-name">Club Name</label>
    <p class="help-text">e.g. Club Stabertson</p>
    <input class="form-control" name="clubname" id="club-name" type="text" required>
  </div>
  <div class="form-row">
    <label class="control-label" for="club-state">State</label>
    <p class="help-text">e.g. PA or Pennsylvania</p>
    <input class="form-control" name="state" id="club-state" type="text" required>
  </div>
  <div class="form-row">
    <label class="control-label" for="club-zip">ZIP Code</label>
    <p class="help-text">e.g. 15222</p>
    <input class="form-control" name="zip" id="club-zip" type="text" pattern="(\d{5}([\-]\d{4})?)" required>
  </div>
  <div class="form-row">
    <button type="submit" class="button button-block-screen-sm button-submit">Submit Form</button>
  </div>
</form>
