# SERRA AQUA RIVAR INDUSTRIES PVT LTD — Full Website Development Specification
## Reference Analysis & Production Build Plan

> **Project:** Serra Aqua Rivar Industries Pvt Ltd  
> **Website type:** Packaged Drinking Water / Mineral Water / Corporate Water Supply  
> **Primary goal:** Build a production-ready, responsive corporate website inspired by the information architecture, page flow, content grouping, and conversion structure of the reference website `silverlinewater.com`, while using an original Serra Aqua Rivar Industries Pvt Ltd brand identity and a **White + Teal Green** visual system.
>
> **Reference site analyzed:** https://silverlinewater.com/
>
> **Required hosting:** Hostinger Shared Hosting  
> **Required stack:** HTML5 + CSS3 + Bootstrap + JavaScript + JavaScript animations + PHP + MySQL  
> **No Node.js / React / Laravel / VPS dependency.**

---

# 1. PROJECT OBJECTIVE

Develop a professional packaged-drinking-water company website for **Serra Aqua Rivar Industries Pvt Ltd**.

The website should communicate:

- Pure and safe drinking water
- Professional manufacturing standards
- Water purification technology
- Product sizes
- Corporate and institutional supply
- Delivery services
- Quality certifications
- Manufacturing/process credibility
- Customer enquiry/contact options
- Multiple office/factory locations
- Strong mobile and desktop usability

The website should feel like a **real established water company**, not like a generic template.

The design should take structural inspiration from the reference website but must use:

- Serra Aqua Rivar Industries Pvt Ltd branding
- Original copy
- White + teal green theme
- Original visual treatment
- Modern spacing and typography
- Improved responsive behavior
- Cleaner UX
- Better accessibility
- Better code organization

Do **not** copy the reference site's logo, proprietary images, exact wording, or copyrighted graphical assets.

---

# 2. REFERENCE WEBSITE ANALYSIS

The reference website organizes its business information around:

1. Home
2. About
3. Purification Process
4. Products
5. Services
6. Contact
7. Corporate drinking-water supply content
8. Reusable product/enquiry sections
9. Certification section
10. FAQ section
11. Multi-location footer

The homepage establishes the company, experience, purity, certifications, products, manufacturing features, FAQs and contact conversion path.

The About page expands:

- Company introduction
- Mission
- Certifications
- Why choose the company
- Manufacturing capabilities
- Quality assurance
- Products
- Contact

The Process page explains the purification stages and then returns the visitor to certifications, products, enquiry and contact sections.

The Products page groups the available bottle/can sizes and also presents business sectors served.

The Services page separates delivery/supply services by customer category.

The Contact page focuses on:

- Enquiry form
- Corporate quotation form
- Office/factory locations
- Maps
- Phone
- Email

This information architecture should be retained for Serra Aqua Rivar Industries Pvt Ltd because it is appropriate for a packaged-water company.

---

# 3. SERRA AQUA RIVAR INDUSTRIES PVT LTD BRAND SYSTEM

## Brand Name

**SERRA AQUA RIVAR INDUSTRIES PVT LTD**

Suggested supporting tagline:

> Pure Water. Trusted Quality.

Alternative taglines that can be selected later:

- Pure by Process. Trusted by People.
- Every Drop, Carefully Purified.
- Pure Water for Every Need.
- Quality Water. Reliable Supply.
- Pure Hydration. Professional Service.

Do not use all taglines simultaneously. Select one final tagline.

---

# 4. COLOR SYSTEM

Primary theme:

### Primary Teal
```text
#008F83
```

### Deep Teal
```text
#006B63
```

### Dark Teal
```text
#004F4A
```

### Light Teal
```text
#DDF6F3
```

### Very Light Aqua
```text
#F1FBFA
```

### White
```text
#FFFFFF
```

### Off White
```text
#F7FAFA
```

### Main Text
```text
#173331
```

### Secondary Text
```text
#647775
```

### Border
```text
#DCE9E7
```

### Success
```text
#198754
```

Do not introduce random colors.

Use teal for:

- Primary buttons
- Active navigation
- Icons
- Section labels
- Highlights
- Certification accents
- Product CTA
- Form CTA
- Hover states

Use white/off-white for:

- Main backgrounds
- Cards
- Navigation
- Product areas
- Content sections

Use dark teal sparingly for strong headings and footer backgrounds.

---

# 5. DESIGN DIRECTION

## Overall Style

Create a:

- Corporate
- Premium
- Clean
- Hygienic
- Modern
- Water-focused
- Trustworthy
- Professional

visual language.

Avoid:

- Excessive gradients
- Excessive glassmorphism
- Neon colors
- Overly rounded cards
- Cartoon illustrations
- Excessive animations
- Heavy shadows
- Crowded layouts

Use subtle:

- 0–12px border radius depending on component
- Soft shadows
- Thin borders
- Large whitespace
- Teal accents
- Water-inspired decorative shapes
- Clean photography

---

# 6. TYPOGRAPHY

Recommended font:

```text
Inter
```

Fallback:

```text
Arial, Helvetica, sans-serif
```

Typography hierarchy:

```text
Hero heading: 48–64px desktop
Section heading: 36–46px
Subheading: 20–26px
Body: 16–18px
Small text: 13–14px
Button: 14–16px
Navigation: 14–16px
```

Responsive:

```text
Desktop: 48–64px hero
Tablet: 40–48px hero
Mobile: 32–38px hero
```

Use `clamp()` where appropriate.

Example:

```css
.hero-title {
    font-size: clamp(2.2rem, 5vw, 4rem);
}
```

---

# 7. TECH STACK

## Frontend

- HTML5
- CSS3
- Bootstrap 5.x
- Bootstrap Icons
- JavaScript ES6+
- Intersection Observer API
- CSS transitions
- CSS keyframe animations

Optional lightweight animation library:

- AOS

If AOS is used, keep it lightweight and initialize it only once.

## Backend

- PHP 8.x supported by Hostinger
- MySQL / MariaDB
- PDO
- PHP sessions where required
- Server-side validation

## Email

Use PHP SMTP/PHPMailer if email delivery is required.

Do not depend on PHP `mail()` alone.

## Hosting

Hostinger Shared Hosting.

The project must work using:

```text
public_html/
```

No:

- Node server
- Express server
- React build requirement
- WebSocket server
- Docker
- VPS
- PM2
- Redis
- MongoDB

