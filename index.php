<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
</head>
<body>
    <div class="header">
        <a href="#">file</a>
        <a href="#">Edit</a>
        <a href="#">Navigation</a>
        <a href="#">Others</a>
        <a href="#">Settings</a>
        <a href="#">About</a>
    </div>
    <div class="main-container">
        <div class="side-bar">
            <h5>EXPIRED PRODUCTS: <span>0</span></h5>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Sales</h3>
            </a>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Customer</h3>
            </a>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Invoice</h3>
            </a>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Supplier</h3>
            </a>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Product</h3>
            </a>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Purchase</h3>
            </a>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Account</h3>
            </a>
            <a href="#">
                <img src="../MyOwnerLogo.png">
                <h3>Employee</h3>
            </a>
            <p style="text-align:center;font-weight:bold">Username: Hubert</p>
        </div>
        <div class="home-side">
            <div class="div-1">
                <h3>Invoice No: 01</h3>
                <img src="../shops.png">
                <div class="date">
                    <img src="../calender.png">
                    <h3><?php echo date("Y-M-d"); ?></h3>
                </div>
                <div class="time">
                    <img src="../clock.png">
                    <h3><?php echo date("h:i:s A"); ?></h3>
                </div>
            </div>
            <div class="div-2">
                <img src="../user.png">
                <select name="">
                    <option value="#">Select a Customer</option>
                </select>
                <button name="" class="f-btn">Filter</button>
                <img src="../users.png">
                <label for="">Customer: </label>
                <input type="text" name="" placeholder="Customer name">

                <img src="../phones.png">
                <label for="">Phone: </label>
                <input type="phone" name="" placeholder="07*******">

            </div>
            <div class="div-3">
                <input type="number" name="" placeholder="1101011">
                <label for="">Product: </label>

                <select name="">
                    <option value="#">Select a Product</option>
                </select>

                <label for="">Qty: </label>
                <input type="number" name="" value="1">

                <label for="">Price: </label>
                <input type="number" name="">
            </div>
            <div class="div-4">
                <div class="div-4-1">
                    <div class="div-4-1-1">
                        <table id="example" class="table table-striped">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>QR Code</th>
                                 <th>Product Name</th>
                                 <th>Product Image</th>
                                 <th>Quantity</th>
                                 <th>Price</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>12021</td>
                                 <td>new product</td>
                                 <td><img src="../MyOwnerLogo.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>2</td>
                                 <td>$320</td>
                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>00021</td>
                                 <td>purchased product</td>
                                 <td><img src="../clock.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>10</td>
                                 <td>$120</td>
                             </tr>
                             <tr>
                                 <td>3</td>
                                 <td>320001</td>
                                 <td>t-shirt new</td>
                                 <td><img src="../user.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>7</td>
                                 <td>$720</td>
                             </tr>
                             <tr>
                                 <td>1</td>
                                 <td>12021</td>
                                 <td>new product</td>
                                 <td><img src="../MyOwnerLogo.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>2</td>
                                 <td>$320</td>
                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>00021</td>
                                 <td>purchased product</td>
                                 <td><img src="../clock.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>10</td>
                                 <td>$120</td>
                             </tr>
                             <tr>
                                 <td>3</td>
                                 <td>320001</td>
                                 <td>t-shirt new</td>
                                 <td><img src="../user.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>7</td>
                                 <td>$720</td>
                             </tr>
                             <tr>
                                 <td>1</td>
                                 <td>12021</td>
                                 <td>new product</td>
                                 <td><img src="../MyOwnerLogo.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>2</td>
                                 <td>$320</td>
                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>00021</td>
                                 <td>purchased product</td>
                                 <td><img src="../clock.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>10</td>
                                 <td>$120</td>
                             </tr>
                             <tr>
                                 <td>3</td>
                                 <td>320001</td>
                                 <td>t-shirt new</td>
                                 <td><img src="../user.png" style="width:30px;height:30px;border-radius:10px"></td>
                                 <td>7</td>
                                 <td>$720</td>
                             </tr>
                        </table>
                    </div>
                    <div class="div-4-1-2">
                        <div class="div-4-1-2-1">
                            <label for="">SHIPPING COST: </label>
                            <input type="number" name="shipping" value="0">

                            <label for="">TAX AMOUNT: </label>
                            <input type="number" name="tax" value="0">
                            %

                            <label for="">DISCOUNT RATE</label>
                            <input type="number" name="discount" value="0">
                            %

                            <button type="submit" name="" class="cash-btn"style="margin-left:200px">Cash</button>
                            <button type="submit" name="" class="cash-btn">Check</button>
                            <button type="submit" name="" class="cash-btn">Card Payment</button>

                            <label style="font-size:10px" for="">PAID AMOUNT: </label>
                            <input type="number" name="" value="0" style="width:50px">

                            <label  style="font-size:10px"for="">PAYMENT TYPE: </label>
                            <input type="text" name="payment" readonly style="width:50px">

                            <label style="font-size:10px" for="">REF/CASHIER: </label>
                            <input type="text" name="name" value="Hubert" readonly style="width:50px">
                        </div>
                        <div class="div-4-1-2-2">
                            <div>
                                <label for="">SUB TOTAL: </label>
                                <h3>0.0</h3>
                            </div>
                            <div>
                                <label for="">SHIPPING COST: </label>
                                <h3>0.0</h3>
                            </div>
                            <div>
                                <label for="">TAX AMOUNT: </label>
                                <h3>0.0</h3>
                            </div>
                            <div>
                                <label for="">DISCOUNT AMOUNT: </label>
                                <h3>0.0</h3>
                            </div>
                            <div style="background:darkgreen;color:white">
                                <label for="">GRAND TOTAL AMOUNT: </label>
                                <h3>0.0</h3>
                            </div>
                            <div style="background:darkred;color:white">
                                <label for="">TOTAL DUE/BALANCE: </label>
                                <h3>0.0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div-4-2">
                    <button name="add" class="add-btn">
                        <img src="../add.png" width="30" height="30">
                        Add
                    </button>
                    <button name="remove" class="remove-btn">
                        <img src="../remove.png" width="30" height="30">
                        Remove
                    </button>
                    <button name="delete" class="delete-btn">
                        <img src="../delete.png" width="30" height="30">
                        Delete all
                    </button>
                    <button name="print" class="print-btn" style="margin-top:200px">
                        <img src="../print.png" width="30" height="30">
                        PRINT RECEIPT
                    </button>
                    <button name="next" class="next-btn">
                        <img src="../next.png" width="30" height="30">
                        NEXT INVOICE
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>