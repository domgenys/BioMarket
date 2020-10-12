<?php $page_title = 'BioMarket | Stock | Add New Stock'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/new_product.css"> 
</head>
<body>
  
<?php include "admin_panel_connection.php"; ?>      

<form action="?page=add_product_to_stock" method="post" enctype="multipart/form-data">  
<div class="acp-add-prod-wrap">
  
  <div class="side left">   
      <div class="fakeimg"><p>IMAGE OF PRODUCT</p></div>   
    
     <div class="img"> <input type="file" name="prod_img" required></div> 
  </div>
     
 <div class="side right">
  <div class="product">
    <input type="text" placeholder="Enter product name" name="prod_name" required>
  </div>    
  <div class="product">
    <p>Product Category:   
    <select name="cat_id" required aria-required="true">
        <option value="" >Choose Category     </option> 
        <option value="1">Bakery</option>  
        <option value="2">Drink</option>       
        <option value="3">Vegetables</option>
        <option value="4">Dairy</option>
    </select></p>
  </div>     
  <div class="product quantity">
    <p>Price: &pound   <input type="number" placeholder="Enter product price" name="price" step="0.01" required></p>
  </div>
  <div class="product">
    <p>Supplier:   
        <select name="sup_id" required aria-required="true">
        <option value="" >Choose Supplier  </option>  
        <option value="1">Real Bakery</option>  
        <option value="2">Organic Drink Corp</option>       
        <option value="3">Fresh Veggie</option>
        <option value="4">Happy Cows Dairy</option>
    </select></p>
  </div>      
     
  <div class="product">
    <p>Description of the Product:</p>
    <textarea  placeholder="Enter Product Description" name="prod_dsc" maxlength="230" required></textarea>
  </div>
  <div class="product quantity">
    <p>Quantity:  <input type="number" placeholder="Enter stock quantity" name="sto_qty" required></p>
  </div>
  <button type="submit" name="submit" class="btn-add-stock">Add Product To Stock</button>
  </div>  
</div>
  
</form>

 </body>
</html>
