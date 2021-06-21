

<?php

function component1($productname,$productauthor,$productimg,$productbarcode,$productav){
   
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"books.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                
            </div>
            <div class=\"card-body\">
            <h5 class=\"card-title\">$productname</h5>
                
              
               
                <h5>
                  
                    <span class=\"price\">$productauthor</span>
                    
                </h5>
                <h5>
                  
                <span class=\"price\">Available:$productav</span>
                
            </h5>
       

                <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add <i class=\"fas fa-shopping-cart\"></i></button>
                <input type='hidden' name='product_id' value='$productbarcode'>
            </div>
        </div>
    </form>
</div>
    ";
    echo $element;
}


function cartElement($productname,$productauthor,$productimg,$productbarcode,$productav){
    $element = "
    
    <form action=\"selectCart.php?action=remove&action1=borrow&id=$productbarcode\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid\">
                           
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                               
                                
                                <button type=\"submit\" class=\"btn btn-warning\" name=\"borrow\">Borrow</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}









?>