---

# 8. HOSTINGER-COMPATIBLE ARCHITECTURE

Recommended production structure:

```text
public_html/
│
├── index.php
├── about.php
├── process.php
├── products.php
├── services.php
├── contact.php
├── corporate-water-supply.php
│
├── .htaccess
├── robots.txt
├── sitemap.xml
│
├── assets/
│   ├── css/
│   │   ├── bootstrap.min.css
│   │   ├── bootstrap-icons.css
│   │   └── style.css
│   │
│   ├── js/
│   │   ├── bootstrap.bundle.min.js
│   │   ├── main.js
│   │   ├── animations.js
│   │   └── form-validation.js
│   │
│   ├── images/
│   │   ├── logo/
│   │   ├── hero/
│   │   ├── products/
│   │   ├── process/
│   │   ├── certifications/
│   │   ├── services/
│   │   ├── locations/
│   │   └── general/
│   │
│   └── fonts/
│
├── includes/
│   ├── config.php
│   ├── db.php
│   ├── header.php
│   ├── navbar.php
│   ├── footer.php
│   ├── product-card.php
│   ├── certification-card.php
│   └── enquiry-form.php
│
├── forms/
│   ├── enquiry-submit.php
│   ├── corporate-enquiry-submit.php
│   └── contact-submit.php
│
└── admin/
    └── [optional future CMS]
```

If a pure static PHP website is preferred, all pages may use `.php` so shared header/footer components can be included.

---

# 9. PAGE STRUCTURE

## Required Pages

### 1. Home
```text
/
```

### 2. About
```text
/about.php
```

### 3. Purification Process
```text
/process.php
```

### 4. Products
```text
/products.php
```

### 5. Services
```text
/services.php
```

### 6. Corporate Water Supply
```text
/corporate-water-supply.php
```

### 7. Contact
```text
/contact.php
```

---

# 10. GLOBAL HEADER

Every page must use the same header.

## Top Contact Bar

Desktop:

```text
Customer Support: +91 XXXXX XXXXX
Email: info@seraaqua.com
```

Mobile:

Show compact contact options.

Recommended:

```text
Call
Email
```

## Main Navigation

Logo:

```text
SERRA AQUA RIVAR INDUSTRIES PVT LTD
Pure Water. Trusted Quality.
```

Navigation:

```text
Home
About
Process
Products
Services
Corporate Supply
Contact
```

Primary CTA:

```text
Enquire Now
```

## Navbar behavior

Desktop:

- Horizontal menu
- Sticky navigation
- White background
- Teal active item
- Subtle shadow after scrolling

Mobile:

- Bootstrap navbar toggler
- Full-width mobile menu
- Large touch targets
- No horizontal overflow

---

# 11. HOME PAGE

The homepage is the primary conversion page.

## Section 1 — Hero

Two-column desktop layout.

Left:

```text
Pure Water.
Trusted Quality.

Professionally purified drinking water
for homes, businesses and institutions.

[Enquire Now]
[Explore Products]
```

Right:

- High-quality water bottle/can image
- Water splash
- Clean white/teal composition

Background:

- White
- Very subtle aqua shapes
- No distracting video required

Add a small trust badge:

```text
Quality-focused
Purification & Delivery
```

---

# 12. HOME — EXPERIENCE STATISTIC

Immediately after hero.

Example:

```text
10+
Purification Stages

100%
Quality Focus

24/7
Supply Support

Multiple
Pack Sizes
```

Use animated counters.

Animation:

- Counter starts when section enters viewport
- 700–1200ms duration
- No infinite animation

---

# 13. HOME — ABOUT INTRODUCTION

Two-column layout.

Left:

- Company/facility image

Right:

```text
About Serra Aqua Rivar Industries Pvt Ltd

Pure drinking water made with
care, technology and quality control.

[Read More]
```

Content should explain:

- Company
- Manufacturing
- Purification
- Quality commitment
- Delivery

Do not overload this section.

---

# 14. HOME — THREE TRUST FEATURES

Create three cards:

### Pure Water

Advanced purification designed to deliver safe and refreshing drinking water.

### Hygienic Containers

Professionally cleaned, sanitized and maintained packaging.

### Reliable Delivery

Scheduled and bulk delivery support for business and institutional customers.

Visual style:

- White card
- Thin border
- Teal icon
- Small hover elevation
- Equal heights

---

# 15. HOME — CERTIFICATIONS

Section title:

```text
Quality You Can Trust
```

Three or more certification cards.

Example:

```text
BIS
Certified Standards

FSSAI
Food Safety Compliance

ISO
Quality Management
```

Important:

Only display certificates that Serra Aqua Rivar Industries Pvt Ltd actually possesses.

Do not invent certification numbers.

If certifications are not yet available, use:

```text
Quality Standards
Food Safety
Quality Management
```

until actual documents are supplied.

---

# 16. HOME — PRODUCTS

Title:

```text
Our Products
```

Product grid:

1. 20 Liter Water Jar
2. 2 Liter Water Bottle
3. 1 Liter Water Bottle
4. 500 ml Water Bottle
5. 300 ml Water Bottle

Each card:

```text
Image
Product name
Short description
Enquire
```

Desktop:

```text
4 columns
```

Tablet:

```text
2–3 columns
```

Mobile:

```text
1 column
```

Use Bootstrap grid.

---

# 17. PRODUCT CARD DESIGN

Structure:

```text
┌──────────────────────┐
│                      │
│      PRODUCT IMG     │
│                      │
├──────────────────────┤
│  20 Liter Water Jar  │
│                      │
│  Short description   │
│                      │
│       Enquire →      │
└──────────────────────┘
```

Hover:

- Image scale: 1.03
- Border becomes teal
- CTA moves slightly
- Shadow increases subtly

Do not make cards jump or resize.

---

# 18. HOME — WHY CHOOSE SERRA AQUA RIVAR INDUSTRIES PVT LTD

Use a numbered feature list similar to the reference information architecture.

Example:

```text
01 — Quality-focused purification
02 — Multi-stage filtration
03 — Hygienic automated filling
04 — Quality-controlled packaging
05 — Container sanitation
06 — Laboratory quality checks
07 — Controlled storage
08 — Reliable delivery
```

Desktop:

Two-column layout.

Mobile:

Single-column stacked list.

---

