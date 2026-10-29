# Personal Portfolio — Muhammad Ulinnuha

A modern, responsive, and minimalist personal portfolio website built using **HTML5 and CSS3**.

This portfolio showcases my professional profile, projects, technical skills, and contact information as a Software Developer, System Builder, and Digital Problem Solver.

## Overview

Personal Portfolio is a lightweight, single-page website designed to present my work, technical capabilities, and interests in software development and digital solutions.

The website features a modern dark-themed interface, blue accent colors, clean typography, and responsive layouts for desktop and mobile devices.

## Features

- **Responsive Design** — Adapts to desktop, tablet, and mobile screen sizes.
- **Modern Dark UI** — Dark navy background with blue accents.
- **Hero Section** — Personal introduction and portfolio navigation.
- **About Me** — Overview of professional interests and development focus.
- **Project Showcase** — Displays selected projects and software solutions.
- **Technical Skills** — Highlights programming languages and technical competencies.
- **Contact Section** — Email-based contact button.
- **Smooth Hover Effects** — Interactive buttons, navigation links, and project cards.
- **Single-Page Navigation** — Quick access to different sections using anchor links.
- **Lightweight Architecture** — No frameworks, build tools, or backend dependencies.

## Technology Stack

| Technology | Purpose |
|---|---|
| HTML5 | Website structure and content |
| CSS3 | Styling, animations, and responsive layouts |
| CSS Flexbox | Navigation and hero section layouts |
| CSS Grid | Responsive project cards |
| Google Fonts | Poppins typography |
| Media Queries | Mobile responsiveness |

**Note:** The current version uses HTML and CSS only. No JavaScript framework or backend is required.

## Project Structure

```text
personal-portfolio/
├── index.html
├── README.md
└── LICENSE
```

The current website uses internal CSS within `index.html`, making it easy to deploy and maintain as a simple static website.

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/YOUR_REPOSITORY.git
```

### 2. Navigate to the Project Directory

```bash
cd YOUR_REPOSITORY
```

### 3. Run the Website

Open `index.html` directly in your web browser.

Alternatively, start a local development server using Python:

```bash
python3 -m http.server 8000
```

Then visit:

```text
http://localhost:8000
```

No additional installation or configuration is required.

## Website Sections

### Home

Introduces Muhammad Ulinnuha as a Software Developer, System Builder, and Digital Problem Solver.

### About

Describes interests in web development, software solutions, school management systems, and digital transformation.

### Projects

Showcases selected project categories:

- **School Administration System** — Student management, payment administration, student transfers, and academic reporting.
- **Software House Projects** — Company profile websites, internal dashboards, and business applications.
- **Fleet Management** — Vehicle monitoring, operational logbooks, and fuel usage management.

### Skills

Highlights technical skills and areas of expertise, including:

`HTML` `CSS` `JavaScript` `PHP` `Laravel` `MySQL` `UI/UX` `System Analysis`

### Contact

Provides an email-based contact option for professional inquiries and collaboration opportunities.

## Customization

You can customize the portfolio by editing `index.html`.

**Update personal information**

Modify the hero section, about section, and contact information.

**Change theme colors**

Update the CSS color values:

```css
/* Background */
#0f172a

/* Card background */
#1e293b

/* Primary accent */
#60a5fa

/* Secondary accent */
#2563eb
```

**Add new projects**

Duplicate an existing `.card` element inside the `.cards` container and modify its content.

**Update contact information**

Replace the placeholder email address:

```html
<a href="mailto:emailanda@gmail.com" class="btn">
    Hubungi Saya
</a>
```

with your actual email address.

## Deployment

This project can be deployed to any hosting service that supports static HTML websites, including:

- GitHub Pages
- Netlify
- Vercel
- Shared hosting with Apache or Nginx

For traditional shared hosting, upload `index.html` to the appropriate document root, such as `public_html`.

## Roadmap

Potential improvements for future releases:

- [ ] Add real project screenshots and live demo links.
- [ ] Add GitHub repository links for individual projects.
- [ ] Implement a responsive mobile navigation menu.
- [ ] Add smooth scrolling and scroll animations.
- [ ] Improve accessibility and keyboard navigation.
- [ ] Add SEO and Open Graph metadata.
- [ ] Add a downloadable CV.
- [ ] Add a light/dark theme toggle.
- [ ] Optimize performance and typography loading.

## Author

**Muhammad Ulinnuha**

*Software Developer | System Builder | Digital Problem Solver*

Focused on developing efficient, maintainable, and user-friendly digital solutions for business, education, and organizational needs.

## License

Copyright © 2026 Muhammad Ulinnuha.

All rights reserved unless otherwise specified in a separate `LICENSE` file.

If this repository is intended for open-source distribution, an appropriate license should be added to clarify usage, modification, and redistribution permissions.

---

Made with dedication by **Muhammad Ulinnuha**.