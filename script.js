// Smooth Scroll
document.querySelectorAll('.scroll-down').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Modal Functionality
document.querySelectorAll('.modal-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        const modal = document.getElementById(this.dataset.modal);
        modal.style.display = 'block';
    });
});

document.querySelectorAll('.close').forEach(closeBtn => {
    closeBtn.addEventListener('click', function () {
        this.parentElement.parentElement.style.display = 'none';
    });
});

// Form Validation
document.getElementById('contact-form').addEventListener('submit', function (e) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name === "" || email === "" || message === "") {
        e.preventDefault(); // Prevent form submission
        alert("Please fill out all fields!");
    } else {
        alert("Thank you for your message! I will get back to you soon.");
    }
});

