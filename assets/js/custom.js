// Fades out form submit attempt feedback message
const fadeOutMessage = () => {
    const messageBackdrop = document.querySelector('.feedback');
    messageBackdrop.style = 'opacity: 0; pointer-events: none;';
};

// Fade out form submit attempt feedback message after page loads
document.addEventListener('DOMContentLoaded', setTimeout(fadeOutMessage, 3000));