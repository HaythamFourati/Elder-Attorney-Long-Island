<?php
/**
 * Site Footer - Clean 2025 Modern Design
 * ============================================
 * Uses constants from functions.php for easy customization.
 * Social links only display if configured.
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
            <span class="text-foreground font-semibold text-sm tracking-tight"><?php echo esc_html(SITE_LOGO_INITIALS); ?></span>
          </div>
          <div class="flex flex-col">
            <span class="font-semibold text-[16px] leading-tight text-white"><?php echo esc_html(SITE_NAME); ?></span>
            <?php if (SITE_TAGLINE): ?>
            <span class="text-[12px] leading-tight text-white/60 tracking-wide uppercase"><?php echo esc_html(SITE_TAGLINE); ?></span>
            <?php endif; ?>
          </div>
        </a>
        <p class="text-[14px] text-white/60 leading-relaxed mb-6 max-w-xs">
          <!-- TODO: Update this tagline for your project -->
          Your trusted partner for professional services. Quality and excellence since day one.
        </p>
        <!-- Social Links - Only show if configured -->
        <?php if (SITE_SOCIAL_FACEBOOK || SITE_SOCIAL_LINKEDIN || SITE_SOCIAL_TWITTER || SITE_SOCIAL_INSTAGRAM): ?>
        <div class="flex items-center gap-3">
          <?php if (SITE_SOCIAL_FACEBOOK): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_FACEBOOK); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="Facebook">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (SITE_SOCIAL_LINKEDIN): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_LINKEDIN); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="LinkedIn">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (SITE_SOCIAL_TWITTER): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_TWITTER); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="X (Twitter)">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <?php endif; ?>
          <?php if (SITE_SOCIAL_INSTAGRAM): ?>
          <a href="<?php echo esc_url(SITE_SOCIAL_INSTAGRAM); ?>" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="Instagram">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>

      <!-- Services - TODO: Customize for your project -->
      <nav aria-label="Services" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5">Services</h4>
        <ul class="space-y-3">
          <li><a href="<?php echo home_url('/#services'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Service One</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Service Two</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Service Three</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">Service Four</a></li>
        </ul>
      </nav>

      <!-- Quick Links -->
      <nav aria-label="Quick Links" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5">Quick Links</h4>
        <ul class="space-y-3">
          <li><a href="<?php echo home_url('/#about'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors">About Us</a></li>
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
          <?php if (SITE_OFFICE_PRIMARY_ADDRESS): ?>
          <div class="flex items-start gap-3 text-[13px] text-white/60">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="space-y-1">
              <?php if (SITE_OFFICE_PRIMARY_NAME): ?><p class="text-white/80 font-medium"><?php echo esc_html(SITE_OFFICE_PRIMARY_NAME); ?></p><?php endif; ?>
              <p><?php echo esc_html(SITE_OFFICE_PRIMARY_ADDRESS); ?></p>
              <?php if (SITE_OFFICE_SECONDARY_ADDRESS): ?>
              <?php if (SITE_OFFICE_SECONDARY_NAME): ?><p class="text-white/80 font-medium mt-3"><?php echo esc_html(SITE_OFFICE_SECONDARY_NAME); ?></p><?php endif; ?>
              <p><?php echo esc_html(SITE_OFFICE_SECONDARY_ADDRESS); ?></p>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>
        </address>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-white/10">
    <div class="max-w-6xl mx-auto px-4 py-6">
      <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-[13px] text-white/50">
          © <?php echo date('Y'); ?> <?php echo esc_html(SITE_NAME); ?>. All rights reserved.
        </p>
        <div class="flex flex-col md:flex-row items-center gap-3 md:gap-6">
          <!-- TODO: Update or remove this disclaimer for your industry -->
          <p class="text-[11px] text-white/40 text-center md:text-right max-w-xl leading-relaxed">
            The information on this website is for general purposes only and does not constitute professional advice.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
