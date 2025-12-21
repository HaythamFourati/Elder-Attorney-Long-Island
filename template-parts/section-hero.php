<?php
/**
 * Hero Section - Clean 2025 Modern Design
 * React enhances with GSAP animations
 */
?>
<section id="hero-section" class="relative overflow-hidden pt-8 pb-16 lg:pt-12 lg:pb-24">
  <div class="max-w-6xl mx-auto px-4 relative z-10">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="hero-content">
        <!-- Subtle tag -->
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Elder Law Attorney — Long Island, NY
        </span>
        
        <h1 class="hero-heading text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight mb-6 leading-[1.15] text-foreground">
          <span class="hero-text-reveal">Protecting Your</span><br>
          <span class="hero-text-reveal">Family's <span class="text-primary">Future</span></span>
        </h1>
        
        <p class="text-lg text-muted-foreground mb-10 leading-relaxed max-w-md">
          Expert guidance in elder law, estate planning, and Medicaid. We help Long Island families navigate life's most important legal decisions with care and clarity.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 mb-12">
          <a href="#contact" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/20">
            Schedule Free Consultation
            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
          <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border text-foreground/80 text-[15px] font-medium hover:bg-muted/50 hover:border-primary/20 transition-all duration-200">
            <svg class="w-4 h-4 mr-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <?php echo esc_html(SITE_PHONE); ?>
          </a>
        </div>
        
        <!-- Trust indicators -->
        <div class="flex flex-wrap items-center gap-4 sm:gap-8 pt-8 border-t border-border/50">
          <div class="flex flex-col">
            <span class="text-xl sm:text-2xl font-semibold text-foreground">30+</span>
            <span class="text-[12px] sm:text-[13px] text-muted-foreground">Years Experience</span>
          </div>
          <div class="w-px h-8 sm:h-10 bg-border"></div>
          <div class="flex flex-col">
            <div class="flex items-center gap-1">
              <span class="text-xl sm:text-2xl font-semibold text-foreground">5.0</span>
              <svg class="w-4 h-4 sm:w-5 sm:h-5 fill-amber-400 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <span class="text-[12px] sm:text-[13px] text-muted-foreground">Google Rating</span>
          </div>
          <div class="w-px h-8 sm:h-10 bg-border"></div>
          <div class="flex flex-col">
            <span class="text-xl sm:text-2xl font-semibold text-foreground">1000+</span>
            <span class="text-[12px] sm:text-[13px] text-muted-foreground">Families Helped</span>
          </div>
        </div>
      </div>
      
      <!-- Hero Image -->
      <div class="relative mt-10 lg:mt-0">
        <div class="hero-image relative rounded-2xl lg:rounded-3xl overflow-hidden aspect-[4/3] lg:aspect-[4/4.75]">
          <div class="hero-image-slices absolute inset-0 z-10 flex">
            <div class="w-1/3 h-full bg-background"></div>
            <div class="w-1/3 h-full bg-background"></div>
            <div class="w-1/3 h-full bg-background"></div>
          </div>
          <img 
            src="https://images.unsplash.com/photo-1758686253708-f0e21317d2aa?q=80&w=2232&auto=format&fit=crop" 
            alt="Happy senior couple enjoying life together" 
            class="w-full h-full object-cover"
            loading="eager"
          />
          <!-- Badge inside image -->
          <div class="hero-badge absolute bottom-4 left-4 z-20 bg-white/95 backdrop-blur-sm rounded-xl px-4 py-3 shadow-lg">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-lg bg-primary flex items-center justify-center flex-shrink-0">
                <span class="text-white font-semibold text-xs">30+</span>
              </div>
              <div>
                <p class="font-semibold text-[13px] text-foreground leading-tight">Years Trusted</p>
                <p class="text-[11px] text-muted-foreground">Since 1994</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
