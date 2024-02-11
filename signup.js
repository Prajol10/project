function signup(event) {
    event.preventDefault();

    const form = document.getElementById('signup-form');
    const username = form.elements['username'].value;
    const email = form.elements['email'].value;
    const password = form.elements['password'].value;

    // Perform AJAX request to PHP backend
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'signup.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function () {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            const messageElement = document.getElementById('message');

            if (response.success) {
                messageElement.textContent = 'Sign up successful!';
                messageElement.style.color = '#4CAF50';
            } else {
                messageElement.textContent = response.message;
                messageElement.style.color = 'red';
            }
        }
    };

    const data = `username=${encodeURIComponent(username)}&email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`;
    xhr.send(data);
}
