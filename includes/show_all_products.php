<?php
    $grouping_enabled = true;
    $req_categories = "SELECT * FROM categories";
    
    if(isset($_GET['cat']))
    {
        $categorie_id = $_GET['cat'];
        $req_categories = "SELECT * FROM categories WHERE cat_id = $categorie_id";
        $grouping_enabled = false;
    }
    
    $res_categories = mysqli_query($con,$req_categories);


    while($categorie_row = mysqli_fetch_assoc($res_categories))
    {
        $categorie_id = $categorie_row['cat_id'];
        $categorie_title = $categorie_row['cat_title'];

        echo "
            <div class='row'>
                <div class='span12'>
                    <h4 class='title'>
                        <span class='pull-left'><span class='text'><span class='line'>$categorie_title</span></span></span>
        ";

        if ($grouping_enabled)
        {
            echo "
                <span class='pull-right'>
                    <a class='left button' href='#myCarousel$categorie_id' data-slide='prev'></a><a class='right button' href='#myCarousel$categorie_id' data-slide='next'></a>
                </span>
            ";
        }
                        
        echo "
            </h4>
            <div id='myCarousel$categorie_id' class='myCarousel carousel slide'>
                <div class='carousel-inner'>
        ";

        $req = "SELECT * FROM products WHERE product_cat = $categorie_id";
        $res = mysqli_query($con,$req);
    
        $nb_products_fetched = 0;
        while($data=mysqli_fetch_assoc($res))
        {
            $pro_id = $data['product_id'];
            $pro_cat = $data['product_cat'];
            $pro_brand = $data['product_brand'];
            $pro_title = $data['product_title'];
            $pro_price = $data['product_price'];
            $pro_image = $data['product_image'];
            
            if ($nb_products_fetched == 0)
            {
                echo "
                    <div class='active item'>
                        <ul class='thumbnails'>
                ";
            }
            elseif ($nb_products_fetched % 4 == 0 && $grouping_enabled)
            {
                echo "
                    <div class='item'>
                        <ul class='thumbnails'>
                ";
            }
            
            echo "
                <li class='span3'>
                    <div class='product-box'>
                        <p><a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_image' alt='' style='width:270px; height:250px;'/></a></p>
                        <a href='details.php?pro_id=$pro_id' class='title'>$pro_title</a><br/>
                        <a href='index.php?cat=$categorie_id' class='category'>$categorie_title</a>
                        <p class='price'>$$pro_price</p>
                        <a href='index.php?add_cart=$pro_id'><button>Add to Cart</button></a>
                    </div>
                </li>
            ";

            if (($nb_products_fetched + 1) % 4 == 0 && $grouping_enabled)
            {
                echo "
                        </ul>
                    </div>
                ";
            }

            $nb_products_fetched++;
        }

        if ($nb_products_fetched % 4 != 0 || $grouping_enabled)
        {
            echo "
                    </ul>
                </div>
            ";
        }

        echo "
                        </div>							
                    </div>
                </div>						
            </div>
            <br/>
        ";
    }
?>