# 19. HOME — PURIFICATION PREVIEW

Use a visual section:

```text
Advanced Purification

From filtration to final packaging,
every stage is carefully controlled.

[Explore Our Process]
```

Display 4–5 preview steps:

```text
01 Filtration
02 Carbon Treatment
03 Micron Filtration
04 RO
05 UV / Ozone
```

The full 10-stage process belongs on the Process page.

---

# 20. HOME — BUSINESS SECTORS

Create a sector grid.

Recommended:

- Corporate Offices
- IT Parks
- Hotels
- Restaurants & Catering
- Educational Institutions
- Government Offices
- Manufacturing
- Events & Functions

Each item:

- Icon
- Title
- One-line description

---

# 21. HOME — FAQ

Use Bootstrap Accordion.

Questions:

1. What water products does Serra Aqua Rivar Industries Pvt Ltd supply?
2. What purification process is used?
3. Do you provide 20-liter cans?
4. Do you provide corporate supply?
5. Do you provide bulk water delivery?
6. Which locations do you serve?
7. Can businesses request customized supply schedules?
8. How can I request a quotation?

Only publish factual answers confirmed by the business.

---

# 22. HOME — FINAL CTA

Full-width teal section.

Text:

```text
Need Reliable Drinking Water Supply?

Talk to Serra Aqua Rivar Industries Pvt Ltd today.

[Request a Quote]
[Call Now]
```

Use white text.

---

# 23. ABOUT PAGE

Structure:

```text
Page Hero
Company Introduction
Mission / Vision
Quality Commitment
Certifications
Why Choose Serra Aqua Rivar Industries Pvt Ltd
Quality Assurance
Key Features
Products Preview
CTA
```

## About Hero

```text
About Serra Aqua Rivar Industries Pvt Ltd

Pure water backed by
quality-focused processes.
```

---

# 24. ABOUT — COMPANY STORY

Two-column:

Left:

- Factory/manufacturing image

Right:

- Company story
- Purpose
- Customer focus
- Quality philosophy

Avoid fake claims such as:

- "20+ years"
- "1000+ customers"
- "Best in Chennai"

unless the company actually has those figures.

---

# 25. ABOUT — MISSION & VISION

Two cards.

### Mission

Provide safe, hygienic and consistently quality-controlled drinking water through reliable purification and delivery.

### Vision

Build a trusted water brand known for quality, responsible operations and dependable service.

---

# 26. ABOUT — QUALITY ASSURANCE

Use:

```text
Water Quality
Container Hygiene
Process Monitoring
Storage Control
Packaging
Delivery
```

Explain each briefly.

---

# 27. PROCESS PAGE

The reference uses a dedicated purification-process page.

Serra Aqua Rivar Industries Pvt Ltd should retain this structure.

Hero:

```text
Our Water Purification Process

Multiple controlled stages
from source to sealed bottle.
```

---

# 28. TEN-STAGE PURIFICATION TIMELINE

Recommended content structure:

```text
01 Source Water Treatment
02 Sand Filtration
03 Activated Carbon Filtration
04 Micron Filtration
05 Reverse Osmosis
06 UV Sterilization
07 Ozonation
08 Mineral / TDS / pH Balancing
09 Hygienic Storage
10 Automated Bottling & Sealing
```

Do not claim a particular technology is used until verified for Serra Aqua Rivar Industries Pvt Ltd.

The implementation should make stages configurable.

---

# 29. PROCESS UI

Desktop:

Horizontal/alternating timeline.

Mobile:

Vertical timeline.

Each stage:

```text
01
Stage Name
Short explanation
Image/icon
```

Animation:

- Fade-up
- Slide-in
- Progress line
- Triggered on scroll

Respect `prefers-reduced-motion`.

---

# 30. PRODUCTS PAGE

Hero:

```text
Our Products

Packaged drinking water solutions
for different requirements.
```

Product categories:

```text
20L
2L
1L
500ml
300ml
```

Each product should have:

- Product image
- Product name
- Packaging type
- Typical use
- Enquire button

No pricing is required unless the business supplies fixed public prices.

---

# 31. PRODUCT ENQUIRY FLOW

Click:

```text
Enquire
```

opens Bootstrap modal.

Modal fields:

```text
Full Name
Phone
Email
Company Name
Product
Required Quantity
Preferred Delivery Location
Message
```

Submit via PHP AJAX/fetch.

Success:

```text
Thank you. Your enquiry has been received.
Our team will contact you shortly.
```

No page reload required if AJAX is implemented.

---

# 32. SERVICES PAGE

Services should follow the reference's customer-oriented grouping.

Required service categories:

### Doorstep Delivery

Reliable packaged drinking water delivery for residential/business requirements where applicable.

### Bulk Water Supply

For large-volume requirements and events.

### Corporate & IT Parks

Scheduled drinking water supply for offices and IT environments.

### Hotels & Food Businesses

Regular packaged-water supply for hospitality and food-service businesses.

### Educational Institutions

Supply support for schools, colleges and training institutions.

### Government / Institutional Supply

Professional supply for institutional requirements.

### Manufacturing & Industrial

Water supply for workplaces and industrial environments.

### Events & Functions

Bulk packaged drinking water for events and gatherings.

---

# 33. SERVICES PAGE LAYOUT

Use:

```text
Hero
Services Overview
3 Key Benefits
Service Cards
Industries Served
Delivery Process
CTA
Products
Enquiry
```

Service cards should have:

- Teal icon
- Heading
- Description
- Optional "Enquire" button

---

# 34. CORPORATE WATER SUPPLY PAGE

Create a dedicated B2B landing page.

Hero:

```text
Corporate Drinking Water Supply

Reliable packaged drinking water
for offices, institutions and businesses.
```

Sections:

1. Corporate overview
2. Why businesses choose Serra Aqua Rivar Industries Pvt Ltd
3. Products suitable for offices
4. Delivery scheduling
5. Quality assurance
6. Sectors served
7. Corporate enquiry form
8. CTA

Corporate enquiry fields:

```text
Full Name
Business Email
Phone
Company Name
Company Type
Required Product
Estimated Quantity
Delivery Location
Required Frequency
Message
```

---

# 35. CONTACT PAGE

Hero:

```text
Contact Serra Aqua Rivar Industries Pvt Ltd

We are ready to help with
your water supply requirements.
```

Two-column layout.

