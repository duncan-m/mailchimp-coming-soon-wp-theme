# mailchimp-coming-soon-wp-theme
Simple coming soon theme that has been adapted to work with Contact form 7 and Mailchimp. Adapted from "Fotos under construction" original author tags left in.

Note: Not 100% finished, mobile & smartphone index templates need to be updated.

Usage: Good for a landing page and single pages. No blog page.

Requires:
- Contact form 7
- Suggested form code: [email* your-email placeholder "Enter email address"][submit "Join"]

Optional:
- Contact form 7 mailchimp addon

Installation:
- Upload theme to /themes/
- Ensure required plugin is installed
- Edit form tag on homepage (Appearance => Editor => index-web.php)
- Find: '<?php echo do_shortcode( '[contact-form-7 id="7" title="CIO sign-up"]' ); ?>'
- Change shortcode in [square brakets] to your preferred form
