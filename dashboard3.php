<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dasboard3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Document</title>
</head>
<body>
  <div class="sliderbar">
    <div class="log"></div>
    <ul class="main">
        <li>
            <a href="index.php">
            <i class="fas fa-home"></i>
            <span>Home</span>
            </a>
        </li>
        <li class="active">
            <a href="dashboard30.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <li>
            <a href="profile.html">
            <i class="fas fa-user"></i>
            <span>Profile</span>
            </a>
        </li>
        <!-- <li>
            <a href="">
            <i class="fas fa-chart-bar"></i>
            <span>Statistic</span></a>
        </li> -->
        <li>
            <a href="update.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Update</span></a>
        </li>
        <li>
            <a href="order.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Order</span>
        </a>
        </li>
        <li>
            <a href="setting.html">
            <i class="fas fa-cog"></i>
            <span>Settings</span></a>
        </li>
        <li class="logout">
            <a href="" onclick="logout()" id="logoutLink">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        </li>
    </ul>
  </div> 
  <div class="maincontent">
    <div class="headerwrapper">
        <div class="headertitle">
            <span>
              Osuald
            </span>
            <h2>dashboard</h2>
        </div>
        <div class="userinformation">
            <div class="searchbox">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
            <img src="profile.jpg" alt="">
    </div>

    </div>
    <div class="cardcontainer">
        <h1 class="maintitle">To Day's Data</h1>
    <div class="cardwrapper">
        <div class="paymentcard
        lightred">
            <div class="cardheader">
                <div class="amount">
                    <span class="title"><strong>Product Name:</strong></span>
                    <span class="amountvalue">Phone</span>
                    
                    <span class="title"><strong>Quantity:</strong></span>
                    <span class="amountvalue">10 <strong>Pieces</strong></span>
                    <span class="title"><strong>Price per item:</strong></span>
                    <span class="amountvalue">80000 <strong>Rwf</strong></span>


                    <span class="title"><strong>Payment Amount:</strong> </span>
                    <span class="amountvalue">800,000 <strong>Rwf</strong></span>
                </div>
               <div class="icon"><i class="fa-solid fa-money-bill-transfer"></i></div> 

            </div>
            <span class="carddetail">*********12</span>
        </div>
        <div class="paymentcard
        lightpurple">
            <div class="cardheader">
                <div class="amount">
                    <span class="title"><strong>Product Name:</strong></span>
                    <span class="amountvalue">Shoes</span>
                    <span class="title"><strong>Quantity:</strong></span>
                    <span class="amountvalue">5<strong>Pairs</strong></span>
                    <span class="title"><strong>Price per item:</strong></span>
                    <span class="amountvalue">8000<strong>Rwf</strong></span>


                    <span class="title"><strong>Payment Order:</strong> </span>
                    <span class="amountvalue">40,000 <strong>Rwf</strong></span>
                </div>
                <i class="fas fa-list icon
                darkpurple"></i>

            </div>
            <span class="carddetail">*********444</span>
        </div>
    </div>
    </div>
    <div class="tablewrapper">
        <h3 class="maintitle">Overview Data</h3>
        <div class="tablecontainer">
            <table>
                <thead>
                    
                    <tr>
                        <th>Date</th>
                        <th>Operation Type</th>
                        <th>Price per item</th>
                        <th>Quantity</th>
                        <th>Total Amount</th>
                        <th>Product Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023-05-02</td>
                        <td>Buy</td>
                        <td>40000</td>
                        <td>1</td>
                        <td>100,000Rwf</td>
                        <td>Phone</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>2023-05-02</td>
                        <td>Sell</td>
                        <td>200Rwf</td>
                        <td>12 Pairs</td>
                        <td>200,000Rwf</td>
                        <td>Shoes</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>2023-05-02</td>
                        <td>Buy</td>
                        <td>300Rwf</td>
                        <td>8</td>
                        <td>300,000Rwf</td>
                        <td>Phone</td>
                        <td><button>Edit</button></td>
                    </tr>
                </tbody>
                 
            </table>
        </div>
    </div>
  </div> 
  <script src="form.js">
    
  </script>
</body>
</html>