Left:

```text
Phone
Email
Business Hours
Address
```

Right:

Contact form.

---

# 36. CONTACT FORM

Fields:

```text
Full Name *
Email *
Phone *
Subject *
Message *
```

PHP validation:

- Name required
- Valid email
- Phone validation
- Subject required
- Message required

Use:

```text
POST
CSRF token
server-side validation
prepared SQL statements
rate limiting/basic anti-spam
```

---

# 37. CORPORATE QUOTE FORM

Separate form.

Fields:

```text
Full Name
Email
Phone
Company Name
Product / Can Type
Quantity
Location
Requirement
Message
```

CTA:

```text
Request Corporate Quote
```

---

# 38. CAPTCHA / ANTI-SPAM

Do not rely on an easily bypassed homemade CAPTCHA.

Recommended options:

1. Cloudflare Turnstile
2. Honeypot field
3. Server-side rate limiting
4. Minimum form submission time
5. CSRF token

If external CAPTCHA is not desired, implement:

```text
Honeypot
CSRF
IP/session throttling
Time-based validation
```

---

# 39. PHP FORM PROCESSING

Use PDO.

Example architecture:

```text
form
  ↓
fetch()
  ↓
PHP endpoint
  ↓
validate input
  ↓
CSRF validation
  ↓
sanitize/normalize
  ↓
PDO prepared statement
  ↓
database
  ↓
SMTP email
  ↓
JSON response
```

Return:

```json
{
    "success": true,
    "message": "Enquiry submitted successfully."
}
```

Error:

```json
{
    "success": false,
    "message": "Please check the submitted information."
}
```

Never return SQL errors to users.

---

# 40. DATABASE

MySQL database name:

```text
seraaqua_db
```

Recommended tables:

```text
enquiries
corporate_enquiries
contact_messages
products
services
locations
certifications
faq
```

For a simple brochure website, products/services/FAQ can remain static PHP arrays.

Database should primarily be used for enquiry storage.

---

# 41. ENQUIRIES TABLE

Recommended fields:

```text
id
name
email
phone
company_name
product
quantity
location
subject
message
source
status
created_at
```

Status:

```text
New
Contacted
In Progress
Closed
Spam
```

Use:

```text
INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
VARCHAR
TEXT
ENUM or VARCHAR
DATETIME
```

---

# 42. ADMIN PANEL — OPTIONAL FUTURE PHASE

Do not make an admin panel mandatory for Version 1.

Future admin panel can manage:

- Enquiries
- Corporate enquiries
- Products
- FAQs
- Services
- Certifications
- Locations
- Website settings

Authentication:

- PHP sessions
- Password hashing using `password_hash()`
- Prepared statements
- CSRF protection
- Login rate limiting

---

# 43. FOOTER

Use a large professional footer.

Column 1:

```text
SERRA AQUA RIVAR INDUSTRIES PVT LTD
Pure Water. Trusted Quality.

Short company description.
```

Column 2:

```text
Quick Links

Home
About
Process
Products
Services
Corporate Supply
Contact
```

Column 3:

```text
Products

20L
2L
1L
500ml
300ml
```

Column 4:

```text
Contact

Phone
Email
Address
Business Hours
```

Bottom:

```text
© 2026 Serra Aqua Rivar Industries Pvt Ltd. All Rights Reserved.
Privacy Policy
Terms
```

Use dark teal background.

---

# 44. LOCATION SECTION

If Serra Aqua Rivar Industries Pvt Ltd has multiple branches/factories, display:

```text
Corporate Office
Factory 1
Factory 2
Factory 3
```

Each location:

- Name
- Address
- Phone if applicable
- Google Maps link/embed

Do not copy the reference company's addresses.

Use actual Serra Aqua Rivar Industries Pvt Ltd business locations.

---

# 45. RESPONSIVE DESIGN

Mandatory breakpoints:

```text
320px
375px
425px
576px
768px
992px
1200px
1400px
```

The website must be tested at:

### Mobile

```text
320 × 568
375 × 667
390 × 844
414 × 896
```

### Tablet

```text
768 × 1024
820 × 1180
```

### Laptop

```text
1366 × 768
1440 × 900
```

### Desktop

```text
1920 × 1080
```

No:

- horizontal scrolling
- clipped text
- overlapping cards
- broken navbar
- oversized images
- fixed-width containers
- buttons outside viewport
- inconsistent spacing

---

# 46. BOOTSTRAP GRID

Use Bootstrap containers.

Recommended:

```html
<div class="container">
```

For large layouts:

```html
<div class="container-xl">
```

Avoid unnecessary:

```css
width: 1200px;
```

Use:

```css
width: 100%;
max-width: 100%;
```

---

# 47. ANIMATION SYSTEM

Use subtle animation only.

Recommended:

### On scroll

```text
fade-up
fade-left
fade-right
zoom-in
```

### Counters

Animated statistics.

### Product hover

Small image scale.

### Buttons

Small translate/opacity effect.

### Navbar

Shadow after scroll.

Avoid:

- Infinite bouncing
- Excessive parallax
- Full-page loaders
- Heavy particle effects
- Large continuous animations

---

# 48. REDUCED MOTION

Add:

```css
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        scroll-behavior: auto !important;
        transition-duration: 0.01ms !important;
    }
}
```

---

# 49. IMAGE REQUIREMENTS

Recommended image categories:

```text
hero-water.jpg
factory.jpg
purification.jpg
laboratory.jpg
20l-jar.webp
2l-bottle.webp
1l-bottle.webp
500ml-bottle.webp
300ml-bottle.webp
delivery.jpg
corporate.jpg
hotel.jpg
education.jpg
manufacturing.jpg
```

Use:

```text
WebP
```

where possible.

Provide meaningful `alt` attributes.

Example:

```html
<img
    src="assets/images/products/20l-jar.webp"
    alt="Serra Aqua Rivar Industries Pvt Ltd 20 liter drinking water jar"
    loading="lazy">
```

Hero image should use:

```text
loading="eager"
```

---

# 50. IMAGE OPTIMIZATION

Target:

```text
Hero image < 300 KB where practical
Product image < 150 KB
General image < 250 KB
```

Do not upload huge 3–8 MB images.

Use:

- WebP
- Proper dimensions
- Lazy loading
- Responsive images where useful

---

# 51. SEO STRUCTURE

