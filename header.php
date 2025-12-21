<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Elder Law Attorney Lisa Singer serving Long Island, NY since 1994. Expert legal services in Medicaid planning, estate planning, long-term care, and asset protection. Free consultation available.">
    <meta name="keywords" content="elder law attorney, Long Island, Melville NY, Medicaid planning, estate planning, long-term care, asset protection, probate, elder care lawyer">
    <meta name="author" content="Lisa Singer, PLLC">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:title" content="Elder Attorney Long Island - Lisa Singer, PLLC">
    <meta property="og:description" content="Protecting Long Island families since 1994. Expert elder law services including Medicaid planning, estate planning, and asset protection.">
    <meta property="og:image" content="<?php echo get_theme_file_uri('/screenshot.png'); ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo home_url(); ?>">
    <meta property="twitter:title" content="Elder Attorney Long Island - Lisa Singer, PLLC">
    <meta property="twitter:description" content="Protecting Long Island families since 1994. Expert elder law services including Medicaid planning, estate planning, and asset protection.">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo home_url(); ?>">
    
    <!-- Structured Data - LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LegalService",
      "name": "Elder Attorney Long Island - Lisa Singer, PLLC",
      "description": "Elder Law Attorney serving Long Island, NY. Expert legal services in Medicaid planning, estate planning, long-term care, and asset protection.",
      "url": "<?php echo home_url(); ?>",
      "telephone": "<?php echo esc_js(SITE_PHONE_LINK); ?>",
      "email": "<?php echo esc_js(SITE_EMAIL); ?>",
      "foundingDate": "1994",
      "priceRange": "$$",
      "address": [
        {
          "@type": "PostalAddress",
          "streetAddress": "445 Broadhollow Road, Suite C1 18",
          "addressLocality": "Melville",
          "addressRegion": "NY",
          "postalCode": "11747",
          "addressCountry": "US"
        },
        {
          "@type": "PostalAddress",
          "streetAddress": "247-67 Jericho Tpke.",
          "addressLocality": "Bellerose",
          "addressRegion": "NY",
          "postalCode": "11426",
          "addressCountry": "US"
        }
      ],
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": 40.7934,
          "longitude": -73.4151
        },
        "geoRadius": "50000"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "50"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Elder Law Services",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Long-Term Care Planning"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Elder Law"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Estate Planning"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Medicaid Planning"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Asset Protection"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Probate & Administration"}}
        ]
      }
    }
    </script>
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>