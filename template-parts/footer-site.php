<?php
/**
 * Site Footer - Clean 2025 Modern Design
 */
?>
<footer class="bg-foreground text-white/80">
  <!-- Main Footer -->
  <div class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">
      <!-- Brand Column -->
      <div class="lg:col-span-4">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-3 mb-5">
          <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center">
            <span class="text-foreground font-semibold text-sm tracking-tight">EA</span>
          </div>
          <div class="flex flex-col">
            <span class="font-semibold text-[16px] leading-tight text-white">Elder Attorney</span>
            <span class="text-[12px] leading-tight text-white/60 tracking-wide uppercase">Long Island</span>
          </div>
        </a>
        <p class="text-[14px] text-white/60 leading-relaxed mb-6 max-w-xs">
          Protecting your loved ones, legacy & peace of mind. Trusted by Long Island families since 1994.
        </p>
        <!-- Social Links -->
        <div class="flex items-center gap-3">
          <a href="https://www.facebook.com/profile.php?id=100077638514404" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="Facebook">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="https://www.linkedin.com/in/lisa-singer-97588626/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="LinkedIn">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <a href="https://share.google/OoEK6p0k20nT0o5Mr" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="Google Reviews">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          </a>
          <a href="https://x.com/longislandelder" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="X (Twitter)">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
        </div>
      </div>

      <!-- Practice Areas -->
      <nav aria-label="Practice Areas" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5">Practice Areas</h4>
        <ul class="space-y-3">
          <li><a href="<?php echo home_url('/long-term-care'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Long-Term Care</a></li>
          <li><a href="<?php echo home_url('/elder-law'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Elder Law</a></li>
          <li><a href="<?php echo home_url('/estate-planning'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Estate Planning</a></li>
          <li><a href="<?php echo home_url('/medicaid-planning'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Medicaid Planning</a></li>
          <li><a href="<?php echo home_url('/asset-protection'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Asset Protection</a></li>
          <li><a href="<?php echo home_url('/probate'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Probate</a></li>
        </ul>
      </nav>

      <!-- Quick Links -->
      <nav aria-label="Quick Links" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5">Quick Links</h4>
        <ul class="space-y-3">
          <li><a href="<?php echo home_url('/about'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">About Us</a></li>
          <li><a href="<?php echo home_url('/#testimonials'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Testimonials</a></li>
          <li><a href="<?php echo home_url('/#contact'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Contact</a></li>
          <li><a href="<?php echo home_url('/blog'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Blog</a></li>
          <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors">Privacy Policy</a></li>
        </ul>
      </nav>

      <!-- Contact Info -->
      <div class="lg:col-span-4">
        <h4 class="font-semibold text-[14px] text-white mb-5">Contact Us</h4>
        <address class="space-y-4 not-italic">
          <a href="tel:<?php echo esc_attr(SITE_PHONE_LINK); ?>" class="flex items-center gap-3 text-[13px] text-white/60 hover:text-white transition-colors">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <?php echo esc_html(SITE_PHONE); ?>
          </a>
          <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="flex items-center gap-3 text-[13px] text-white/60 hover:text-white transition-colors">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <?php echo esc_html(SITE_EMAIL); ?>
          </a>
          <div class="flex items-start gap-3 text-[13px] text-white/60">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="space-y-1">
              <p><?php echo esc_html(SITE_OFFICE_MELVILLE_ADDRESS); ?></p>
              <p><?php echo esc_html(SITE_OFFICE_QUEENS_ADDRESS); ?></p>
            </div>
          </div>
        </address>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-white/10">
    <div class="max-w-6xl mx-auto px-4 py-6">
      <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-[13px] text-white/50">
          © <?php echo date('Y'); ?> Elder Attorney Long Island. All rights reserved.
        </p>
        <div class="flex flex-col md:flex-row items-center gap-3 md:gap-6">
          <p class="text-[11px] text-white/40 text-center md:text-right max-w-xl leading-relaxed">
            Disclaimer: The materials provided on this website do not constitute legal advice and are not guaranteed to be correct, complete or up-to-date.
          </p>
          <!-- Designer Credit -->
          <a href="https://localvocalmarketing.com/" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-1.5 text-[10px] text-white/30 hover:text-white/60 transition-all duration-300">
            <span class="w-4 h-4 rounded bg-white/10 group-hover:bg-primary/80 flex items-center justify-center transition-all duration-300 group-hover:scale-110">
              <svg class="w-2.5 h-2.5 group-hover:animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
            </span>
            <span class="tracking-wide">Crafted by <span class="font-medium group-hover:text-white/80 transition-colors">Local Vocal</span></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
