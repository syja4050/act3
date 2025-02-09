<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Table</title>
</head>
<body>
<a href="Contact.php">Contact</a>
<a href="profile.php">Profile</a>
    <h1>Product Table</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <!-- Generating 150 sample products -->
            <script>
                let tableBody = '';
                for (let i = 1; i <= 150; i++) {
                    let price = (Math.random() * (100 - 5) + 5).toFixed(2); // Random price between $5 and $100
                    let quantity = Math.floor(Math.random() * 500) + 1; // Random quantity between 1 and 500
                    tableBody += `<tr><td>Product ${i}</td><td>$${price}</td><td>${quantity}</td></tr>`;
                }
                document.write(tableBody);
            </script>
        </tbody>
    </table>
</body>
</html>
