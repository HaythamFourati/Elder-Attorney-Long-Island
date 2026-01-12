# GSAP WP Boilerplate

A modern, high-performance WordPress theme boilerplate with Tailwind CSS v4, React enhancements, and GSAP animations. The perfect starting point for professional WordPress projects.

## Features

- **Tailwind CSS v4** - Latest utility-first CSS with custom design tokens
- **React Enhancements** - Client-side interactivity via `Enhancer.jsx`
- **GSAP + ScrollTrigger** - Smooth scroll-linked animations (desktop only)
- **Mobile-First** - Responsive design with mobile performance optimizations
- **Accessibility** - Respects `prefers-reduced-motion`, visible focus states
- **Core Web Vitals Optimized** - Fast LCP, minimal CLS, deferred JS
- **Contact Form 7 Ready** - Pre-styled CF7 form integration
- **BrowserSync** - Live reload during development

---

## Quick Start

### 1. Install the Theme

Copy the theme folder to your WordPress installation:

```bash
cp -r gsap-wp-boilerplate /path/to/wordpress/wp-content/themes/
```

### 2. Install Dependencies

```bash
cd wp-content/themes/gsap-wp-boilerplate
npm install
```

### 3. Configure Your Site

Edit `functions.php` and update the site configuration constants:

```php
// Brand
define('SITE_NAME', 'Your Brand');
define('SITE_TAGLINE', 'Your Tagline');
define('SITE_LOGO_INITIALS', 'YB');

// Contact
define('SITE_PHONE', '(555) 123-4567');
define('SITE_PHONE_LINK', '555-123-4567');
define('SITE_EMAIL', 'hello@yourdomain.com');

// Office(s)
define('SITE_OFFICE_PRIMARY_NAME', 'Main Office');
define('SITE_OFFICE_PRIMARY_ADDRESS', '123 Main St, City, ST 12345');

// Social Links (leave empty to hide)
define('SITE_SOCIAL_FACEBOOK', 'https://facebook.com/yourpage');
define('SITE_SOCIAL_LINKEDIN', '');
define('SITE_SOCIAL_TWITTER', '');
define('SITE_SOCIAL_INSTAGRAM', '');

// Trust Indicators
define('SITE_YEARS_EXPERIENCE', '10+');
define('SITE_CLIENTS_HELPED', '500+');
define('SITE_RATING', '5.0');
define('SITE_RATING_SOURCE', 'Google');
```

### 4. Update BrowserSync Domain

Edit `package.json` and replace `your-site.local` with your local WordPress domain:

```json
"sync": "browser-sync start -p 'your-site.local' --files '**/*.php' 'build/*.js' 'build/*.css'"
```

### 5. Build & Activate

```bash
# Build for production
npm run build

# Or start development mode
npm run preview
```

Then activate the theme in WordPress Admin → Appearance → Themes.

---

## Project Structure

```
gsap-wp-boilerplate/
├── build/                    # Compiled assets (generated)
│   ├── index.js              # Bundled React/GSAP
│   └── index.css             # Compiled Tailwind
├── src/
│   ├── index.js              # React entry point
│   ├── index.css             # Tailwind entry (tokens + layers)
│   └── components/
│       └── Enhancer.jsx      # React enhancements & GSAP animations
├── template-parts/           # Reusable PHP partials
│   ├── header-nav.php        # Site navigation
│   ├── section-hero.php      # Homepage hero
│   ├── section-practice-areas.php  # Services grid
│   ├── section-about.php     # About section
│   ├── section-testimonials.php    # Testimonials grid
│   ├── section-contact.php   # Contact form
│   └── footer-site.php       # Site footer
├── front-page.php            # Homepage template
├── page-blog.php             # Blog listing template
├── single.php                # Single blog post
├── archive.php               # Category/tag archives
├── index.php                 # Fallback template
├── header.php                # Document head + SEO
├── footer.php                # Document footer
├── functions.php             # Theme setup & configuration
├── style.css                 # Theme metadata (required by WP)
└── package.json              # NPM scripts & dependencies
```

---

## NPM Scripts

| Command | Description |
|---------|-------------|
| `npm run preview` | Full dev environment with BrowserSync live reload |
| `npm run start` | JS + CSS watch (no BrowserSync) |
| `npm run build` | Production build (minified) |
| `npm run buildwp` | Build JS only |
| `npm run tailwindbuild` | Build CSS only |
| `npm run tailwindwatch` | Watch CSS only |

---

## Customization Guide

### Updating Content

Most content is in the `template-parts/` folder. Each file has `TODO` comments marking what to customize:

| File | What to Update |
|------|----------------|
| `section-hero.php` | Headline, subheadline, hero image |
| `section-practice-areas.php` | Services array (icons, titles, descriptions) |
| `section-about.php` | About copy, team/founder info, images |
| `section-testimonials.php` | Testimonials array |
| `section-contact.php` | Form fields, CF7 shortcode ID |
| `header-nav.php` | Navigation links |
| `footer-site.php` | Footer links, tagline |

### Changing Colors

Edit the design tokens in `src/index.css`:

