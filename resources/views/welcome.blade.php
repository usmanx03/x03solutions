<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X03 Solutions - Solutions that Just Work</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'heading': ['Space Grotesk', 'sans-serif'],
                        'body': ['DM Sans', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0891b2',
                        secondary: '#10b981',
                        accent: '#10b981',
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom animations and styles for modern interactions */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(8, 145, 178, 0.3);
            }
            50% {
                box-shadow: 0 0 30px rgba(8, 145, 178, 0.5);
            }
        }

        .gradient-text {
            background: linear-gradient(135deg, #0891b2, #10b981);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }

        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/stylesheets/style.css') }}">
</head>
<body class="font-body text-foreground leading-relaxed overflow-x-hidden">
<header class="fixed top-0 w-full z-50 glass-effect border-b border-border/50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="text-2xl font-heading font-bold gradient-text">
                X03 Solutions
            </div>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-muted-foreground hover:text-primary transition-colors duration-300">Home</a>
                <a href="#solutions" class="text-muted-foreground hover:text-primary transition-colors duration-300">Solutions</a>
                <a href="#about" class="text-muted-foreground hover:text-primary transition-colors duration-300">About</a>
                <a href="#contact"
                   class="bg-primary text-primary-foreground px-6 py-2 rounded-lg hover:bg-primary/90 transition-all duration-300 hover:scale-105">
                    Get Started
                </a>
            </nav>
        </div>
    </div>
</header>

<section id="home"
         class="min-h-screen flex items-center justify-center bg-gradient-to-br from-background via-muted/30 to-background relative overflow-hidden pt-20">
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-float" style="animation-delay: -1s;"></div>

    <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
        <div class="animate-fade-in-up">
            <div class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm font-medium mb-8">
                <div class="w-2 h-2 bg-accent rounded-full animate-pulse"></div>
                Ready to Scale Your Business
            </div>
            <h1 class="text-6xl lg:text-7xl font-heading font-bold text-foreground mb-8 text-balance leading-tight">
                We Take Your <span class="gradient-text">Business</span><br>
                to the Next Level
            </h1>
            <p class="text-xl lg:text-2xl text-muted-foreground mb-12 text-pretty max-w-3xl mx-auto">
                We handle your automation with proven strategies, expert design, and a clear focus on results.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#contact"
                   class="bg-primary text-primary-foreground px-8 py-4 text-lg font-semibold rounded-lg hover:bg-primary/90 transition-all duration-300 hover:scale-105 animate-pulse-glow">
                    Get Started Today →
                </a>
                <a href="#solutions" class="text-muted-foreground hover:text-primary transition-colors duration-300 flex items-center gap-2">
                    Our Solutions
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
            <div class="flex items-center justify-center gap-4 mt-12 text-sm text-muted-foreground">
                <div class="flex -space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-primary to-accent rounded-full border-2 border-background"></div>
                    <div class="w-8 h-8 bg-gradient-to-r from-accent to-primary rounded-full border-2 border-background"></div>
                    <div class="w-8 h-8 bg-gradient-to-r from-primary to-accent rounded-full border-2 border-background"></div>
                </div>
                <span>1400+ People trust us</span>
            </div>
        </div>
    </div>
</section>

<section id="solutions" class="py-24 bg-muted/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-heading font-bold text-foreground mb-6 text-balance">
                Solutions that <span class="gradient-text">Actually Work</span>
            </h2>
            <p class="text-xl text-muted-foreground text-pretty max-w-2xl mx-auto">
                While others build dashboards, we build systems that solve real problems completely.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-card p-8 rounded-2xl border border-border hover-lift group">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-primary to-accent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold text-foreground mb-4">Automation that Works</h3>
                <p class="text-muted-foreground leading-relaxed">Streamline repetitive tasks with robust systems that deliver consistent results, every
                    time.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border hover-lift group">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-accent to-primary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold text-foreground mb-4">Scalable Systems</h3>
                <p class="text-muted-foreground leading-relaxed">Solutions that grow with your business, from startup to enterprise scale without breaking.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border hover-lift group">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-primary to-accent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-heading font-bold text-foreground mb-4">Focus on What Matters</h3>
                <p class="text-muted-foreground leading-relaxed">Let us handle the busywork so you can focus on growing your business and serving customers.</p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-24 bg-gradient-to-r from-primary to-accent text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl lg:text-6xl font-heading font-bold mb-8 text-balance">
            Ready to Transform Your Business?
        </h2>
        <p class="text-xl lg:text-2xl mb-12 text-pretty opacity-90">
            Join 1400+ businesses that trust X03 Solutions to handle their automation and scaling challenges.
        </p>
        <a href="#contact"
           class="inline-block bg-white text-primary px-8 py-4 text-lg font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 hover:scale-105">
            Let's Build Together →
        </a>
    </div>
</section>

<section id="contact" class="py-24 bg-background">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl lg:text-5xl font-heading font-bold text-foreground mb-8 text-balance">
            Let's Start Building
        </h2>
        <p class="text-xl text-muted-foreground mb-12 text-pretty">
            Ready to see what X03 Solutions can do for your business? Let's talk.
        </p>
        <a href="mailto:contact@x03solutions.com"
           class="inline-block bg-primary text-primary-foreground px-8 py-4 text-lg font-semibold rounded-lg hover:bg-primary/90 transition-all duration-300 hover:scale-105">
            Contact Us Today
        </a>
    </div>
</section>

<footer class="bg-muted/30 border-t border-border py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center text-sm text-muted-foreground">
            <div class="mb-4 md:mb-0 font-heading font-bold gradient-text text-lg">
                X03 Solutions
            </div>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-primary transition-colors duration-300">Privacy</a>
                <a href="#" class="hover:text-primary transition-colors duration-300">Terms</a>
                <a href="#contact" class="hover:text-primary transition-colors duration-300">Contact</a>
            </div>
        </div>
        <div class="text-center mt-8 text-muted-foreground text-sm">
            © 2025 X03 Solutions. Solutions that Just Work.
        </div>
    </div>
</footer>

<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.hover-lift').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s ease-out';
        observer.observe(el);
    });
</script>
</body>
</html>
