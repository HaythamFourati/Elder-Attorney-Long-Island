# Elder Attorney Long Island - WordPress Theme

A modern, high-performance WordPress theme built for Elder Attorney Long Island. Features a clean 2025 aesthetic with smooth animations, optimized for Core Web Vitals.

## Tech Stack

| Technology | Purpose |
|------------|---------|
| **PHP** | WordPress template files (server-rendered for SEO) |
| **React** | Client-side enhancements via `Enhancer.jsx` |
| **Tailwind CSS v4** | Utility-first styling with custom design tokens |
| **GSAP + ScrollTrigger** | Scroll-linked animations (desktop only) |
| **@wordpress/scripts** | JS bundling (webpack under the hood) |
| **BrowserSync** | Live reload during development |

## Project Structure

```
shadcn-wp-theme/
├── build/                    # Compiled assets (git-ignored)
│   ├── index.js              # Bundled React/GSAP
│   └── index.css             # Compiled Tailwind
├── src/
│   ├── index.js              # React entry point
│   ├── index.css             # Tailwind entry (tokens + layers)
│   └── components/
│       └── Enhancer.jsx      # All React enhancements
├── template-parts/           # Reusable PHP partials
│   ├── header-nav.php        # Site navigation
│   ├── section-hero.php      # Homepage hero
│   ├── section-practice-areas.php
│   ├── section-about.php
│   ├── section-testimonials.php
│   ├── section-contact.php
│   └── footer-site.php
├── front-page.php            # Homepage template
├── page-about.php            # About Lisa Singer
├── page-blog.php             # Blog listing (Template Name: Blog)
├── page-long-term-care.php   # Service page
├── page-elder-law.php        # Service page
├── page-estate-planning.php  # Service page
├── page-medicaid-planning.php# Service page
├── page-asset-protection.php # Service page
├── page-probate.php          # Service page
├── single.php                # Single blog post
├── archive.php               # Category/tag archives
├── index.php                 # Fallback template
├── functions.php             # Theme setup & enqueues
├── style.css                 # Theme metadata (required by WP)
└── package.json              # NPM scripts & dependencies
```

## Getting Started

### Prerequisites

- Node.js 18+
- Local WordPress environment (Local by Flywheel, MAMP, etc.)
- Theme installed in `wp-content/themes/`

### Installation

```bash
# Navigate to theme directory
cd wp-content/themes/shadcn-wp-theme

# Install dependencies
npm install

# Build for production
npm run build
```

### Development

```bash
# Start development with live reload
npm run preview
```

This runs three processes in parallel:
1. **BrowserSync** - Proxies `shadcntest.local` with live reload
2. **wp-scripts start** - Watches and rebuilds JS
3. **Tailwind CLI** - Watches and rebuilds CSS

### NPM Scripts

| Command | Description |
|---------|-------------|
| `npm run preview` | Full dev environment with BrowserSync |
| `npm run start` | JS + CSS watch (no BrowserSync) |
| `npm run build` | Production build (minified) |
| `npm run buildwp` | Build JS only |
| `npm run tailwindbuild` | Build CSS only |

## Design System

### Colors (defined in `src/index.css`)

```css
--color-primary: hsl(224 76% 32%);      /* Deep sapphire blue */
--color-accent: hsl(18 76% 52%);        /* Copper/terracotta */
--color-background: hsl(220 20% 97%);   /* Light gray */
--color-foreground: hsl(222 47% 11%);   /* Near black */
--color-muted-foreground: hsl(220 9% 46%);
```

### Typography

- **Headings**: System font stack, semibold, tight tracking
- **Body**: 15px base, relaxed line height
- **Small text**: 13px for labels, 12px for meta

### Spacing Rhythm

- Section padding: `py-24` (6rem)
- Card padding: `p-6` (1.5rem)
- Max content width: `max-w-6xl` (72rem)

## Performance Optimizations

### Mobile (< 1024px)
- ❌ ScrollTrigger animations disabled
- ✅ Simple fade-in animations only
- ✅ All content visible immediately
- ✅ Native browser scroll (no JS overhead)

### Desktop
- ✅ Native browser scroll (lightweight, universal)
- ✅ ScrollTrigger.batch() for card animations
- ✅ One-time triggers (not continuous scrub)
- ✅ Deferred JS loading

### Accessibility
- ✅ `prefers-reduced-motion` respected
- ✅ All animations disabled for users who prefer reduced motion
- ✅ Visible focus states
- ✅ Semantic HTML structure

### Core Web Vitals (measured)
- **LCP**: 0.49s (Excellent)
- **CLS**: 0.02 (Excellent)
- **Scripting**: 244ms total

## Page Templates

### Homepage (`front-page.php`)
Automatically used for the site's front page. Includes:
- Hero with split text animation
- Practice areas grid
- About section with image reveal
- Testimonials carousel
- Contact form
- Footer

### Service Pages (`page-{service}.php`)
Create a WordPress page with matching slug:
- `/long-term-care`
- `/elder-law`
- `/estate-planning`
- `/medicaid-planning`
- `/asset-protection`
- `/probate`

### About Page (`page-about.php`)
Create a page with slug `/about` or select "About" template.

### Blog (`page-blog.php`)
Create a page with slug `/blog` or select "Blog" template.

## Animations

### On-Load (runs once)
- Header slides in from top
- Hero text character-by-character reveal (desktop)
- Hero image slice reveal
- Hero badge pop-in

### On-Scroll (desktop only)
- Section headers fade up
- Cards batch animate with stagger
- Image slice reveals
- Content fade-in

## Adding New Pages

1. Create PHP template: `page-{slug}.php`
2. Add Template Name comment if needed:
   ```php
   <?php
   /**
    * Template Name: My Custom Page
    */
   ```
3. Include header-nav and footer-site partials
4. Add `#react-enhancer` div before `get_footer()`
5. Add any new animation selectors to `Enhancer.jsx`

## Contact Information

- **Phone**: 888-851-2272
- **Email**: info@elderattorneylongisland.com
- **Offices**: Melville & Queens, NY

## Credits

- **Theme Development**: [Local Vocal Marketing](https://localvocalmarketing.com/)
- **Client**: Elder Attorney Long Island / Lisa Singer, PLLC

---

© 2025 Elder Attorney Long Island. All rights reserved.
