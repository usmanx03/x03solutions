document.addEventListener('DOMContentLoaded', () => {
    const typingElement = document.getElementById('hero-typing-title');
    if (!typingElement) return;

    const phrases = [
        "complexity.",
        "over-engineering.",
        "hiccups.",
        "security issues.",
        "data loss.",
        "compliance concerns.",
        "slowdowns.",
    ];

    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 85;

    const typeLoop = () => {
        const currentPhrase = phrases[phraseIndex];

        if (isDeleting) {
            typingElement.textContent = currentPhrase.substring(0, charIndex - 1);
            charIndex--;
            typeSpeed = 45;
        } else {
            typingElement.textContent = currentPhrase.substring(0, charIndex + 1);
            charIndex++;
            typeSpeed = 85;
        }

        if (!isDeleting && charIndex === currentPhrase.length) {
            isDeleting = true;
            typeSpeed = 2600; // Pause at full phrase — let it land
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
            typeSpeed = 350;
        }

        setTimeout(typeLoop, typeSpeed);
    };

    typeLoop();
});