Each page requires:

```html
<title>
<meta name="description">
<meta name="robots">
<link rel="canonical">
```

Example:

```text
Serra Aqua Rivar Industries Pvt Ltd | Packaged Drinking Water & Corporate Water Supply
```

Use original location/business keywords based on actual service area.

Do not keyword stuff.

---

# 52. STRUCTURED DATA

Implement JSON-LD where information is verified.

Potential schema:

```text
Organization
LocalBusiness
Product
FAQPage
BreadcrumbList
```

Only publish accurate business information.

---

# 53. ACCESSIBILITY

Mandatory:

- Semantic HTML
- Proper heading hierarchy
- Alt text
- Keyboard navigation
- Visible focus states
- Form labels
- ARIA only where necessary
- Sufficient contrast
- Accessible mobile menu
- Accessible accordion
- Accessible modals

Do not use:

```html
<div onclick="">
```

when a real button/link is appropriate.

---

# 54. SECURITY

PHP security requirements:

## SQL Injection

Always use PDO prepared statements.

Never:

```php
$sql = "SELECT * FROM enquiries WHERE email = '$email'";
```

Use prepared queries.

## XSS

Escape output:

```php
htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
```

## CSRF

Every POST form must use a CSRF token.

## Uploads

Version 1 should not require file uploads.

If certificates/images are later uploaded:

- MIME validation
- File extension validation
- Size limit
- Random filename
- No executable file types
- Store outside sensitive executable locations when possible

## Session

Use secure cookie settings.

---

# 55. .HTACCESS

Use `.htaccess` for:

- HTTPS redirect
- Security headers
- Disable directory listing
- Cache rules
- Compression where supported

Example concepts:

```apache
Options -Indexes

RewriteEngine On

RewriteCond %{HTTPS} !=on
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

Do not add rules that break Hostinger's existing configuration.

Test after deployment.

---

# 56. SECURITY HEADERS

Where compatible with the hosting environment:

```text
X-Content-Type-Options
X-Frame-Options
Referrer-Policy
Permissions-Policy
Content-Security-Policy
```

CSP must be implemented carefully because Bootstrap, Google Maps, analytics, fonts and external assets can require specific sources.

Do not blindly apply an overly restrictive CSP that breaks the website.

---

# 57. CONTACT EMAIL

Recommended:

```text
info@seraaqua.com
```

Use the actual domain email once the domain exists.

SMTP configuration should be stored outside publicly accessible page code when possible.

Never hard-code passwords into GitHub.

Example configuration:

```php
return [
    'smtp_host' => 'smtp.hostinger.com',
    'smtp_port' => 465,
    'smtp_secure' => 'ssl',
    'smtp_username' => 'info@seraaqua.com',
    'smtp_password' => 'CHANGE_THIS'
];
```

Use environment/config protection appropriate for shared hosting.

---

# 58. HOSTINGER DEPLOYMENT

Upload to:

```text
public_html/
```

Final public structure:

```text
public_html/
    index.php
    about.php
    process.php
    products.php
    services.php
    corporate-water-supply.php
    contact.php
    assets/
    includes/
    forms/
```

Create MySQL database through Hostinger hPanel.

Update:

```text
DB_HOST
DB_NAME
DB_USER
DB_PASSWORD
```

Test:

```text
https://seraaqua.com/
https://seraaqua.com/about.php
https://seraaqua.com/process.php
https://seraaqua.com/products.php
https://seraaqua.com/services.php
https://seraaqua.com/corporate-water-supply.php
https://seraaqua.com/contact.php
```

---

# 59. DATABASE CONNECTION

Use:

```php
PDO
```

Example:

```php
$pdo = new PDO(
    "mysql:host={$host};dbname={$database};charset=utf8mb4",
    $username,
    $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
);
```

Never display connection credentials.

---

# 60. FORM AJAX

Use JavaScript:

```javascript
fetch('/forms/contact-submit.php', {
    method: 'POST',
    body: formData,
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
});
```

Display Bootstrap alerts:

```text
Success
Warning
Error
```

No browser reload required.

---

# 61. FORM UX

While submitting:

```text
Send Message
```

changes to:

```text
Submitting...
```

Disable the submit button.

After success:

```text
Message sent successfully.
```

Reset form.

On failure:

```text
Unable to submit your request. Please try again.
```

Never expose backend errors.

---

# 62. NAVIGATION UX

Desktop:

```text
Logo | Home | About | Process | Products | Services | Corporate Supply | Contact | Enquire
```

Mobile:

```text
Logo
Menu button

