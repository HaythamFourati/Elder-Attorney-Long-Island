<?php
/**
 * Practice Areas Section - Clean 2025 Modern Design
 */

$practice_areas = [
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    'title' => 'Long-Term Care',
    'description' => 'Planning for nursing home and assisted living care while protecting your assets.',
    'url' => '/long-term-care'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/></svg>',
    'title' => 'Elder Law',
    'description' => 'Comprehensive legal services tailored to the unique needs of seniors and their families.',
    'url' => '/elder-law'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
    'title' => 'Estate Planning',
    'description' => 'Wills, trusts, and powers of attorney to protect your legacy and loved ones.',
    'url' => '/estate-planning'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'title' => 'Medicaid Planning',
    'description' => 'Strategic planning to qualify for Medicaid while preserving family assets.',
    'url' => '/medicaid-planning'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>',
    'title' => 'Asset Protection',
    'description' => 'Legal strategies to shield your hard-earned assets from creditors and long-term care costs.',
    'url' => '/asset-protection'
  ],
  [
    'icon' => '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
    'title' => 'Probate & Administration',
    'description' => 'Guiding families through the estate settlement process with compassion and expertise.',
    'url' => '/probate'
  ]
];
?>
<section id="practice-areas" class="py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Header -->
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 lg:gap-6 mb-10 lg:mb-14">
      <div class="max-w-xl">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Our Services
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground">
          Practice Areas
        </h2>
      </div>
      <p class="text-muted-foreground text-[15px] leading-relaxed max-w-md lg:text-right">
        Comprehensive elder law services to protect you and your loved ones during life's most important transitions.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach ($practice_areas as $index => $area): ?>
      <article class="practice-card group relative p-6 rounded-2xl bg-white border border-border/50 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
            <?php echo $area['icon']; ?>
          </div>
          <div class="flex-1 min-w-0">
            <h3 class="text-[17px] font-semibold text-foreground mb-2 group-hover:text-primary transition-colors"><?php echo esc_html($area['title']); ?></h3>
            <p class="text-muted-foreground text-[14px] leading-relaxed"><?php echo esc_html($area['description']); ?></p>
          </div>
        </div>
        <div class="mt-5 pt-4 border-t border-border/50">
          <a href="<?php echo home_url($area['url']); ?>" class="inline-flex items-center text-[13px] text-primary font-medium group-hover:gap-2 transition-all">
            Learn More 
            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
