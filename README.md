# Manuel Díaz - Personal Portfolio Website

A modern, minimalist personal portfolio website showcasing my professional experience, skills, and projects. Built with Astro for optimal performance and developer experience, featuring a clean design with a Catppuccin-inspired dark theme and subtle animations.

## 🎯 Project Overview

This is a single-page portfolio website designed to present my professional profile as a Full Stack Engineer. The site emphasizes performance, accessibility, and modern web standards while maintaining a personal touch through custom animations and thoughtful content organization. The design philosophy centers around simplicity and readability, using a monospace font (JetBrains Mono) throughout for a technical aesthetic that reflects my background in software development.

## 🏗️ Architecture & Design Decisions

### Framework Choice: Astro

I chose Astro as the primary framework for several key reasons:

**Performance-First Approach**: Astro's zero-JavaScript runtime by default ensures optimal loading speeds and Core Web Vitals scores. Since this is a static portfolio site, the content doesn't require client-side interactivity, making Astro's static-first approach ideal.

**Component Architecture**: Astro's `.astro` component format provides a clean separation of concerns with frontmatter for logic and HTML templates for markup, making the codebase maintainable and easy to understand.

**Build Optimization**: Astro automatically optimizes assets, generates efficient bundles, and provides excellent SEO capabilities out of the box.

**Deployment Flexibility**: The generated static site can be deployed to any hosting platform, from traditional web servers to modern CDNs.

### Styling Strategy: Tailwind CSS

I implemented Tailwind CSS v4 with a custom theme configuration for several reasons:

**Consistency**: The utility-first approach ensures consistent spacing, typography, and color usage throughout the site.

**Performance**: Tailwind's purge functionality removes unused CSS, resulting in minimal bundle sizes.

**Custom Theme**: I created a custom color palette inspired by the Catppuccin theme, providing a cohesive dark mode experience that's easy on the eyes while maintaining good contrast ratios for accessibility.

**Responsive Design**: Tailwind's responsive utilities make it straightforward to create a mobile-first design that works across all device sizes.

### Component Structure

The component architecture follows a modular approach with clear responsibilities:

## 📁 File Structure & Component Documentation

### Core Application Files

**`src/pages/index.astro`** - The main entry point and single page of the application. This file orchestrates the entire layout by importing and rendering all major sections in order: Navbar, Hero, WhoAmI, Skills, WorkExperience, and Footer. It also handles the HTML document structure, meta tags, font loading (JetBrains Mono from Google Fonts), and the overall page styling.

**`src/styles/global.css`** - Contains the global styling configuration and Tailwind CSS setup. Defines the custom Catppuccin color palette as CSS custom properties, sets up the default monospace font family, and establishes consistent typography styles for headings, paragraphs, and list elements across the site.

**`astro.config.mjs`** - The Astro configuration file that sets up the build environment. Configures Tailwind CSS integration via Vite plugins, sets up Node.js adapter for standalone deployment, and includes server configuration for development (allowing VM access via 'vm.local').

### Layout Components

**`src/components/Section.astro`** - A reusable wrapper component that provides consistent styling and structure for major content sections. Creates a standardized section layout with proper spacing, typography, and optional anchor links for navigation. Used by WhoAmI, Skills, and WorkExperience components to maintain visual consistency.

**`src/components/Navbar.astro`** - The site navigation component featuring a clean, minimal design. Includes the site logo/name and navigation links to different sections of the page. Implements smooth scrolling behavior and responsive design that works across all device sizes.

**`src/components/Footer.astro`** - The site footer containing contact information, social media links, and any additional site information. Provides a consistent bottom boundary for the page content.

### Content Components

**`src/components/Hero.astro`** - The main hero section featuring a custom typing animation effect. Contains my name with a typewriter animation that creates a dynamic first impression, along with my title (Full Stack Engineer) and a brief professional description. The component includes custom CSS animations using keyframes for the typing effect and a blinking cursor. The layout is responsive with a two-column design on larger screens, incorporating the ProfileImage component.

**`src/components/ProfileImage.astro`** - Handles the display of my professional profile image with proper optimization and responsive behavior. Ensures the image loads efficiently and scales appropriately across different screen sizes.

**`src/components/WhoAmI.astro`** - A comprehensive personal and professional introduction section. Contains detailed information about my background, journey into programming, technology interests, and current focus areas. The content is structured in multiple paragraphs that tell my professional story, from childhood curiosity about technology to current expertise in full-stack development and teaching.

**`src/components/WorkExperience.astro`** - Displays my professional work history in reverse chronological order. Contains an array of job objects with title, timeline, and detailed summaries. Each job entry provides insight into responsibilities, technologies used, and achievements. Uses the Job component to render individual work experiences consistently.

