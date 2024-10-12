<?php
// nilai detik unix timestamp/epoch time (waktu di dunia IT yang sudah berlalu sejak 1 januari 1970)
    echo time();
// 2 function sekaligus.. mencari 100 hari dari sekarang menit*jam*hari*jumlah hari
    echo date("l", time()+60*60*24*100);
// 100 hari ke belakang menit*jam*hari*jumlah hari
    echo date("d M Y", time()-60*60*24*100);
?>


<!-- function penting terhindar dari hackers
 STRING: STRLEN(), STRCMP(), EXPLODE(),HTMLSPECIALCHARS()
 UTILITY: VAR_DUMP(), ISSET(), EMPTY(), DIE(), SLEEP()
 -->