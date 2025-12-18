<?php
/**
 * Contact Form Section - Clean 2025 Modern Design
 * Placeholder form - will be replaced with Contact Form 7
 */
?>
<section id="contact" class="py-24 bg-primary/[0.03]">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-16 items-start">
      <!-- Left Column - Info -->
      <div class="contact-info">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Get In Touch
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-6">
          Schedule Your Free Consultation
        </h2>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
          Facing elder care legal challenges? Our experienced Elder Law Attorney can help. Provide a brief description of your case, and let's discuss your path to legal clarity.
        </p>

        <!-- Contact Details -->
        <div class="space-y-5 mb-8">
          <a href="tel:888-851-2272" class="flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary transition-colors">
              <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div>
              <p class="text-[13px] text-muted-foreground">Call Us</p>
              <p class="text-[15px] font-medium text-foreground group-hover:text-primary transition-colors">888-851-2272</p>
            </div>
          </a>

          <a href="mailto:info@elderattorneylongisland.com" class="flex items-center gap-4 group">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary transition-colors">
              <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <div>
              <p class="text-[13px] text-muted-foreground">Email Us</p>
              <p class="text-[15px] font-medium text-foreground group-hover:text-primary transition-colors">info@elderattorneylongisland.com</p>
            </div>
          </a>

          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <p class="text-[13px] text-muted-foreground mb-2">Visit Us</p>
              <div class="space-y-3">
                <div>
                  <p class="text-[14px] font-medium text-foreground">Melville Office</p>
                  <p class="text-[13px] text-muted-foreground">445 Broadhollow Rd, Suite C1 18, Melville, NY 11747</p>
                </div>
                <div>
                  <p class="text-[14px] font-medium text-foreground">Queens Office</p>
                  <p class="text-[13px] text-muted-foreground">247-67 Jericho Tpke, Bellerose, NY 11426</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Trust Badge -->
        <div class="flex items-center gap-3 p-4 rounded-xl bg-white border border-border/50">
          <div class="w-10 h-10 rounded-lg bg-amber-400/10 flex items-center justify-center">
            <svg class="w-5 h-5 fill-amber-400 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div>
            <p class="text-[14px] font-semibold text-foreground">5.0 Rating on Google</p>
            <p class="text-[12px] text-muted-foreground">Trusted by Long Island families since 1994</p>
          </div>
        </div>
      </div>

      <!-- Right Column - Form -->
      <div id="contact-form-root" class="bg-white rounded-2xl p-8 border border-border/50 shadow-sm">
        <h3 class="text-xl font-semibold text-foreground mb-6">Send Us a Message</h3>
        
        <!-- Placeholder for Contact Form 7 -->
        <form id="contact-form" class="space-y-5" method="post" action="">
          <?php wp_nonce_field('contact_form_submit', 'contact_nonce'); ?>
          
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label for="contact-name" class="block text-[13px] font-medium text-foreground mb-2">Full Name</label>
              <input 
                type="text"
                id="contact-name"
                name="name" 
                placeholder="John Smith" 
                class="w-full h-11 rounded-xl border border-border bg-background px-4 text-[14px] placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                required
              />
            </div>
            <div>
              <label for="contact-phone" class="block text-[13px] font-medium text-foreground mb-2">Phone Number</label>
              <input 
                type="tel"
                id="contact-phone"
                name="phone" 
                placeholder="(555) 123-4567" 
                class="w-full h-11 rounded-xl border border-border bg-background px-4 text-[14px] placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                required
              />
            </div>
          </div>

          <div>
            <label for="contact-email" class="block text-[13px] font-medium text-foreground mb-2">Email Address</label>
            <input 
              type="email"
              id="contact-email"
              name="email" 
              placeholder="john@example.com" 
              class="w-full h-11 rounded-xl border border-border bg-background px-4 text-[14px] placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
              required
            />
          </div>

          <div>
            <label for="contact-service" class="block text-[13px] font-medium text-foreground mb-2">Service Needed</label>
            <select 
              id="contact-service"
              name="service"
              class="w-full h-11 rounded-xl border border-border bg-background px-4 text-[14px] text-foreground focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all appearance-none cursor-pointer"
              style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%236b7280%22%20stroke-width%3D%222%22%3E%3Cpath%20d%3D%22m6%209%206%206%206-6%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 12px center; background-size: 16px;"
            >
              <option value="">Select a service...</option>
              <option value="elder-law">Elder Law</option>
              <option value="estate-planning">Estate Planning</option>
              <option value="medicaid-planning">Medicaid Planning</option>
              <option value="long-term-care">Long-Term Care Planning</option>
              <option value="asset-protection">Asset Protection</option>
              <option value="probate">Probate & Administration</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div>
            <label for="contact-message" class="block text-[13px] font-medium text-foreground mb-2">How Can We Help?</label>
            <textarea 
              id="contact-message"
              name="message" 
              placeholder="Briefly describe your situation..." 
              rows="4"
              class="w-full rounded-xl border border-border bg-background px-4 py-3 text-[14px] placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"
              required
            ></textarea>
          </div>

          <button type="submit" class="w-full h-12 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/20 flex items-center justify-center gap-2">
            Request Free Consultation
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </button>

          <p class="text-[12px] text-muted-foreground text-center">
            By submitting, you agree to our privacy policy. We'll never share your information.
          </p>
        </form>
      </div>
    </div>
  </div>
</section>