```css
@theme {
  /* Primary brand color */
  --color-primary: hsl(224 76% 32%);
  
  /* Accent color */
  --color-accent: hsl(18 76% 52%);
  
  /* Background */
  --color-background: hsl(220 20% 97%);
  
  /* Text colors */
  --color-foreground: hsl(222 47% 11%);
  --color-muted-foreground: hsl(220 9% 46%);
}
```

After editing, rebuild CSS:

```bash
npm run tailwindbuild
```

### Adding Service Icons

Icons are from [Lucide](https://lucide.dev). Copy the SVG code directly into the services array in `section-practice-areas.php`:

```php
$services = [
  [
    'icon' => '<svg class="w-5 h-5" ...>...</svg>',
    'title' => 'Your Service',
    'description' => 'Service description.',
    'url' => '/your-service-page'
  ],
  // ...
];
```

### Contact Form 7 Setup

1. Install the Contact Form 7 plugin
2. Create a new form in Contact → Contact Forms
3. Copy the form shortcode
4. Update `section-contact.php` with your shortcode:

```php
echo do_shortcode('[contact-form-7 id="abc123" title="Contact Form"]');
```

The theme includes pre-styled CF7 classes. Use this form template:

```html
<div class="cf7-custom-form">
  <div class="cf7-row cf7-two-col">
    <div class="cf7-field">
      <label class="cf7-label">Full Name</label>
      [text* your-name class:cf7-input placeholder "John Smith"]
    </div>
    <div class="cf7-field">
      <label class="cf7-label">Phone</label>
      [tel* your-phone class:cf7-input placeholder "(555) 123-4567"]
    </div>
  </div>
  <div class="cf7-field">
    <label class="cf7-label">Email</label>
    [email* your-email class:cf7-input placeholder "john@example.com"]
  </div>
  <div class="cf7-field">
    <label class="cf7-label">Message</label>
    [textarea* your-message class:cf7-textarea rows:4 placeholder "How can we help?"]
  </div>
  <div class="cf7-submit-wrap">
    [submit class:cf7-submit "Send Message"]
  </div>
</div>
```

---

## GSAP Animations

All animations are in `src/components/Enhancer.jsx`. The theme includes:

### On-Load Animations
- Header slide-in
- Hero text character reveal (desktop)
- Hero image slice reveal
- Hero badge pop-in

### Scroll Animations (Desktop Only)
- Section headers fade up
- Cards batch animate with stagger
- Image slice reveals
- Content fade-in

### Adding New Animations

1. Add a CSS class to your element (e.g., `.my-animated-element`)
2. Add the animation in `Enhancer.jsx`:

```jsx
// Inside the useEffect with GSAP context
ScrollTrigger.create({
  trigger: '.my-animated-element',
  start: 'top 80%',
  once: true,
  onEnter: () => {
    gsap.fromTo('.my-animated-element',
      { y: 40, opacity: 0 },
      { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
    )
  }
})
```

---

## Creating New Pages

### Option 1: Simple Page (uses default template)

Create a page in WordPress Admin. It will use `index.php` or `page.php`.

### Option 2: Custom Page Template

1. Create a new file: `page-{slug}.php` or `template-{name}.php`
2. Add the template header:

```php
<?php
/**
 * Template Name: My Custom Page
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Your content here -->
  
  <?php get_template_part('template-parts/section-contact'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root (required for animations) -->
<div id="react-enhancer"></div>

<?php get_footer();
```

---

## Performance

### Mobile Optimizations
- ScrollTrigger animations disabled on mobile (< 1024px)
- Simple fade-in animations only
- All content visible immediately
- Native browser scroll

### Desktop Optimizations
- `ScrollTrigger.batch()` for efficient card animations
- One-time triggers (not continuous scrub)
- Deferred JS loading
- Hero image preloading

### Accessibility
- `prefers-reduced-motion` fully respected
- Visible focus states on all interactive elements
- Semantic HTML structure
- ARIA labels where needed

---

## Tech Stack

| Technology | Version | Purpose |
|------------|---------|---------|
| PHP | 7.4+ | WordPress templates |
| Tailwind CSS | v4.0 | Utility-first styling |
| React | 18+ | Client-side enhancements |
| GSAP | 3.14+ | Scroll animations |
| @wordpress/scripts | 30+ | JS bundling (webpack) |
| BrowserSync | 3.0 | Live reload |

---

## Checklist for New Projects

- [ ] Update `functions.php` site configuration
- [ ] Update `package.json` BrowserSync domain
- [ ] Customize `section-hero.php` headline and image
- [ ] Update `section-practice-areas.php` services
- [ ] Update `section-about.php` content and images
- [ ] Replace `section-testimonials.php` testimonials
- [ ] Configure Contact Form 7 and update shortcode
- [ ] Update `header.php` SEO meta tags
- [ ] Update `footer-site.php` links and tagline
- [ ] Update `Enhancer.jsx` reviews carousel (if used)
- [ ] Replace `screenshot.png` with your design
- [ ] Update `style.css` theme name and author
- [ ] Run `npm run build` for production

---

## License

GPL-2.0-or-later

---

## Credits

Built with modern WordPress development best practices. Uses:
- [Tailwind CSS](https://tailwindcss.com)
- [GSAP](https://greensock.com/gsap/)
- [Lucide Icons](https://lucide.dev)
- [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)
