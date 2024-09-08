<?php
for ( $outer_list = 1; $outer_list <= 3;$outer_list++){
    echo "list $outer_list <br>";
    for ( $iner_list =1 ; $iner_list <=2; $iner_list++){
        echo "---inner list $iner_list <br>";

        if ($outer_list ==2 && $iner_list == 1){
            goto Out;
        }
    }
}
Out:
echo "End";
?>