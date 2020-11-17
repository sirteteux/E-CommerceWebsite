<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM Products ORDER BY serialNumber ASC";

$statement = $connect->prepare($query);

if($statement->execute())
{
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-3" style="margin-top:12px;margin-bottom:12px;">  
            <div style="border:1px solid #ccc; border-radius:5px; padding:16px; height:430px;" align="center" id="product_'.$row["serialNumber"].'">
             <img src="'.$row["pictures"].'" class="img-responsive" /><br />
             <h4 class="text-info">
                        <div class="checkbox">
                              <label><input type="checkbox" class="select_product" data-product_id="'.$row["serialNumber"].'" data-product_name="'.$row["productName"].'" data-product_price="'.$row["price"] .'" value="">'.$row["productName"].'</label>
                        </div>
                  </h4>
             <h4 class="text-danger">$ '.$row["price"] .'</h4>
            </div>
        </div>
  ';
 }
 echo $output;
}
?>