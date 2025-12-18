<?php
/**
 * Header Navigation - Clean 2025 Modern Design
 * React enhances with scroll animations
 */
?>
<header id="site-header" class="sticky top-0 z-50 w-full pt-4">
  <nav id="navbar-root" class="relative z-40 w-full px-4">
    <div class="relative z-[60] mx-auto hidden w-full max-w-6xl flex-row items-center justify-between rounded-2xl bg-white/80 backdrop-blur-md border border-primary/10 px-6 py-3 lg:flex transition-all duration-500 ease-out shadow-sm">
      <!-- Logo -->
      <a href="<?php echo home_url(); ?>" class="relative z-20 flex items-center gap-3">
        <!-- Modern logo mark using primary color -->
        <div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center transition-all duration-300">
          <span class="text-white font-semibold text-sm tracking-tight">EA</span>
        </div>
        <div class="flex flex-col">
          <span class="font-semibold text-[15px] leading-tight text-foreground tracking-tight transition-colors duration-300">Elder Attorney</span>
          <span class="text-[11px] leading-tight text-muted-foreground tracking-wide uppercase transition-colors duration-300">Long Island</span>
        </div>
      </a>

      <!-- Navigation Items -->
      <div class="flex flex-row items-center gap-1">
        <div class="relative group">
          <a href="#practice-areas" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium flex items-center gap-1.5 transition-colors duration-200 rounded-lg hover:bg-primary/5">
            Services
            <svg class="w-3.5 h-3.5 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </a>
          <!-- Dropdown -->
          <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-56 bg-white rounded-xl shadow-xl shadow-primary/10 border border-border py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
            <a href="<?php echo home_url('/long-term-care'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:bg-primary/5 hover:text-primary transition-colors">
              Long-Term Care
            </a>
            <a href="<?php echo home_url('/elder-law'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:bg-primary/5 hover:text-primary transition-colors">
              Elder Law
            </a>
            <a href="<?php echo home_url('/estate-planning'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:bg-primary/5 hover:text-primary transition-colors">
              Estate Planning
            </a>
            <a href="<?php echo home_url('/medicaid-planning'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:bg-primary/5 hover:text-primary transition-colors">
              Medicaid Planning
            </a>
            <a href="<?php echo home_url('/asset-protection'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:bg-primary/5 hover:text-primary transition-colors">
              Asset Protection
            </a>
            <a href="<?php echo home_url('/probate'); ?>" class="flex items-center gap-3 px-4 py-2.5 text-[13px] text-foreground/70 hover:bg-primary/5 hover:text-primary transition-colors">
              Probate
            </a>
          </div>
        </div>
        <a href="<?php echo home_url('/about'); ?>" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">About</a>
        <a href="<?php echo home_url('/blog'); ?>" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">Blog</a>
        <a href="#testimonials" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">Reviews</a>
        <a href="#contact" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">Contact</a>
      </div>

      <!-- Actions -->
      <div class="relative z-20 flex items-center gap-5">
        <a href="tel:888-851-2272" class="flex items-center gap-2 text-[13px] text-foreground/70 hover:text-primary transition-all duration-300 font-medium">
          <span class="tracking-tight">888-851-2272</span>
        </a>
        <a href="#contact" class="px-5 py-2.5 rounded-xl bg-primary text-white text-[13px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
          Free Consultation
        </a>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-nav-root" class="relative z-50 mx-auto flex w-full flex-col items-center justify-between bg-white/80 backdrop-blur-md rounded-2xl border border-primary/10 px-4 py-3 lg:hidden">
      <div class="flex w-full flex-row items-center justify-between">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
            <span class="text-white font-semibold text-xs tracking-tight">EA</span>
          </div>
          <span class="font-semibold text-sm text-foreground tracking-tight">Elder Attorney</span>
        </a>
        <button id="mobile-menu-toggle" class="w-9 h-9 flex items-center justify-center rounded-lg hover:bg-primary/5 transition-colors" aria-label="Toggle menu">
          <svg class="w-5 h-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </nav>
</header>