**`src/components/Skills.astro`** - Showcases my technical skills and expertise in three main categories: Programming Languages & Technologies (with visual tech badges), Languages (Spanish/English proficiency), and a detailed Summary section. The tech badges use the TechBadge component to display technology logos in a grid layout. The summary provides in-depth information about my experience with various technologies, including years of experience and specific use cases.

### Utility Components

**`src/components/Job.astro`** - A specialized component for rendering individual work experience entries. Takes props for job title, timeline, and summary, then displays them in a consistent format with proper typography and spacing.

**`src/components/TechBadge.astro`** - Renders individual technology badges with logos and names. Handles the display of technology images from the public/images/tech/ directory, includes support for image inversion (useful for logos that need to be visible on dark backgrounds), and provides consistent styling for the technology grid.

**`src/components/Link.astro`** - A utility component for creating consistent styled links throughout the site, ensuring proper hover states and accessibility features.

### Infrastructure & Deployment

**`Dockerfile`** - Multi-stage Docker configuration for containerized deployment. The build process uses Node.js LTS Alpine for a lightweight base image, utilizes pnpm for efficient package management, implements build caching to improve build times, and creates an optimized production image with only necessary dependencies. The final runtime image exposes the application on port 4321 and runs the built Astro application.

**`package.json`** - Project configuration and dependency management. Defines the project as an ES module, includes scripts for development, building, and preview modes, and manages dependencies including Astro, Tailwind CSS, and Node.js adapter for deployment flexibility.

**`tsconfig.json`** - TypeScript configuration ensuring type safety throughout the development process while maintaining compatibility with Astro's build system.

## 🎨 Design Philosophy & Theming

The visual design is built around the Catppuccin color palette, specifically the Mocha variant, which provides excellent readability and a professional dark theme. The color choices were made to reduce eye strain during extended viewing while maintaining sufficient contrast for accessibility compliance.

The typography system uses JetBrains Mono throughout, creating a cohesive technical aesthetic that reflects my programming background. This monospace font choice also ensures consistent character spacing, which is particularly important for the typing animation in the hero section.

The layout follows a mobile-first responsive design approach, ensuring the site works seamlessly across all device types, from mobile phones to ultra-wide desktop monitors.

## ⚡ Performance Optimizations

The site implements several performance optimization strategies:

**Static Site Generation**: All content is pre-rendered at build time, eliminating server response time and reducing Time to First Byte (TTFB).

**Image Optimization**: Astro automatically optimizes images, generating appropriate formats and sizes for different devices.

**Minimal JavaScript**: The site uses minimal JavaScript, with custom CSS animations handling visual effects rather than JavaScript libraries.

**Font Loading Strategy**: Google Fonts are loaded with preconnect hints and optimal display settings to prevent layout shift.

**CSS Purging**: Tailwind CSS removes unused styles, resulting in minimal CSS bundle sizes.

## 🚀 Deployment & Hosting Strategy

The application is containerized using Docker with a multi-stage build process. This approach ensures:

**Consistency**: The same environment across development, testing, and production.

**Efficiency**: Multi-stage builds minimize the final image size by excluding development dependencies.

**Scalability**: Container orchestration platforms can easily scale the application.

**Portability**: The containerized application can run on any Docker-compatible hosting platform.

The Node.js standalone adapter allows the site to be deployed as either a static site or a dynamic server-rendered application, providing deployment flexibility based on hosting requirements.

## 🔧 Development Workflow

The development setup emphasizes developer experience and productivity:

**Hot Module Replacement**: The development server provides instant feedback when making changes.

**TypeScript Integration**: Full type checking ensures code reliability and better developer experience.

**Tailwind CSS**: The utility-first approach accelerates styling development.

**Component Architecture**: Modular components promote code reusability and maintainability.

This portfolio represents a balance between technical demonstration and practical functionality, showcasing modern web development practices while serving as an effective professional presentation tool. The clean architecture and thoughtful design decisions create a maintainable codebase that can easily evolve with changing requirements or content updates.

## 🚀 Getting Started

### Prerequisites
- Node.js 18+ 
- pnpm (recommended) or npm

### Installation & Development

```bash
# Clone the repository
git clone <repository-url>
cd website

# Install dependencies
pnpm install

# Start development server
pnpm dev

# Build for production
pnpm build

# Preview production build
pnpm preview
```

The development server runs on `http://localhost:4321` with hot reload enabled.

### Docker Deployment

```bash
# Build Docker image
docker build -t portfolio-website .

# Run container
docker run -p 4321:4321 portfolio-website
```

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.