Home
About
Process
Products
Services
Corporate Supply
Contact
Enquire
```

Use Bootstrap's navbar collapse.

---

# 63. STICKY MOBILE CTA

On mobile only, optionally add:

```text
Call
WhatsApp
Enquire
```

as a small bottom action bar.

It must not cover:

- Form submit buttons
- Cookie notices
- Footer content

---

# 64. WHATSAPP

If the business provides a WhatsApp number, use:

```text
https://wa.me/<number>
```

Do not invent the number.

Button:

```text
WhatsApp Us
```

Use official business number only.

---

# 65. FOOTER INFORMATION

The footer should be consistent across every page.

Include:

- Logo
- Description
- Navigation
- Products
- Services
- Contact
- Social links if applicable
- Copyright
- Privacy
- Terms

Do not duplicate excessively long SEO paragraphs in the footer.

---

# 66. CONTENT RULES

All Serra Aqua Rivar Industries Pvt Ltd copy must be original.

Do not copy the reference website word-for-word.

Use the reference only for:

- Page architecture
- Section grouping
- Navigation ideas
- Business information hierarchy
- Conversion placement

Serra Aqua Rivar Industries Pvt Ltd content must be written specifically for Serra Aqua Rivar Industries Pvt Ltd.

---

# 67. IMPORTANT CLAIM VALIDATION

Do not automatically copy claims such as:

```text
20+ years
100+ companies
114-parameter testing
NABL laboratory
10-stage purification
BIS
FSSAI
ISO
24/7 delivery
2.5 lakh litres/day
```

These must be verified for Serra Aqua Rivar Industries Pvt Ltd before publishing.

Use placeholders:

```text
[YEARS OF EXPERIENCE]
[NUMBER OF CLIENTS]
[ACTUAL CERTIFICATION]
[ACTUAL CAPACITY]
[ACTUAL PURIFICATION STAGES]
```

until confirmed.

---

# 68. CONTENT PLACEHOLDERS

Create a centralized content/config file if practical:

```text
includes/site-config.php
```

Example:

```php
$site = [
    'name' => 'Serra Aqua Rivar Industries Pvt Ltd',
    'tagline' => 'Pure Water. Trusted Quality.',
    'phone' => '',
    'email' => '',
    'address' => '',
    'business_hours' => '',
];
```

This prevents repeated editing of contact details.

---

# 69. COMPONENT REUSE

Reusable PHP components:

```text
header.php
navbar.php
footer.php
product-card.php
service-card.php
certification-card.php
faq-item.php
enquiry-form.php
cta.php
```

This ensures that fixing the navbar/footer once updates all pages.

---

# 70. CSS ORGANIZATION

Use one main stylesheet:

```text
assets/css/style.css
```

Recommended sections:

```css
/* Root Variables */
/* Reset */
/* Typography */
/* Global */
/* Header */
/* Navbar */
/* Buttons */
/* Hero */
/* Section */
/* Cards */
/* Products */
/* Services */
/* Process */
/* Certifications */
/* FAQ */
/* Forms */
/* Contact */
/* Footer */
/* Responsive */
/* Accessibility */
```

Use CSS variables:

```css
:root {
    --sera-teal: #008F83;
    --sera-deep-teal: #006B63;
    --sera-dark-teal: #004F4A;
    --sera-light-teal: #DDF6F3;
    --sera-bg: #F7FAFA;
    --sera-text: #173331;
    --sera-muted: #647775;
    --sera-border: #DCE9E7;
    --sera-white: #FFFFFF;
}
```

---

# 71. JAVASCRIPT ORGANIZATION

`main.js`:

- Navbar behavior
- Back to top
- General UI

`animations.js`:

- Intersection Observer
- Scroll reveal
- Counter animations

`form-validation.js`:

- Client validation
- AJAX form submission
- Error states

Keep files small and focused.

---

# 72. ERROR HANDLING

Create friendly error handling.

404 page:

```text
Page Not Found

The page you're looking for could not be found.

