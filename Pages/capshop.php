        <!-- Core theme CSS (includes Bootstrap)-->
        
        <?php include("../pages/setup.php");?>  <!-- This is the setup file. -->
        
        <?php  
    print_r($_GET);
    $product_id= $_GET["product_id"]; ?>


    <?php   
    $sql = "SELECT * FROM product where product_id= $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc(); 
        #debugging print_r($row);
        $fruit=$row["fruit"];
        $color=$row["color"];
        $weight=$row["weight"]; 
        $product_id=$row["product_id"];
        $price=$row["price"];
        $image=$row["image"];
       
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>



    <?php include("head_nav.php")?>
    <link rel="newest stylesheet" href="../css/shop.css" rel="stylesheet"/>

    <div class="order"><?php if(isset($_SESSION['message'])){ 
					echo $_SESSION['message'];
					unset($_SESSION['message']); }?> </div>

        <!-- Product section-->
        <form action="../admin/buy.php" method="POST" >
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../images/<?php echo "$image" ?>" alt="..." /></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder"><?php echo "$fruit"; ?></h1>
                        <div class="fs-5 mb-5">
                        <div class="small mb-1">Color: <?php echo "$color"?></div>
                        <div class="small mb-1">Weight: <?php echo "$weight"?></div>
                        <div class="small mb-1">Tag: 1</div>
                          
                            <span>$<?php echo "$price" ?> per 10kg</span>
                        </div>
                       
                        <div class="d-flex">
                            <input type="hidden" name="product_id" value="<?php echo "$product_id" ?>">
                            <!-- <input type="hidden" name="account_id" value="<?php echo "$account_id" ?>"> -->
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem"/>
                            <input class="btn btn-outline-dark flex-shrink-0" type="submit" value="          Add to kart          "> 
                                <i class="bi-cart-fill me-1"></i>
                            </input>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../images/redcap.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <!-- <span class="text-muted text-decoration-line-through">$20.00</span> -->
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <!-- <span class="text-muted text-decoration-line-through">$50.00</span> -->
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </form>
    </body>
</html>