<?php
class ExmStatic{
    public static $n = 0;
    public static function string(){
        $str = "Anak Ke-". self:: $n++;
        return $str;
    }
}

echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
?>