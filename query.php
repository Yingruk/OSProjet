    <?php
        $x= $_GET["data1"];
        $one = $_GET["data2"];
        $two = $_GET["data3"];
        $y = base_convert ($x, $one , $two );;
        
        if(($one=="2" || $one=="8") || ($one=="10" || $one=="16"))  {
            if(($two=="2" || $two=="8") || ($two=="10" || $two=="16")){
                if($y==0) echo "error1";
                else echo "answer : " .$y." "; 
            }  
            else echo "error2";
        }          
        else echo "error3";
    ?>