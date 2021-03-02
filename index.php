      <?php

         $a = 0;

         $b = 0;
         $html="<table border='1'>";
         //Hola mundo 190
            $html=$html."<tr><th>i</th>";
            $html=$html."<th>a</th>";
            $html=$html."<th>b</th></tr>";
            
         for( $i = 0; $i<5; $i++ ) {
             
             $a += 10;
             $b += 5;
             
            $html=$html."<tr>";
            
                $html=$html."<td>";
                    $html=$html.($i+1);
                $html=$html."</td>";
                
                $html=$html."<td>";
                    $html=$html.$a;
                $html=$html."</td>";
                
                $html=$html."<td>";
                    $html=$html.$b;
                $html=$html."</td>";
                
                
            $html=$html."</tr>";
         }
         
         $html=$html."</table>";
         
         echo $html;

         echo ("Al final del bucle a = $a y b = $b" );

      ?>