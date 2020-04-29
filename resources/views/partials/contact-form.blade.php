<div class="contact-form-container">
  
  <form method="POST" id="contact-form" action="/contact">
    @csrf

    <div class="md:flex">
      <div class="w-full name mr-6">
        <input type="text" value="" name="name" placeholder="Name" class="transparent" required>
      </div>
      <div class="w-full email">
        <input type="text" value="" name="email" placeholder="Email" class="transparent" required>
      </div>
    </div>

    <div class="md:flex">
      <div class="w-full company mr-6">
        <input type="text" value="" name="company" placeholder="Company" class="transparent">
      </div>
      <div class="w-full phone">
        <input type="text" value="" name="phone" placeholder="Phone" class="transparent" required>
      </div>
    </div>

    <div class="md:flex">
      <div class="w-full message">
        <textarea name="message" rows="3" placeholder="Message" class="transparent" required></textarea>
      </div>
    </div>

    
    <div class="text-right mt-3">
      <button id="submit" type="submit" class="light">Send</button>
    </div>
    
  </form>
</div>
