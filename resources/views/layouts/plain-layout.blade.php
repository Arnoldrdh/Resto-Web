<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Concert+One&display=swap');
    </style>
    <style type="text/tailwindcss">
        @theme {
          --font-sans: "Balsamiq Sans", "Concert One", "Instrument Sans", ui-sans-serif, system-ui, sans-serif,
            "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
            "Noto Color Emoji";
        }
    
        @custom-variant dark (&:is(.dark *));
    
        @theme inline {
          --color-background: var(--background);
          --color-foreground: var(--foreground);
          --color-card: var(--card);
          --color-card-foreground: var(--card-foreground);
          --color-popover: var(--popover);
          --color-popover-foreground: var(--popover-foreground);
          --color-primary: var(--primary);
          --color-primary-foreground: var(--primary-foreground);
          --color-secondary: var(--secondary);
          --color-secondary-foreground: var(--secondary-foreground);
          --color-muted: var(--muted);
          --color-muted-foreground: var(--muted-foreground);
          --color-accent: var(--accent);
          --color-accent-foreground: var(--accent-foreground);
          --color-destructive: var(--destructive);
          --color-destructive-foreground: var(--destructive-foreground);
          --color-border: var(--border);
          --color-input: var(--input);
          --color-app-accent: var(--app-accent);
          --color-ring: var(--ring);
          --color-chart-1: var(--chart-1);
          --color-chart-2: var(--chart-2);
          --color-chart-3: var(--chart-3);
          --color-chart-4: var(--chart-4);
          --color-chart-5: var(--chart-5);
          --radius-sm: calc(var(--radius) - 4px);
          --radius-md: calc(var(--radius) - 2px);
          --radius-lg: var(--radius);
          --radius-xl: calc(var(--radius) + 4px);
          --color-sidebar: var(--sidebar);
          --color-sidebar-foreground: var(--sidebar-foreground);
          --color-sidebar-primary: var(--sidebar-primary);
          --color-sidebar-primary-foreground: var(--sidebar-primary-foreground);
          --color-sidebar-accent: var(--sidebar-accent);
          --color-sidebar-accent-foreground: var(--sidebar-accent-foreground);
          --color-sidebar-border: var(--sidebar-border);
          --color-sidebar-ring: var(--sidebar-ring);
          --animate-accordion-down: accordion-down 0.2s ease-out;
          --animate-accordion-up: accordion-up 0.2s ease-out;
    
          @keyframes accordion-down {
            from {
              height: 0;
            }
    
            to {
              height: var(--reka-accordion-content-height);
            }
          }
    
          @keyframes accordion-up {
            from {
              height: var(--reka-accordion-content-height);
            }
    
            to {
              height: 0;
            }
          }
        }
    
        :root {
          --background: oklch(98.29 0.011 63.36);
          --foreground: oklch(0.145 0 0);
          --card: oklch(1 0 0);
          --card-foreground: oklch(0.145 0 0);
          --popover: oklch(1 0 0);
          --popover-foreground: oklch(0.145 0 0);
          --primary: oklch(0.3747 0.045 225.57);
          --primary-foreground: oklch(0.7889 0.063 180.53);
          --secondary: oklch(0.97 0 0);
          --secondary-foreground: oklch(0.205 0 0);
          --muted: oklch(0.97 0 0);
          --muted-foreground: oklch(0.556 0 0);
          --accent: oklch(0.7776 0.126 57.46);
          --accent-foreground: oklch(0.8821 0.121 95.92);
          --destructive: oklch(0.78 0.127544 22.4989);
          --destructive-foreground: oklch(0.78 0.127544 22.4989);
          /* --border: oklch(0.922 0 0); */
          --border: var(--primary);
          --input: oklch(0.922 0 0);
          --ring: oklch(0.708 0 0);
          --chart-1: oklch(0.646 0.222 41.116);
          --chart-2: oklch(0.6 0.118 184.704);
          --chart-3: oklch(0.398 0.07 227.392);
          --chart-4: oklch(0.828 0.189 84.429);
          --chart-5: oklch(0.769 0.188 70.08);
          --radius: 0.625rem;
          --sidebar: oklch(0.985 0 0);
          --sidebar-foreground: oklch(0.145 0 0);
          --sidebar-primary: oklch(0.205 0 0);
          --sidebar-primary-foreground: oklch(0.985 0 0);
          --sidebar-accent: oklch(0.97 0 0);
          --sidebar-accent-foreground: oklch(0.205 0 0);
          --sidebar-border: oklch(0.922 0 0);
          --sidebar-ring: oklch(0.708 0 0);
          --app-accent: oklch(0.68 0.1628 272.12);
        }
    
        .dark {
          --background: oklch(0.145 0 0);
          --foreground: oklch(0.985 0 0);
          --card: oklch(0.145 0 0);
          --card-foreground: oklch(0.985 0 0);
          --popover: oklch(0.145 0 0);
          --popover-foreground: oklch(0.985 0 0);
          --primary: oklch(0.955 0 0);
          --primary-foreground: oklch(0.205 0 0);
          --secondary: oklch(0.269 0 0);
          --secondary-foreground: oklch(0.985 0 0);
          --muted: oklch(0.269 0 0);
          --muted-foreground: oklch(0.708 0 0);
          --accent: oklch(0.269 0 0);
          --accent-foreground: oklch(0.985 0 0);
          --destructive: oklch(0.396 0.141 25.723);
          --destructive-foreground: oklch(0.637 0.237 25.331);
          --border: oklch(0.269 0 0);
          --input: oklch(0.269 0 0);
          --ring: oklch(0.439 0 0);
          --chart-1: oklch(0.488 0.243 264.376);
          --chart-2: oklch(0.696 0.17 162.48);
          --chart-3: oklch(0.769 0.188 70.08);
          --chart-4: oklch(0.627 0.265 303.9);
          --chart-5: oklch(0.645 0.246 16.439);
          --sidebar: oklch(0.205 0 0);
          --sidebar-foreground: oklch(0.985 0 0);
          --sidebar-primary: oklch(0.488 0.243 264.376);
          --sidebar-primary-foreground: oklch(0.985 0 0);
          --sidebar-accent: oklch(0.269 0 0);
          --sidebar-accent-foreground: oklch(0.985 0 0);
          --sidebar-border: oklch(0.269 0 0);
          --sidebar-ring: oklch(0.439 0 0);
        }
    
        @layer base {
          .font-outline-2 {
            -webkit-text-stroke: 2px var(--primary);
          }
    
          .font-outline-3 {
            -webkit-text-stroke: 3px var(--primary);
          }
    
          .font-outline-4 {
            -webkit-text-stroke: 4px var(--primary);
          }
        }
    
        @layer base {
          * {
            @apply border-border outline-ring/50 text-primary;
          }
    
          body {
            @apply bg-background text-foreground;
          }
    
          h1 {
            @apply text-4xl font-extrabold tracking-tight lg:text-5xl;
          }
    
          h2 {
            @apply text-3xl font-semibold tracking-tight first:mt-0;
          }
    
          h3 {
            @apply text-2xl font-semibold tracking-tight;
          }
    
          h4 {
            @apply text-xl font-semibold tracking-tight;
          }
    
          blockquote {
            @apply border-l-4 pl-4 leading-4 italic;
          }
    
          button {
            @apply rounded-lg px-4 py-2 font-semibold cursor-pointer;
          }
    
          .link {
            @apply cursor-pointer hover:underline;
          }
    
          .table-cell {
            @apply py-1 text-start text-base font-medium;
          }
    
          .table-header {
            @apply text-start text-base;
          }
    
          .is-active {
            @apply bg-muted text-primary border-2;
          }
        }
    
        .container {
          @apply mx-auto w-full max-w-screen-2xl;
        }
      </style>
    </head>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>
