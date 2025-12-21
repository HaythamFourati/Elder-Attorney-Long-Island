<?php
/**
 * Template Name: Estate Planning
 * Service Page - Estate Planning
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-8 pb-16 lg:pt-12 lg:pb-24 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
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
            Estate Planning
          </h1>
          
          <p class="text-lg text-muted-foreground mb-8 leading-relaxed max-w-lg">
            Wills, trusts, and powers of attorney to protect your legacy and ensure your loved ones are cared for according to your wishes.
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
        <div class="relative hidden lg:block">
          <div class="service-hero-image relative rounded-3xl overflow-hidden aspect-[4/3]">
            <div class="hero-image-slices absolute inset-0 z-10 flex">
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
            </div>
            <img 
              src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2000&auto=format&fit=crop" 
              alt="Estate planning documents and legal consultation" 
              class="w-full h-full object-cover"
              loading="eager"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-24">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid lg:grid-cols-3 gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2 service-content">
          <h2 class="text-2xl md:text-3xl font-semibold tracking-tight text-foreground mb-6">
            What is Estate Planning?
          </h2>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Estate planning is the process of arranging for the management and distribution of your assets during your lifetime and after death. A comprehensive estate plan ensures that your wishes are carried out, your loved ones are protected, and your legacy is preserved.
          </p>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
            At Elder Attorney Long Island, we create personalized estate plans that reflect your unique family situation, financial circumstances, and goals. Whether you have a modest estate or substantial assets, proper planning is essential.
          </p>

          <h3 class="text-xl font-semibold text-foreground mb-4">Our Estate Planning Services Include:</h3>
          <ul class="space-y-4 mb-8">
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Last Will and Testament</p>
                <p class="text-[14px] text-muted-foreground">Direct how your assets will be distributed and name guardians for minor children.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Revocable Living Trusts</p>
                <p class="text-[14px] text-muted-foreground">Avoid probate, maintain privacy, and provide for seamless asset management.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Power of Attorney</p>
                <p class="text-[14px] text-muted-foreground">Designate someone to manage your financial affairs if you become incapacitated.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Health Care Proxy</p>
                <p class="text-[14px] text-muted-foreground">Appoint someone to make medical decisions on your behalf when you cannot.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Living Will</p>
                <p class="text-[14px] text-muted-foreground">Document your wishes regarding end-of-life medical treatment.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Beneficiary Designations</p>
                <p class="text-[14px] text-muted-foreground">Review and coordinate beneficiary designations on retirement accounts and insurance.</p>
              </div>
            </li>
          </ul>

          <h3 class="text-xl font-semibold text-foreground mb-4">Benefits of Estate Planning</h3>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            A well-crafted estate plan provides peace of mind and protects your family from unnecessary stress, expense, and conflict during difficult times.
          </p>
          <div class="grid sm:grid-cols-2 gap-4 mb-8">
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Avoid Probate</p>
              <p class="text-[13px] text-muted-foreground mt-1">Keep your estate private and save time and money with proper planning.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Protect Beneficiaries</p>
              <p class="text-[13px] text-muted-foreground mt-1">Provide for minor children, special needs family members, or spendthrift heirs.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Minimize Taxes</p>
              <p class="text-[13px] text-muted-foreground mt-1">Reduce estate taxes and maximize what you leave to your loved ones.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Prevent Family Disputes</p>
              <p class="text-[13px] text-muted-foreground mt-1">Clear instructions reduce the potential for family conflict.</p>
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
                Get personalized guidance on your estate planning needs. We're here to help protect your family's future.
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
                  <a href="/elder-law" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/></svg>
                    </div>
                    Elder Law
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
                  <a href="/probate" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    Probate & Administration
                  </a>
                </li>
                <li>
                  <a href="/medicaid-planning" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    Medicaid Planning
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