[Back to Home]
[Contact Serra Aqua Rivar Industries Pvt Ltd]
```

500 errors should never reveal:

- SQL query
- PHP path
- credentials
- server details

---

# 73. PERFORMANCE

Target:

- Fast initial load
- Minimal JavaScript
- Optimized images
- Bootstrap loaded efficiently
- No unnecessary libraries
- Lazy-load below-fold images
- Avoid large video backgrounds

Target Lighthouse:

```text
Performance: 85+
Accessibility: 90+
Best Practices: 90+
SEO: 90+
```

These are targets, not guarantees.

---

# 74. SEO PAGE TITLES

## Home

```text
Serra Aqua Rivar Industries Pvt Ltd | Pure Packaged Drinking Water
```

## About

```text
About Serra Aqua Rivar Industries Pvt Ltd | Quality Drinking Water
```

## Process

```text
Serra Aqua Rivar Industries Pvt Ltd Water Purification Process
```

## Products

```text
Serra Aqua Rivar Industries Pvt Ltd | Drinking Water Products
```

## Services

```text
Serra Aqua Rivar Industries Pvt Ltd | Water Delivery & Supply Services
```

## Corporate

```text
Serra Aqua Rivar Industries Pvt Ltd | Corporate Drinking Water Supply
```

## Contact

```text
Contact Serra Aqua Rivar Industries Pvt Ltd | Drinking Water Supply
```

Modify location keywords based on the actual service area.

---

# 75. IMAGE ALT TEXT

Bad:

```text
image1.jpg
```

Good:

```text
Serra Aqua Rivar Industries Pvt Ltd 20 liter drinking water jar
```

Good:

```text
Serra Aqua Rivar Industries Pvt Ltd water purification facility
```

Good:

```text
Serra Aqua Rivar Industries Pvt Ltd corporate drinking water delivery
```

Do not keyword stuff alt text.

---

# 76. HOMEPAGE FINAL FLOW

The final Home page should follow this order:

```text
1. Top Contact Bar
2. Main Navbar
3. Hero
4. Trust / Statistics
5. About Introduction
6. Three Quality Features
7. Certifications
8. Products
9. Why Choose Serra Aqua Rivar Industries Pvt Ltd
10. Purification Preview
11. Business Sectors
12. FAQ
13. Final CTA
14. Footer
```

---

# 77. ABOUT PAGE FINAL FLOW

```text
1. Header
2. Breadcrumb / Page Hero
3. Company Introduction
4. Mission
5. Vision
6. Quality Assurance
7. Certifications
8. Why Choose Serra Aqua Rivar Industries Pvt Ltd
9. Manufacturing Features
10. Product Preview
11. CTA
12. Footer
```

---

# 78. PROCESS PAGE FINAL FLOW

```text
1. Header
2. Page Hero
3. Process Introduction
4. Benefits
5. 10-Stage Process
6. Quality Monitoring
7. Certifications
8. Products
9. Enquiry CTA
10. Footer
```

---

# 79. PRODUCTS PAGE FINAL FLOW

```text
1. Header
2. Page Hero
3. Product Grid
4. Product Enquiry Modal
5. Business Sectors
6. FAQ
7. CTA
8. Footer
```

---

# 80. SERVICES PAGE FINAL FLOW

```text
1. Header
2. Page Hero
3. Service Overview
4. Key Benefits
5. Service Cards
6. Industries Served
7. Delivery Process
8. Products
9. Enquiry
10. Footer
```

---

# 81. CORPORATE PAGE FINAL FLOW

```text
1. Header
2. Corporate Hero
3. Corporate Overview
4. Why Serra Aqua Rivar Industries Pvt Ltd
5. Product Options
6. Supply Process
7. Industries
8. Quality Assurance
9. Corporate Quote Form
10. CTA
11. Footer
```

---

# 82. CONTACT PAGE FINAL FLOW

```text
1. Header
2. Contact Hero
3. Contact Details
4. General Enquiry Form
5. Corporate Quote CTA
6. Locations
7. Google Maps
8. Footer
```

---

# 83. DESIGN COMPONENT SPECIFICATION

## Buttons

Primary:

```text
Background: Teal
Text: White
Height: 44–50px
Padding: 14–24px
```

Secondary:

```text
Background: Transparent
Border: Teal
Text: Teal
```

Hover:

```text
Background: Deep Teal
Transform: translateY(-1px)
```

---

# 84. CARD SPECIFICATION

Desktop:

```text
Padding: 24–30px
Border: 1px solid #DCE9E7
Radius: 8–14px
Shadow: subtle
```

Mobile:

```text
Padding: 18–22px
```

Cards must maintain equal heights when displayed in the same row.

---

# 85. SECTION SPACING

Desktop:

```text
80–110px vertical
```

Tablet:

```text
60–80px
```

Mobile:

```text
45–65px
```

Avoid random margins between sections.

Use a consistent spacing system.

---

# 86. HERO SPECIFICATION

Desktop:

```text
min-height: 620px
```

Tablet:

```text
min-height: 520px
```

Mobile:

```text
min-height: auto
padding: 90px 0 60px
```

Never force mobile hero content into a fixed height.

---

# 87. FORM DESIGN

Inputs:

```text
height: 48–54px
border: 1px solid #DCE9E7
border-radius: 6–8px
padding: 12px 14px
```

Focus:

```text
border-color: teal
box-shadow: subtle teal ring
```

Textarea:

```text
min-height: 140px
```

Error:

```text
small red validation message
```

Success:

```text
Bootstrap success alert
```

---

# 88. MAP EMBEDS

Use Google Maps only if the business provides actual addresses.

Do not embed maps for placeholder locations.

Recommended:

```text
One map per location
```

or:

```text
One map with location selector
```

to avoid unnecessary page weight.

---

# 89. SOCIAL MEDIA

Optional:

```text
Facebook
Instagram
LinkedIn
YouTube
WhatsApp
```

Only include accounts that actually exist.

Do not create fake links.

---

# 90. LEGAL PAGES

Recommended:

```text
privacy-policy.php
terms.php
```

Privacy policy should describe:

- Contact information collected
- Enquiry processing
- Email communication
- Cookies if used
- Analytics if used
- Data retention
- Contact details

---

# 91. TESTING CHECKLIST

## Navigation

- [ ] Logo works
- [ ] All menu links work
- [ ] Mobile menu works
- [ ] Active page is visually clear
- [ ] CTA works

## Forms

- [ ] Required validation
- [ ] Email validation
- [ ] Phone validation
- [ ] CSRF works
- [ ] AJAX works
- [ ] Database insert works
- [ ] SMTP works
- [ ] Success message works
- [ ] Error message works
- [ ] Spam protection works

## Responsive

- [ ] 320px
- [ ] 375px
- [ ] 390px
- [ ] 414px
- [ ] 576px
- [ ] 768px
- [ ] 820px
- [ ] 992px
- [ ] 1200px
- [ ] 1366px
- [ ] 1440px
- [ ] 1920px

## Browser

- [ ] Chrome
- [ ] Edge
- [ ] Firefox
- [ ] Safari where possible
- [ ] Android Chrome
- [ ] iPhone Safari

---

# 92. SECURITY TESTING

- [ ] SQL injection
- [ ] XSS
- [ ] CSRF
- [ ] Session security
- [ ] Form spam
- [ ] Rate limiting
- [ ] Direct PHP endpoint access
- [ ] Directory listing disabled
- [ ] Error messages sanitized
- [ ] Configuration files protected
- [ ] HTTPS enabled

---

# 93. PERFORMANCE TESTING

Check:

```text
Lighthouse
PageSpeed Insights
Chrome DevTools Network
Chrome DevTools Performance
```

Check:

- Total page size
- Number of requests
- Image sizes
- JS execution
- CSS size
- Layout shifts
- Mobile performance

---

# 94. FINAL ACCEPTANCE CRITERIA

The Serra Aqua Rivar Industries Pvt Ltd website is complete only when:

### Design

- [ ] White + teal visual system is consistent
- [ ] Professional corporate appearance
- [ ] No accidental colors
- [ ] No broken components
- [ ] No excessive animations

### Content

- [ ] Serra Aqua Rivar Industries Pvt Ltd copy is original
- [ ] All business claims are verified
- [ ] Product information is accurate
- [ ] Certifications are verified

### Functionality

- [ ] All pages work
- [ ] Forms work
- [ ] Database works
- [ ] SMTP works
- [ ] Enquiry flow works
- [ ] Mobile menu works
- [ ] FAQ works
- [ ] Product enquiry works

### Hosting

- [ ] Works on Hostinger shared hosting
- [ ] No Node server required
- [ ] No VPS required
- [ ] MySQL works
- [ ] HTTPS works
- [ ] PHP version compatible
- [ ] `.htaccess` does not break hosting

### Responsive

- [ ] Mobile
- [ ] Tablet
- [ ] Laptop
- [ ] Desktop

all work without:

- horizontal scrolling
- overlap
- truncation
- broken images
- unusable forms
- navbar problems

---

# 95. DEVELOPMENT PHASES

## Phase 1 — Foundation

Create:

```text
Folder structure
Bootstrap
CSS variables
Global styles
Header
Navbar
Footer
```

## Phase 2 — Home

Implement:

```text
Hero
Stats
About
Features
Certifications
Products
Why Choose
Process preview
Sectors
FAQ
CTA
```

## Phase 3 — Internal Pages

Implement:

```text
About
Process
Products
Services
Corporate Supply
Contact
```

## Phase 4 — Backend

Implement:

```text
MySQL
PDO
Enquiry forms
Corporate forms
CSRF
Validation
SMTP
AJAX
```

## Phase 5 — Responsive

Test all breakpoints.

## Phase 6 — Security

Run:

```text
SQL injection tests
XSS tests
CSRF tests
Spam tests
Direct endpoint tests
```

## Phase 7 — SEO

Implement:

```text
Meta tags
Canonical URLs
Sitemap
Robots
JSON-LD
Open Graph
```

## Phase 8 — Performance

Optimize:

```text
Images
CSS
JS
Fonts
Caching
Lazy loading
```

## Phase 9 — Production

Upload to:

```text
Hostinger → public_html
```

Configure:

```text
Database
SMTP
Domain
SSL
DNS
```

## Phase 10 — Final QA

Complete all acceptance checklists.

---

# 96. OPEN GRAPH

Every major page should support:

```text
og:title
og:description
og:image
og:url
og:type
```

Recommended social preview image:

```text
1200 × 630
```

---

# 97. FAVICON

Create:

```text
favicon.ico
favicon-16x16.png
favicon-32x32.png
apple-touch-icon.png
```

Use Serra Aqua Rivar Industries Pvt Ltd logo/mark.

---

# 98. SITEMAP

Include:

```text
/
 /about.php
 /process.php
 /products.php
 /services.php
 /corporate-water-supply.php
 /contact.php
