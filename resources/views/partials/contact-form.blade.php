<div class="contact-form-container">
  @include('partials.error')

  <form method="POST" id="contact-form" action="">
    @csrf

    <div class="row">
      <div class="form-item name">
        <input type="text" value="" name="name" placeholder="Name" required>
      </div>
      <div class="form-item email">
        <input type="text" value="" name="email" placeholder="Email" required>
      </div>
    </div>

    <div class="row">
      <div class="form-item company">
        <input type="text" value="" name="company" placeholder="Company" required>
      </div>
      <div class="form-item phone">
        <input type="text" value="" name="phone" placeholder="Phone" required>
      </div>
    </div>

    <div class="row">
      <div class="form-item details">
        <textarea name="details" rows="3" placeholder="Project Details" required></textarea>
      </div>
    </div>

    
    <div class="form-actions">
      <button id="submit" type="submit">Send</button>
    </div>
    
  </form>
</div>
