<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Unauthorized access
    include("./includes/header.php");
    echo '<div class="container">';
    echo '<div class="sec_adv2">';
    echo '<h2 style="margin: 10px 0; color: navy; text-align: center;">IAU Supplies System: Stock Page</h2>';
    echo '<p style="color: red; font-weight: bold;">Unauthorized User: Please Login to View Stock</p>';
    echo '<p><a href="index.php">Login Page</a></p>';
    echo '</div>';
    echo '</div>';
    include("./includes/footer.html");
    exit();
}

include("./includes/header.php");
?>
<div class="container">
    <div class="sec_adv2">
        <h2 style="margin: 10px 0; color: navy; text-align: center;">IAU Supplies System: Stock Page</h2>
        <?php
        // DB connection
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "Supplies_db";
    
        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch data from db
        $query = "SELECT * FROM Warehouse_Item";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<table style="width: 80%; margin-left: 10%;">
                        <caption>Supplies Stock</caption>
                        <tr>
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                        </tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                            <td>" . $row['ID'] . "</td>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['Category'] . "</td>
                            <td>" . $row['Quantity'] . "</td>
                          </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No items found in stock.</p>";
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </div>
</div>

<?php
include("./includes/footer.html");
?>