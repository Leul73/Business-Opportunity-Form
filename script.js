document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    const formData = new FormData(event.target);
    
    fetch('server.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        console.log('Success:', result);
        document.getElementById('successMessage').classList.remove('hidden');
        event.target.reset();
    })
    .catch(error => {
        console.error('Error:', error);
    });
});