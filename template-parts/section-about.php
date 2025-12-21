<?php
/**
 * About Section - Clean 2025 Modern Design
 */
?>
<section id="about" class="py-24">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Text Content -->
      <div class="showcase-text-1">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Why It Matters
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-6">
          Honoring Our Elders Through Thoughtful Planning
        </h2>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-5">
          It's important to take the time to connect with our elders and to learn from them. They can teach us about the history of our family, about the importance of family and friends, and about how to face life's challenges with grace and dignity.
        </p>
        <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
          When we take the time to listen to our elders, we can learn lessons that will stay with us for a lifetime. Family caregiving becomes part of the formula for being our best selves.
        </p>
        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border text-foreground/80 text-[15px] font-medium hover:bg-muted/50 hover:border-primary/20 transition-all duration-200 group">
          Schedule a Free Consultation
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>

      <!-- Image -->
      <div class="showcase-image-1 relative">
        <div class="relative rounded-3xl overflow-hidden aspect-[4/3]">
          <div class="image-slices absolute inset-0 z-10 flex">
            <div class="slice-1 w-1/3 h-full bg-background"></div>
            <div class="slice-2 w-1/3 h-full bg-background"></div>
            <div class="slice-3 w-1/3 h-full bg-background"></div>
          </div>
          <img 
            src="https://www.elderattorneylongisland.com/wp-content/uploads/2023/02/AdobeStock_261051798-1-1199x800.jpg" 
            alt="Grandmother and granddaughter sharing a joyful moment together" 
            class="w-full h-full object-cover"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Meet Our Attorney Section -->
<section class="py-24 bg-muted/30">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Image -->
      <div class="showcase-image-2 relative lg:order-1">
        <div class="relative rounded-3xl overflow-hidden aspect-[3/4] max-w-md mx-auto lg:mx-0">
          <div class="image-slices-2 absolute inset-0 z-10 flex">
            <div class="slice-1 w-1/3 h-full bg-muted/30"></div>
            <div class="slice-2 w-1/3 h-full bg-muted/30"></div>
            <div class="slice-3 w-1/3 h-full bg-muted/30"></div>
          </div>
          <img 
            src="https://www.elderattorneylongisland.com/wp-content/uploads/2022/06/Lisa_Singer_001-E3_1-1200x800.jpg" 
            alt="Lisa Singer - Experienced Elder Law Attorney serving Long Island families since 1994" 
            class="w-full h-full object-cover object-top"
            loading="lazy"
          />
        </div>
      </div>

      <!-- Text Content -->
      <div class="showcase-text-2 lg:order-2">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Meet Your Attorney
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground mb-4">
          Lisa Singer, Esq.
        </h2>
        <p class="text-5xl md:text-6xl font-semibold text-primary/15 mb-6">Since 1994</p>
        
        <div class="bg-white rounded-2xl p-6 border border-border/50 shadow-sm">
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Lisa Singer, PLLC takes advocacy seriously. We listen to our clients and work closely with them to create comprehensive and customized legal solutions to achieve their goals.
          </p>
          <div class="flex flex-wrap gap-3">
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/5 text-primary text-[13px] font-medium">
              Elder Law Specialist
            </span>
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/5 text-primary text-[13px] font-medium">
              30+ Years Experience
            </span>
            <span class="inline-flex items-center px-3 py-1.5 rounded-lg bg-primary/5 text-primary text-[13px] font-medium">
              Long Island Native
            </span>
          </div>
        </div>

        <a href="<?php echo home_url('/about'); ?>" class="inline-flex items-center mt-6 text-[14px] text-primary font-medium group">
          Learn More About Lisa
          <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>
