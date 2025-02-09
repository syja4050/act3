<html lang="en">
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="/submit" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5"></textarea><br><br>

        <button type="submit">Submit</button>
        <a href="product.php">Products</a>
        <a href="profile.php">Profile</a>
    </form>
</body>
</html>
