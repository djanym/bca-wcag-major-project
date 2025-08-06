// Add scrolled class to header when scrolling.
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Smooth scroll for anchor links.
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function(e) {
//         e.preventDefault();
//
//         const targetId = this.getAttribute('href');
//         const targetElement = document.querySelector(targetId);
//
//         if (targetElement) {
//             window.scrollTo({
//                 top: targetElement.offsetTop - 80,
//                 behavior: 'smooth'
//             });
//         }
//     });
// });

// On document fully loaded.
document.addEventListener('DOMContentLoaded', function () {
    // On link click actions.
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function (event) {
            // 'Scroll to' fix.
            // Make sure this.hash has a value before overriding default behavior.
            if (this.hash !== '') {
                // Store hash
                const hash = this.hash;

                // If the target element doesn't exist, do nothing.
                if (!document.querySelector(hash)) {
                    return;
                }

                // Prevent default anchor click behavior
                event.preventDefault();

                scrollToObj(hash, '#sticky_bar');
            }
            // End scroll to fix
        });
    });
})

function scrollToObj(selector, correction) {
    const targetElement = document.querySelector(selector);
    let correction_value = 0;

    if (parseInt(correction) > 0) {
        correction_value = correction;
    } else {
        const correctionElement = document.querySelector(correction);
        if (correctionElement) {
            correction_value = correctionElement.offsetHeight;
        }
    }

    const y = targetElement.offsetTop - correction_value;

    window.scrollTo({
        top: y,
        behavior: 'smooth',
        duration: 100
    });
}
