<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collapsible Sidebar Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <span class="menu-icon">&#9776;</span> <!-- Hamburger Icon -->
                <span class="logo-text">Kinnu hos saman</span>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#home"><i class="icon">&#127968;</i><span>Home</span></a></li>
                <li><a href="#products"><i class="icon">&#128722;</i><span>Products</span></a></li>
                <li><a href="#about"><i class="icon">&#8505;</i><span>About</span></a></li>
                <li><a href="#contact"><i class="icon">&#128222;</i><span>Contact</span></a></li>
                <li><a href="#cart"><i class="icon">&#128717;</i><span>Cart</span></a></li>
                <li><a href="logout.php"><i class="icon">&#128682;</i><span>Logout</span></a></li>
                <h4 clasname="write">Abhishek-sardar 2024@purchase all</h4>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div id="home" class="section">
                <h1>Welcome to Home</h1>
                <p>This is the home section.</p>
            </div>

            <div id="products" class="section">
                <h1>Our Products</h1>
                <p>Explore our wide range of products.</p>
            </div>

            <div id="about" class="section">
                <h1>About Us</h1>
                <p>Learn more about our store and values.</p>
            </div>

            <div id="contact" class="section">
                <h1>Contact Us</h1>
                <p>Get in touch with us for any inquiries.</p>
            </div>

            <div id="cart" class="section">
                <h1>Your Cart</h1>
                <p>Items in your cart will appear here.</p>
            </div>
           
        </div>

    </div>

    <script src="script.js">
        // Toggle sidebar visibility when hamburger icon is clicked
        const menuIcon = document.querySelector('.menu-icon');
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.main-content');

        menuIcon.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });

        // CSS changes when collapsed
        const style = document.createElement('style');
        style.innerHTML = `
    .collapsed {
        width: 0 !important;
    }
    .expanded {
        margin-left: 0 !important;
    }
`;
        document.head.appendChild(style);
    </script>
</body>

</html>