<?php
/**
 * Testimonials Section - Clean 2025 Modern Design
 * Real Google Reviews from Elder Attorney Long Island
 */

$testimonials = [
  [
    'name' => 'Gladys Delgado',
    'time' => '5 months ago',
    'text' => 'Lisa Singer was extremely professional, knowledgeable, and always greeted me with a smile. She understood the details thoroughly and prepared documents which were tailored to our specific needs.',
    'rating' => 5
  ],
  [
    'name' => 'Lia B',
    'time' => '2 months ago',
    'text' => 'Lisa Singer is very knowledgeable and conscientious. She and her staff are easy and pleasant to work with. Highly recommend.',
    'rating' => 5
  ],
  [
    'name' => 'Barbra Zuckerman',
    'time' => '11 months ago',
    'text' => 'Met with Ms. Singer to guide me through challenges with my elderly mom. Lisa was very welcoming and knowledgeable and truly a very nice person.',
    'rating' => 5
  ],
  [
    'name' => 'Sharron Raziel',
    'time' => 'a year ago',
    'text' => 'Lisa Singer was the most informative, patient and supportive advisor. She gave me the guidance I so desperately needed.',
    'rating' => 5
  ],
  [
    'name' => 'Bill Albrecht',
    'time' => '7 months ago',
    'text' => 'Lisa is a great and competent lawyer. She handled my mom\'s estate and will and assisted with the buyout of an inherited house.',
    'rating' => 5
  ],
  [
    'name' => 'ROE Morrone',
    'time' => 'a year ago',
    'text' => 'Excellent service. I had Lisa Singer create a trust and will for me. Everything was explained in layman terms.',
    'rating' => 5
  ],
  [
    'name' => 'Louise Braverman',
    'time' => 'a year ago',
    'text' => 'Lisa Singer made a difficult time so much easier in handling the probate and processing of my mother\'s will.',
    'rating' => 5
  ],
  [
    'name' => 'Renee Abruzzino',
    'time' => '3 years ago',
    'text' => 'I am pleased to recommend Lisa Singer for Estate Planning. She is knowledgeable, compassionate and professional.',
    'rating' => 5
  ],
  [
    'name' => 'Hallie Klein',
    'time' => '5 years ago',
    'text' => 'Attorney Lisa Singer is amazing! She is knowledgeable, thorough, patient and kind.',
    'rating' => 5
  ],
  
];
?>
<section id="testimonials" class="py-16 lg:py-24">
  <div class="max-w-6xl mx-auto px-4">
    <!-- Section Header -->
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 lg:gap-6 mb-10 lg:mb-14">
      <div class="max-w-xl">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          Client Testimonials
        </span>
        <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-foreground">
          What Our Clients Say
        </h2>
      </div>
      <p class="text-muted-foreground text-[15px] leading-relaxed max-w-md lg:text-right">
        We're honored to have helped hundreds of Long Island families protect their loved ones and their legacies.
      </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
      <?php foreach ($testimonials as $index => $testimonial): ?>
      <article class="testimonial-card group relative p-6 rounded-2xl bg-white border border-border/50 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
        <!-- Quote Icon -->
        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center mb-5">
          <svg class="w-5 h-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/></svg>
        </div>

        <!-- Stars -->
        <div class="flex gap-0.5 mb-4">
          <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
          <svg class="w-4 h-4 fill-amber-400 text-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>

        <!-- Quote -->
        <blockquote class="text-foreground/80 text-[15px] leading-relaxed mb-6">"<?php echo esc_html($testimonial['text']); ?>"</blockquote>

        <!-- Author -->
        <div class="pt-5 border-t border-border/50">
          <p class="font-semibold text-[15px] text-foreground"><?php echo esc_html($testimonial['name']); ?></p>
          <p class="text-[13px] text-muted-foreground">Google Review</p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <!-- Google Reviews Link -->
    <div class="mt-12 text-center">
      <a href="https://share.google/VxXBn1SQ9iiWE1Jtx" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 px-6 py-3 rounded-xl bg-white border border-border/50 hover:border-primary/20 hover:shadow-lg transition-all duration-200">
        <svg class="w-6 h-6" viewBox="0 0 24 24">
          <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
          <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
          <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
          <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
        </svg>
        <span class="text-[14px] font-medium text-foreground">View All Reviews on Google</span>
        <svg class="w-4 h-4 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
      </a>
    </div>
  </div>
</section>
