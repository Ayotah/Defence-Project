  const form = document.getElementById('form');

    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
form.addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission for validation
        // Clear previous error messages
    if (passwordInput.value !== confirmPasswordInput.value) {
        alert('Passwords do not match!');
        return; // Stop form submission
    }
    form.submit(); // Submit the form if validation passes
});