```

Only include pages intended for indexing.

---

# 99. ROBOTS.TXT

Basic:

```text
User-agent: *
Allow: /

Sitemap: https://seraaqua.com/sitemap.xml
```

Replace the domain with the actual production domain.

---

# 100. FINAL UI PRINCIPLE

The finished website should visually communicate:

```text
PURE
TRUSTED
HYGIENIC
PROFESSIONAL
RELIABLE
MODERN
```

The visual hierarchy should always guide the visitor through:

```text
Discover Serra Aqua Rivar Industries Pvt Ltd
        ↓
Understand Quality
        ↓
See Products
        ↓
Understand Process
        ↓
Choose a Service
        ↓
Request Enquiry
        ↓
Contact Serra Aqua Rivar Industries Pvt Ltd
```

---

# 101. IMPLEMENTATION PROMPT FOR AI CODING ASSISTANT

Use the following prompt when asking an AI coding assistant to build the project:

```text
Build a complete production-ready website named Serra Aqua Rivar Industries Pvt Ltd.

Reference:
https://silverlinewater.com/

Use the reference only for understanding information architecture, page grouping, section ordering, business website structure and conversion flow.

Do NOT copy its logo, copyrighted images, exact text, proprietary graphics or branding.

Create an original Serra Aqua Rivar Industries Pvt Ltd brand identity using:
- White
- Teal green
- Deep teal
- Light aqua
- Dark text

Technology requirements:
- HTML5
- CSS3
- Bootstrap 5
- Bootstrap Icons
- JavaScript ES6+
- JavaScript animations
- PHP 8.x
- MySQL/MariaDB
- PDO
- SMTP/PHPMailer if required
- Hostinger shared hosting compatible

Do NOT use:
- React
- Node.js
- Express
- Laravel
- Docker
- VPS
- WebSockets
- MongoDB
- Redis

Create these pages:
1. index.php
2. about.php
3. process.php
4. products.php
5. services.php
6. corporate-water-supply.php
7. contact.php

Create reusable PHP components:
- header.php
- navbar.php
- footer.php
- product-card.php
- service-card.php
- certification-card.php
- faq-item.php
- enquiry-form.php
- cta.php

Create:
assets/css/style.css
assets/js/main.js
assets/js/animations.js
assets/js/form-validation.js

Implement:
- sticky navbar
- responsive Bootstrap navigation
- hero sections
- product cards
- certification cards
- service cards
- process timeline
- FAQ accordion
- contact forms
- corporate quotation form
- product enquiry modal
- AJAX form submission
- PHP server-side validation
- CSRF protection
- PDO prepared statements
- MySQL enquiry storage
- SMTP email notifications
- spam protection
- friendly JSON responses
- success/error Bootstrap alerts

Responsive requirements:
- 320px
- 375px
- 390px
- 414px
- 576px
- 768px
- 820px
- 992px
- 1200px
- 1366px
- 1440px
- 1920px

There must be:
- no horizontal overflow
- no clipped content
- no overlapping sections
- no broken images
- no fixed desktop widths
- no unusable mobile forms
- no broken Bootstrap navbar
- no layout shifts caused by missing image dimensions

Use semantic HTML and accessibility best practices.

Add:
- SEO titles
- meta descriptions
- canonical tags
- Open Graph
- sitemap.xml
- robots.txt
- JSON-LD where accurate
- favicon

Use CSS variables for the Serra Aqua Rivar Industries Pvt Ltd theme.

Do not invent:
- certifications
- years of experience
- client numbers
- production capacity
- laboratory claims
- service locations
- contact details

Use placeholders where actual business information has not been provided.

Optimize images with WebP, lazy loading and appropriate dimensions.

Use subtle animations and respect prefers-reduced-motion.

The website must be deployable directly to Hostinger shared hosting under public_html without requiring Node.js or a VPS.

Before finishing:
1. Check every internal link.
2. Check every form.
3. Check PHP syntax.
4. Check database queries.
5. Check mobile layout.
6. Check tablet layout.
7. Check desktop layout.
8. Check accessibility.
9. Check SEO.
10. Check security.
11. Check Hostinger compatibility.
12. Remove unnecessary libraries and code.
13. Ensure no console errors.
14. Ensure no PHP warnings/notices are exposed to visitors.
15. Ensure production configuration does not expose database credentials.
```

---

# 102. REFERENCE SITE INFORMATION SOURCES

The specification was prepared after reviewing the publicly accessible reference site's:

- Homepage
- About page
- Purification process page
- Products page
- Services page
- Contact page
- Corporate drinking-water page
- Brochure content

Reference pages:

- https://silverlinewater.com/
- https://www.silverlinewater.com/about.php
- https://www.silverlinewater.com/process.php
- https://www.silverlinewater.com/products
- https://www.silverlinewater.com/services
- https://www.silverlinewater.com/contact
- https://silverlinewater.com/corporate-drinking-water-supplier-chennai
- https://silverlinewater.com/brouchure.pdf

The reference currently exposes a reusable structure centered on packaged-water products, certifications, purification, services, corporate supply, FAQs, enquiry forms and multiple locations. citeturn1search4turn1search2turn1search1turn1search3turn1search0turn1search5turn1search7

---

# 103. IMPORTANT NOTE FOR THE DEVELOPER

This document is a **development specification**, not a request to clone another company's branding.

The final Serra Aqua Rivar Industries Pvt Ltd website must be independently branded and written.

Use the reference site's business information architecture as inspiration, while creating a cleaner, more maintainable and more responsive implementation for Serra Aqua Rivar Industries Pvt Ltd.

Final technology target:

```text
HTML5
+
CSS3
+
Bootstrap
+
JavaScript
+
JS Animations
+
PHP
+
MySQL
+
Hostinger Shared Hosting
```

Final deployment target:

```text
https://seraaqua.com/
```

Replace the domain with the actual Serra Aqua Rivar Industries Pvt Ltd production domain during deployment.
