<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X03 Solutions - Solutions that Just Work</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/stylesheets/style.css') }}">

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
</head>
<body class="font-body text-foreground leading-relaxed overflow-x-hidden">
<!-- Modern floating header with glass effect -->
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

<!-- Hero section with modern animations and better typography -->
<section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-cyan-50 via-teal-100 to-white relative overflow-hidden pt-20">

    <!-- Floating background elements -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/20 rounded-full blur-3xl animate-float" style="animation-delay: -1s;"></div>


    <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
        <div class="animate-fade-in-up">
            <div class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm font-medium mb-8">
                <div class="w-2 h-2 bg-accent rounded-full animate-pulse"></div>
                Ready to Scale Your Business
            </div>
            <!-- Updated hero headline and description -->
            <h1 class="text-6xl lg:text-7xl font-heading font-bold text-foreground mb-8 text-balance leading-tight">
                Empowering Businesses Through <span class="gradient-text">Custom Solutions</span>
            </h1>
            <p class="text-xl lg:text-2xl text-muted-foreground mb-12 text-pretty max-w-3xl mx-auto">
                We don't just automate tasks — we solve real business challenges by building systems that understand your needs and grow with you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#contact"
                   class="bg-primary text-primary-foreground px-8 py-4 text-lg font-semibold rounded-lg hover:bg-primary/90 transition-all duration-300 hover:scale-105 animate-pulse-glow">
                    Start Your Transformation →
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
                <!-- Updated social proof number -->
                <span>1400+ businesses trust us</span>
            </div>
        </div>
    </div>
</section>

<!-- Added new "Our Approach" section -->
<section class="py-24 bg-background">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-heading font-bold text-foreground mb-6 text-balance">
                Our <span class="gradient-text">Approach</span>
            </h2>
            <p class="text-xl text-muted-foreground text-pretty max-w-2xl mx-auto">
                A proven process that transforms complex business challenges into scalable solutions.
            </p>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Fixed Our Approach cards to match Our Solutions hover style with proper padding and rounded borders -->
            <div class="bg-card p-8 rounded-2xl border border-border text-center hover-lift group">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-primary to-accent rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">Understand the Problem</h3>
                <p class="text-muted-foreground leading-relaxed">We start by deeply understanding your business, your processes, and the challenges you
                    face.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border text-center hover-lift group">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">Design the Solution</h3>
                <p class="text-muted-foreground leading-relaxed">We craft scalable, robust systems tailored to your operations, making complex problems simple
                    and manageable.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border text-center hover-lift group">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-primary to-accent rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">Build and Implement</h3>
                <p class="text-muted-foreground leading-relaxed">From concept to deployment, we build solutions that integrate seamlessly, improving efficiency
                    and performance.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border text-center hover-lift group">
                <div
                    class="w-20 h-20 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">Grow With Confidence</h3>
                <p class="text-muted-foreground leading-relaxed">Our solutions are designed to scale with your business, whether you're a growing startup or an
                    established enterprise.</p>
            </div>
        </div>
    </div>
</section>

<!-- Updated solutions section with new content -->
<section id="solutions" class="py-24 bg-muted/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm font-medium mb-6">
                <div class="w-2 h-2 bg-accent rounded-full animate-pulse"></div>
                1400+ businesses trust X03 Solutions
            </div>
            <h2 class="text-4xl lg:text-5xl font-heading font-bold text-foreground mb-6 text-balance">
                Our <span class="gradient-text">Solutions</span>
            </h2>
            <p class="text-xl text-muted-foreground text-pretty max-w-2xl mx-auto">
                We don't just make tools — we deliver solutions that tackle your real business problems from start to finish.
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-card p-8 rounded-2xl border border-border hover-lift group">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-primary to-accent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">End-to-End Problem Solving</h3>
                <p class="text-muted-foreground leading-relaxed">We don't just make tools — we deliver solutions that tackle your real business problems from
                    start to finish.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border hover-lift group">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-accent to-primary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">Automation That Matters</h3>
                <p class="text-muted-foreground leading-relaxed">Streamline repetitive processes and free your team to focus on what drives growth.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border hover-lift group">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-primary to-accent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">Scalable Systems</h3>
                <p class="text-muted-foreground leading-relaxed">Solutions that adapt as your business evolves, without the growing pains.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-border hover-lift group">
                <div
                    class="w-16 h-16 bg-gradient-to-r from-accent to-primary rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-foreground mb-4">Focus on What Matters</h3>
                <p class="text-muted-foreground leading-relaxed">We handle the complex work behind the scenes so your team can focus on innovation, growth, and
                    customer success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Updated CTA section with new messaging -->
<section id="about" class="py-24 bg-gradient-to-r from-primary to-accent text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl lg:text-6xl font-heading font-bold mb-8 text-balance">
            Ready to Build Your Future?
        </h2>
        <p class="text-xl lg:text-2xl mb-12 text-pretty opacity-90">
            Join the 1400+ businesses that trust X03 Solutions to solve their toughest challenges and scale confidently.
        </p>
        <a href="#contact"
           class="inline-block bg-white text-primary px-8 py-4 text-lg font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 hover:scale-105">
            Let's Build Together →
        </a>
    </div>
</section>

<!-- Simple, clean contact section -->
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

<!-- Updated footer with new tagline -->
<footer class="bg-muted/30 border-t border-border py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center text-sm text-muted-foreground">
            <div class="mb-4 md:mb-0 font-heading font-bold gradient-text text-lg">
                X03 Solutions
            </div>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-primary transition-colors duration-300">Privacy</a>
                <a href="#" class="hover:text-primary transition-colors duration-300">Terms</a>
                <a href="mailto:info@x03solutions.com" class="hover:text-primary transition-colors duration-300">Contact: info@x03solutions.com</a>
            </div>
        </div>
        <div class="text-center mt-8 text-muted-foreground text-sm">
            © 2025 X03 Solutions. Solutions That Just Work.
        </div>
    </div>
</footer>

<!-- Added smooth scroll behavior and intersection observer for animations -->
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
