// JavaScript code to handle highlighting with transition effect
const volunteers = document.querySelectorAll('.volunteer');
volunteers.forEach(volunteer => {
    volunteer.addEventListener('mouseenter', () => {
        volunteer.classList.add('purple-bg');
    });

    volunteer.addEventListener('mouseleave', () => {
        volunteer.classList.remove('purple-bg');
    });
});