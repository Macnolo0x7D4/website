# Macnolo Tech Website (macnolo.net)

A modern, fast website built with [Astro](https://astro.build) and powered by [pnpm](https://pnpm.io).

## 🚀 Quick Start

### Prerequisites

- Node.js (version 18 or higher)
- pnpm (version 8 or higher)

### Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/macnolo.net.git
cd macnolo.net
```

2. Install dependencies:
```bash
pnpm install
```

3. Start the development server:
```bash
pnpm dev
```

4. Open your browser and visit `http://localhost:4321`

## 🛠️ Development

### Available Scripts

- `pnpm dev` - Start development server with hot reload
- `pnpm build` - Build the project for production
- `pnpm preview` - Preview the production build locally
- `pnpm astro` - Run Astro CLI commands
- `pnpm lint` - Run ESLint to check code quality
- `pnpm format` - Format code with Prettier

### Project Structure

```
/
├── public/              # Static assets (images, fonts, etc.)
├── src/
│   ├── components/      # Reusable Astro components
│   ├── layouts/         # Page layouts
│   ├── pages/           # File-based routing pages
│   ├── styles/          # Global styles and CSS
│   └── utils/           # Utility functions
├── astro.config.mjs     # Astro configuration
├── package.json         # Project dependencies and scripts
├── pnpm-lock.yaml       # Dependency lock file
└── README.md           # This file
```

### Key Features

- **⚡ Fast Performance**: Built with Astro's zero-JS runtime by default
- **📱 Responsive Design**: Mobile-first approach with modern CSS
- **🎨 Modern Styling**: Tailwind CSS or custom CSS modules
- **🔍 SEO Optimized**: Built-in meta tags and structured data
- **🌐 Static Site Generation**: Pre-rendered pages for optimal performance

## 🔧 Configuration

### Astro Configuration

The main configuration is in `astro.config.mjs`. Key settings include:

- **Output**: Static site generation (SSG) by default
- **Integrations**: Tailwind, React/Vue (if used), and other integrations
- **Build**: Optimized for production with asset optimization

## 📦 Dependencies

### Main Dependencies
- **Astro**: Static site generator framework
- **TypeScript**: Type-safe JavaScript development

### Development Dependencies
- **ESLint**: Code linting
- **Prettier**: Code formatting
- **Tailwind CSS**: Utility-first CSS framework (if used)

## 🚀 Deployment

### Build for Production

```bash
pnpm build
```

The built files will be in the `dist/` directory.

**Static Hosting**
Upload the contents of `dist/` to any static hosting provider.

## 🧪 Testing

```bash
# Run tests (if configured)
pnpm test

# Run type checking
pnpm type-check

# Check build
pnpm build && pnpm preview
```

## 📊 Performance

- **Lighthouse Score**: Aim for 95+ in all categories
- **Core Web Vitals**: Optimized for excellent user experience
- **Bundle Size**: Minimal JavaScript shipped to client

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

### Code Style

- Use TypeScript for type safety
- Follow ESLint and Prettier configurations
- Write semantic HTML with accessibility in mind
- Use CSS custom properties for theming

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Built with ❤️ using [Astro](https://astro.build) and [pnpm](https://pnpm.io)
