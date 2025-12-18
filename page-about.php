<?php
/**
 * Template Name: About
 * About Page - Lisa Singer Attorney Profile
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-8 pb-16 lg:pt-12 lg:pb-24 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="service-hero-content">
          <a href="<?php echo home_url(); ?>" class="inline-flex items-center gap-2 mb-6 text-[13px] text-primary font-medium hover:text-primary/80 transition-colors">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
            Back to Home
          </a>
          
          <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
            <span class="w-8 h-px bg-primary/40 mr-3"></span>
            Meet Your Attorney
          </span>
          
          <h1 class="text-4xl md:text-5xl lg:text-[56px] font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
            Lisa Singer, Esq.
          </h1>
          
          <p class="text-lg text-muted-foreground mb-4 leading-relaxed max-w-lg">
            Dedicated Elder Law Attorney serving Long Island families with compassion, expertise, and unwavering commitment to protecting their futures.
          </p>

          <div class="flex flex-wrap gap-3 mb-8">
            <span class="px-3 py-1.5 rounded-full bg-primary/10 text-primary text-[12px] font-medium">Elder Law</span>
            <span class="px-3 py-1.5 rounded-full bg-primary/10 text-primary text-[12px] font-medium">Estate Planning</span>
            <span class="px-3 py-1.5 rounded-full bg-primary/10 text-primary text-[12px] font-medium">Medicaid Planning</span>
            <span class="px-3 py-1.5 rounded-full bg-primary/10 text-primary text-[12px] font-medium">Asset Protection</span>
          </div>
          
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#contact" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/20">
              Schedule Free Consultation
              <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
            <a href="tel:888-851-2272" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border text-foreground/80 text-[15px] font-medium hover:bg-muted/50 hover:border-primary/20 transition-all duration-200">
              <svg class="w-4 h-4 mr-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              888-851-2272
            </a>
          </div>
        </div>
        
        <!-- Hero Image -->
        <div class="relative hidden lg:block">
          <div class="service-hero-image relative rounded-3xl overflow-hidden aspect-[3/4]">
            <div class="hero-image-slices absolute inset-0 z-10 flex">
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
            </div>
            <img 
              src="https://www.elderattorneylongisland.com/wp-content/uploads/2022/06/Lisa_Singer_001-E3_1-1200x800.jpg" 
              alt="Lisa Singer, Elder Law Attorney" 
              class="w-full h-full object-cover object-top"
              loading="eager"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Biography Section -->
  <section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 service-content">
          <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-foreground mb-6">
            A Passion for Protecting Families
          </h2>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Lisa Singer has dedicated her legal career to helping Long Island families navigate the complex and often overwhelming world of elder law. With a deep understanding of the challenges that come with aging, she provides compassionate, personalized legal guidance to ensure her clients and their loved ones are protected.
          </p>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            After witnessing her own family struggle with long-term care planning and Medicaid issues, Lisa was inspired to focus her practice on elder law. She understands firsthand the emotional and financial toll these situations can take, which is why she approaches every case with empathy and a commitment to finding the best possible solutions.
          </p>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
            Lisa believes that everyone deserves access to quality legal representation, regardless of their circumstances. She takes the time to listen to her clients' concerns, explain their options in plain language, and develop customized strategies that protect their assets and ensure their wishes are honored.
          </p>

          <h3 class="text-xl font-semibold text-foreground mb-4">Education & Credentials</h3>
          <ul class="space-y-4 mb-8">
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Juris Doctor (J.D.)</p>
                <p class="text-[14px] text-muted-foreground">Touro Law Center, with honors</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">New York State Bar</p>
                <p class="text-[14px] text-muted-foreground">Admitted and in good standing</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">National Academy of Elder Law Attorneys (NAELA)</p>
                <p class="text-[14px] text-muted-foreground">Active member</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">New York State Bar Association</p>
                <p class="text-[14px] text-muted-foreground">Elder Law and Trusts & Estates Sections</p>
              </div>
            </li>
          </ul>

          <h3 class="text-xl font-semibold text-foreground mb-4">Areas of Focus</h3>
          <div class="grid sm:grid-cols-2 gap-4 mb-8">
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Medicaid Planning</p>
              <p class="text-[13px] text-muted-foreground mt-1">Helping families qualify for benefits while protecting assets.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Estate Planning</p>
              <p class="text-[13px] text-muted-foreground mt-1">Wills, trusts, and comprehensive legacy planning.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Long-Term Care</p>
              <p class="text-[13px] text-muted-foreground mt-1">Planning for nursing home and assisted living needs.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Asset Protection</p>
              <p class="text-[13px] text-muted-foreground mt-1">Strategies to shield your wealth from creditors and care costs.</p>
            </div>
          </div>

          <h3 class="text-xl font-semibold text-foreground mb-4">Community Involvement</h3>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Lisa is deeply committed to giving back to the Long Island community. She regularly speaks at senior centers, community organizations, and professional groups about elder law topics. She believes in empowering families with knowledge so they can make informed decisions about their futures.
          </p>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
          <div class="sticky top-8 space-y-6">
            <!-- CTA Card -->
            <div class="bg-primary rounded-2xl p-6 text-white">
              <h3 class="text-lg font-semibold mb-3">Free Consultation</h3>
              <p class="text-white/80 text-[14px] mb-5">
                Schedule a personal consultation with Lisa to discuss your family's needs and explore your options.
              </p>
              <a href="#contact" class="block w-full py-3 rounded-xl bg-white text-primary text-center text-[14px] font-medium hover:bg-white/90 transition-colors">
                Schedule Now
              </a>
              <p class="text-white/60 text-[12px] text-center mt-3">No obligation • Confidential</p>
            </div>

            <!-- Quick Facts -->
            <div class="bg-white rounded-2xl p-6 border border-border/50">
              <h3 class="text-[15px] font-semibold text-foreground mb-4">Quick Facts</h3>
              <ul class="space-y-4">
                <li class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                  </div>
                  <div>
                    <p class="text-[13px] text-muted-foreground">Location</p>
                    <p class="text-[14px] font-medium text-foreground">Long Island, NY</p>
                  </div>
                </li>
                <li class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
                  </div>
                  <div>
                    <p class="text-[13px] text-muted-foreground">Experience</p>
                    <p class="text-[14px] font-medium text-foreground">15+ Years</p>
                  </div>
                </li>
                <li class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                  </div>
                  <div>
                    <p class="text-[13px] text-muted-foreground">Families Helped</p>
                    <p class="text-[14px] font-medium text-foreground">1,000+</p>
                  </div>
                </li>
                <li class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  </div>
                  <div>
                    <p class="text-[13px] text-muted-foreground">Google Rating</p>
                    <p class="text-[14px] font-medium text-foreground">5.0 Stars</p>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Contact Info -->
            <div class="bg-muted/30 rounded-2xl p-6">
              <h3 class="text-[15px] font-semibold text-foreground mb-4">Get in Touch</h3>
              <div class="space-y-3">
                <a href="tel:888-851-2272" class="flex items-center gap-3 text-[14px] text-foreground hover:text-primary transition-colors">
                  <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                  888-851-2272
                </a>
                <a href="mailto:lisa@elderattorneylongisland.com" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors">
                  <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                  lisa@elderattorneylongisland.com
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Preview -->
  <section class="py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-12">
        <span class="inline-flex items-center justify-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Client Testimonials
          <span class="w-8 h-px bg-primary/40 ml-3"></span>
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-foreground">
          What Clients Say About Lisa
        </h2>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <div class="p-6 rounded-2xl bg-white border border-border/50">
          <div class="flex gap-1 mb-4">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <svg class="w-4 h-4 text-amber-400 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <?php endfor; ?>
          </div>
          <p class="text-muted-foreground text-[14px] leading-relaxed mb-4">
            "Lisa Singer is amazing! She helped my family navigate Medicaid planning with such care and expertise. She truly cares about her clients."
          </p>
          <p class="text-[13px] font-medium text-foreground">— Maria S.</p>
        </div>

        <div class="p-6 rounded-2xl bg-white border border-border/50">
          <div class="flex gap-1 mb-4">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <svg class="w-4 h-4 text-amber-400 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <?php endfor; ?>
          </div>
          <p class="text-muted-foreground text-[14px] leading-relaxed mb-4">
            "The best elder law attorney on Long Island. Lisa made a difficult process so much easier for our family during a challenging time."
          </p>
          <p class="text-[13px] font-medium text-foreground">— Susan T.</p>
        </div>

        <div class="p-6 rounded-2xl bg-white border border-border/50">
          <div class="flex gap-1 mb-4">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <svg class="w-4 h-4 text-amber-400 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <?php endfor; ?>
          </div>
          <p class="text-muted-foreground text-[14px] leading-relaxed mb-4">
            "Exceptional service. Lisa took the time to explain everything clearly and made sure we understood all our options."
          </p>
          <p class="text-[13px] font-medium text-foreground">— James P.</p>
        </div>
      </div>

      <div class="text-center mt-10">
        <a href="<?php echo home_url(); ?>/#testimonials" class="inline-flex items-center text-[14px] text-primary font-medium hover:gap-2 transition-all">
          Read More Reviews
          <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
