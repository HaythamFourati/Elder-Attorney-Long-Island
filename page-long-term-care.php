<?php
/**
 * Template Name: Long-Term Care
 * Service Page - Long-Term Care Planning
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-8 pb-16 lg:pt-12 lg:pb-24 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
        <div class="service-hero-content">
          <div class="flex items-center gap-6 mb-6">
            <a href="<?php echo home_url(); ?>/#practice-areas" class="inline-flex items-center gap-2 text-[13px] text-primary font-medium hover:text-primary/80 transition-colors">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
              Back to Services
            </a>
            <span class="inline-flex items-center text-[13px] text-primary font-medium tracking-wide">
              <span class="w-8 h-px bg-primary/40 mr-3"></span>
              Practice Area
            </span>
          </div>
          
          <h1 class="service-heading text-4xl md:text-5xl lg:text-[56px] font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
            Long-Term Care Planning
          </h1>
          
          <p class="text-lg text-muted-foreground mb-8 leading-relaxed max-w-lg">
            Comprehensive planning for nursing home and assisted living care while protecting your hard-earned assets for future generations.
          </p>
          
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#contact" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl bg-primary text-white text-[15px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/20">
              Schedule Free Consultation
              <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </a>
            <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="inline-flex items-center justify-center px-6 py-3.5 rounded-xl border border-border text-foreground/80 text-[15px] font-medium hover:bg-muted/50 hover:border-primary/20 transition-all duration-200">
              <svg class="w-4 h-4 mr-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <?php echo esc_html(SITE_PHONE); ?>
            </a>
          </div>
        </div>
        
        <!-- Hero Image -->
        <div class="relative mt-8 lg:mt-0">
          <div class="service-hero-image relative rounded-2xl lg:rounded-3xl overflow-hidden aspect-[4/3]">
            <div class="hero-image-slices absolute inset-0 z-10 flex">
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
            </div>
            <img 
              src="https://www.elderattorneylongisland.com/wp-content/uploads/2022/04/AdobeStock_419808796-1200x800.jpg" 
              alt="Long-term care planning for seniors" 
              class="w-full h-full object-cover"
              loading="eager"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-16 lg:py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2 service-content">
          <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-foreground mb-6">
            What is Long-Term Care Planning?
          </h2>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Long-term care planning involves preparing for the possibility that you or a loved one may need extended care services, whether at home, in an assisted living facility, or in a nursing home. This type of planning is essential because the costs of long-term care can be substantial and can quickly deplete a lifetime of savings.
          </p>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
            At Elder Attorney Long Island, we help families navigate the complex landscape of long-term care options while implementing legal strategies to protect assets and ensure quality care for your loved ones.
          </p>

          <h3 class="text-xl font-semibold text-foreground mb-4">Our Long-Term Care Services Include:</h3>
          <ul class="space-y-4 mb-8">
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Nursing Home Planning</p>
                <p class="text-[14px] text-muted-foreground">Strategic planning to help you qualify for Medicaid while protecting assets for your spouse and family.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Assisted Living Guidance</p>
                <p class="text-[14px] text-muted-foreground">Help selecting appropriate care facilities and understanding payment options.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Home Care Coordination</p>
                <p class="text-[14px] text-muted-foreground">Planning for in-home care services and understanding available benefits.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Asset Protection Strategies</p>
                <p class="text-[14px] text-muted-foreground">Legal techniques to preserve your assets while ensuring eligibility for benefits.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Veterans Benefits</p>
                <p class="text-[14px] text-muted-foreground">Assistance with VA Aid and Attendance benefits for eligible veterans and surviving spouses.</p>
              </div>
            </li>
          </ul>

          <h3 class="text-xl font-semibold text-foreground mb-4">Why Plan Ahead?</h3>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            The average cost of nursing home care in New York exceeds $150,000 per year. Without proper planning, these costs can devastate a family's finances in just a few years. By planning ahead, you can:
          </p>
          <div class="grid sm:grid-cols-2 gap-4 mb-8">
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Protect Your Home</p>
              <p class="text-[13px] text-muted-foreground mt-1">Keep your family home safe from being used to pay for care costs.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Preserve Savings</p>
              <p class="text-[13px] text-muted-foreground mt-1">Protect your life savings for your spouse and children.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Ensure Quality Care</p>
              <p class="text-[13px] text-muted-foreground mt-1">Have resources available to supplement care when needed.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Reduce Family Stress</p>
              <p class="text-[13px] text-muted-foreground mt-1">Give your family peace of mind with a clear plan in place.</p>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
          <div class="sticky top-8 space-y-6">
            <!-- CTA Card -->
            <div class="bg-primary rounded-2xl p-6 text-white">
              <h3 class="text-lg font-semibold mb-3">Free Consultation</h3>
              <p class="text-white/80 text-[14px] mb-5">
                Get personalized guidance on your long-term care planning needs. We're here to help protect your family's future.
              </p>
              <a href="#contact" class="block w-full py-3 rounded-xl bg-white text-primary text-center text-[14px] font-medium hover:bg-white/90 transition-colors">
                Schedule Now
              </a>
              <p class="text-white/60 text-[12px] text-center mt-3">No obligation • Confidential</p>
            </div>

            <!-- Other Services -->
            <div class="bg-white rounded-2xl p-6 border border-border/50">
              <h3 class="text-[15px] font-semibold text-foreground mb-4">Related Services</h3>
              <ul class="space-y-3">
                <li>
                  <a href="/medicaid-planning" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    Medicaid Planning
                  </a>
                </li>
                <li>
                  <a href="/asset-protection" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                    </div>
                    Asset Protection
                  </a>
                </li>
                <li>
                  <a href="/elder-law" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/></svg>
                    </div>
                    Elder Law
                  </a>
                </li>
                <li>
                  <a href="/estate-planning" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    </div>
                    Estate Planning
                  </a>
                </li>
              </ul>
            </div>

            <!-- Contact Info -->
            <div class="bg-muted/30 rounded-2xl p-6">
              <h3 class="text-[15px] font-semibold text-foreground mb-4">Questions?</h3>
              <div class="space-y-3">
                <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="flex items-center gap-3 text-[14px] text-foreground hover:text-primary transition-colors">
                  <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                  <?php echo esc_html(SITE_PHONE); ?>
                </a>
                <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors">
                  <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                  <?php echo esc_html(SITE_EMAIL); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/section-page-content'); ?>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
