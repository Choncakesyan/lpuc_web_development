<!DOCTYPE html>
<html>
<head>
    <title>Login Application</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="container">
        <img src="images/celebi.jpg" alt="Logo" class="logo-img">
        <h1>Login Application</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="action-links">
                <a href="#">Create New Account</a> |
                <a href="#">Forgot Password</a>
            </div>

            <button type="submit" class="login-button">LOG IN</button>
        </form>

        <!-- Add a new div for the message after login -->
        <div id="login-message"></div>
    </div>

<!-- Add a script to handle the message after login -->
<script>
    // Get a reference to the form
    const form = document.querySelector('form');

    // Add an event listener for the form submission
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Simulate a successful login (you should replace this with actual login logic)
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Check the username and password (replace this with actual validation)
        if (username === 'user' && password === 'user') {
            // Redirect to the desired URL after a successful login
            window.location.href = 'http://localhost/lpuc_web_development/admin.php#'; // Replace with your desired URL
        } else {
            // Display an error message (replace this with your error handling)
            alert('Login failed. Please check your username and password.');
        }
    });
</script>
</body>
</html>
