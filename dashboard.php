<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboardstyles.css">
    <link rel="stylesheet" href="dasboard3.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="productsdashboard.html">Products</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="dashboardusers.html" class="active">Users</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class="content">
        <h2>Dashboard</h2>
        <!-- Your dashboard content goes here -->
        <div class="dashboard-info">
            <div class="info-card">
                <h3>Total Products Purchased</h3>
                <p id="total-products">0</p>
            </div>
            <div class="info-card">
                <h3>Date and Time</h3>
                <p id="date-time"></p>
            </div>
            <div class="info-card">
                <h3>Total Spent Amount</h3>
                <p id="total-spent">$0.00</p>
            </div>
        </div>


        <div class="tablewrapper">
            <h3 class="maintitle">Overview Data</h3>
            <div class="tablecontainer">
                <table>
                    <thead>
                        
                        <tr>
                            <th>Date</th>
                            <th>buyer name</th>
                            <th>Name of goods</th>
                            <th>Quantity</th>
                            <th>price</th>
                            <th>notes</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                    require("connectionstring.php");
                    $sql = mysqli_query($mysqli,"SELECT *FROM orders");
                    while($row=mysqli_fetch_assoc($sql)){
                        echo "<tr><td>".$row['date']."<td>".$row['buyername']."<td>".$row['goods']."<td>".$row['quantity']."<td>".$row['price']."<td>".$row['notes']."<td><button>edit<button></tr>";


                    }
                    ?>
                    </tbody>
                     
                </table>
            </div></div>
            <?php
            ?>

     



        <h2>Best Dealing Sellers</h2>
        <div id="best-sellers">
            <!-- Seller data will be populated here -->
            <table border="1" id="recent-transactions" width="100%" height="100px">
                <thead>
                 <tr>
                    <th>Rank</th>
                    <th>Seller_name</th>
                    <th>Total Quantity sold</th>
                  </tr>
                 </thead>
                 <tr>
                  <th> </th>
                  <th> </th>
                  <th> </th>
                </tr>
                <tr>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                  </tr>
             </table>
        </div>

          <h2>Recent Transactions</h2>
         
           <table border="1" id="recent-transactions" width="100%" height="100px">
            <thead>
             <tr>
                <th>Date</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
             </thead>
             <tr>
              <td>   </td>
              <td>   </td>
              <td>   </td>
              <td>   </td>
              <td>   </td>
            </tr>
            <tr>
                <td>   </td>
                <td>   </td>
                <td>   </td>
                <td>   </td>
                <td>   </td>
              </tr>
            <tbody>
              <!-- Transaction data will be populated here -->
            </tbody>
         </table>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
