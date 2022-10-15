<?php
    function component($store_name, $store_no, $store_image){
        $element = "

        <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"index.php\" method=\"post\">
            <div class=\"card\">
                <div>
                    <img widtg=50px height=100px src=\"img/$store_image\" alt=\"image1\" class=\"img-fluid card-img-top\">
                    <div class=\"card-body\"><br>
                        <h5 class=\"card-title\">$store_name</h5><br>
                        <h5 class=\"card-text\">
                        เลขบัญชี : $store_no
                        </h5>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
        ";
        echo $element;
    }
?>