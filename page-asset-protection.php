<?php
/**
 * Template Name: Asset Protection
 * Service Page - Asset Protection
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-8 pb-16 lg:pt-12 lg:pb-24 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="service-hero-content">
          <a href="<?php echo home_url(); ?>/#practice-areas" class="inline-flex items-center gap-2 mb-6 text-[13px] text-primary font-medium hover:text-primary/80 transition-colors">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
            Back to Services
          </a>
          
          <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
            <span class="w-8 h-px bg-primary/40 mr-3"></span>
            Practice Area
          </span>
          
          <h1 class="service-heading text-4xl md:text-5xl lg:text-[56px] font-semibold tracking-tight mb-6 leading-[1.1] text-foreground">
            Asset Protection
          </h1>
          
          <p class="text-lg text-muted-foreground mb-8 leading-relaxed max-w-lg">
            Legal strategies to shield your hard-earned assets from creditors, lawsuits, and long-term care costs while maintaining control of your wealth.
          </p>
          
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
          <div class="service-hero-image relative rounded-3xl overflow-hidden aspect-[4/3]">
            <div class="hero-image-slices absolute inset-0 z-10 flex">
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
              <div class="w-1/3 h-full bg-background"></div>
            </div>
            <img 
              src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2000&auto=format&fit=crop" 
              alt="Asset protection and wealth preservation" 
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
            What is Asset Protection?
          </h2>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Asset protection is a set of legal strategies designed to safeguard your wealth from potential creditors, lawsuits, and other threats. Proper planning can help ensure that the assets you've worked hard to accumulate remain available for you and your family.
          </p>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-8">
            At Elder Attorney Long Island, we help clients implement proactive asset protection strategies that are both legally sound and tailored to their specific circumstances. The key to effective asset protection is planning ahead—before any claims or threats arise.
          </p>

          <h3 class="text-xl font-semibold text-foreground mb-4">Our Asset Protection Services Include:</h3>
          <ul class="space-y-4 mb-8">
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Irrevocable Trusts</p>
                <p class="text-[14px] text-muted-foreground">Transfer assets out of your estate to protect them from future creditors and reduce estate taxes.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Medicaid Asset Protection Trusts</p>
                <p class="text-[14px] text-muted-foreground">Protect assets from nursing home costs while planning for potential Medicaid eligibility.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Family Limited Partnerships</p>
                <p class="text-[14px] text-muted-foreground">Structure family assets to provide protection while maintaining family control.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">LLC Formation</p>
                <p class="text-[14px] text-muted-foreground">Create limited liability companies to separate and protect business and personal assets.</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <div class="w-6 h-6 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-3.5 h-3.5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <p class="font-medium text-foreground">Homestead Protection</p>
                <p class="text-[14px] text-muted-foreground">Maximize the legal protections available for your primary residence.</p>
              </div>
            </li>
          </ul>

          <h3 class="text-xl font-semibold text-foreground mb-4">Who Needs Asset Protection?</h3>
          <p class="text-muted-foreground text-[15px] leading-relaxed mb-6">
            Asset protection isn't just for the wealthy. Anyone with assets to protect can benefit from proper planning, especially:
          </p>
          <div class="grid sm:grid-cols-2 gap-4 mb-8">
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Business Owners</p>
              <p class="text-[13px] text-muted-foreground mt-1">Protect personal assets from business liabilities and lawsuits.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Real Estate Investors</p>
              <p class="text-[13px] text-muted-foreground mt-1">Shield properties and rental income from potential claims.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Professionals</p>
              <p class="text-[13px] text-muted-foreground mt-1">Doctors, lawyers, and others at higher risk of malpractice claims.</p>
            </div>
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10">
              <p class="font-medium text-foreground text-[15px]">Seniors</p>
              <p class="text-[13px] text-muted-foreground mt-1">Protect assets from the high costs of long-term care.</p>
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
                Get personalized guidance on protecting your assets. We're here to help secure your family's financial future.
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
                  <a href="/estate-planning" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    </div>
                    Estate Planning
                  </a>
                </li>
                <li>
                  <a href="/long-term-care" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors group">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    Long-Term Care
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
              </ul>
            </div>

            <!-- Contact Info -->
            <div class="bg-muted/30 rounded-2xl p-6">
              <h3 class="text-[15px] font-semibold text-foreground mb-4">Questions?</h3>
              <div class="space-y-3">
                <a href="tel:888-851-2272" class="flex items-center gap-3 text-[14px] text-foreground hover:text-primary transition-colors">
                  <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                  888-851-2272
                </a>
                <a href="mailto:info@elderattorneylongisland.com" class="flex items-center gap-3 text-[14px] text-muted-foreground hover:text-primary transition-colors">
                  <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                  info@elderattorneylongisland.com
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
