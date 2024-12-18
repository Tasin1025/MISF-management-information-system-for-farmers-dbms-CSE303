<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Page - MISF</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header class="header">
        <h1>🏠 Seller Registration 🏠</h1>
    </header>

    <nav class="menu-card">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="farmers_guide.html">Farmers' Guide</a></li>
            <li><a href="crop_trends.html">View Crop Trends</a></li>
            <li><a href="feedback.html">Submit Feedback</a></li>
            <li><a href="seller.html">Seller Registration</a></li>
            <li><a href="buyer.html">Buyer Registration</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
        </ul>
    </nav>

    <main>
        <!-- Add Crop Listings -->
        <section class="add-crop-form">
            <h2>Add Crop Listings</h2>
            <form id="add-crop-form">
                <label for="crop-name">Crop Name:</label>
                <input type="text" id="crop-name" placeholder="Enter crop name" required>

                <label for="crop-price">Price (per unit):</label>
                <input type="number" id="crop-price" placeholder="Enter price" required>

                <label for="crop-quantity">Available Quantity:</label>
                <input type="number" id="crop-quantity" placeholder="Enter quantity" required>

                <button type="submit">Add Listing</button>
            </form>
        </section>

        <!-- Manage Crop Listings -->
        <section class="manage-listings">
            <h2>Manage Your Listings</h2>
            <div id="crop-listings">
                <!-- Dynamic crop listings will be added here -->
            </div>
        </section>

        <!-- Buyer Inquiries -->
        <section class="buyer-inquiries">
            <h2>Buyer Inquiries</h2>
            <div id="buyer-messages">
                <p>No inquiries yet.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Market Information System for Farmers</p>
    </footer>
</body>
</html>