<div class="contact-form-container">
  @include('partials.error')

  <form method="POST" id="contact-form" action="">
    @csrf
    <div class="form-item name">
      <input type="text" value="" name="name" placeholder="Name" required>
    </div>
    <div class="form-item email">
      <input type="text" value="" name="email" placeholder="Email" required>
    </div>
    <div class="form-item phone">
      <input type="text" value="" name="phone" placeholder="Phone" required>
    </div>
    <div class="form-item message">
      <textarea name="message" placeholder="Message" required></textarea>
    </div>

    <div class="form-actions">
      <button id="submit" type="submit">Send</button>
    </div>
  </form>
</div>
