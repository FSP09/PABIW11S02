<!-- 
  Nama  : F. Salmanso Pakpahan
  NIM   : 13320132
  Prodi : D3TK2
 -->

<?php

//Class
class Coba{ 

  private $name; //Property
  private $marga; //Property
  private $tgglhr; //Property
  private $tptlhr; //Property
  private $gender; //Property
  private $hobby; //Property

  public function __construct($name, $marga, $tptlhr, $tgglhr, $gender, $hobby){ //Magic Method
    $this -> name = $name; // object type
    $this -> marga = $marga; // object type
    $this -> tptlhr = $tptlhr; // object type
    $this -> tgglhr = $tgglhr; // object type
    $this -> gender = $gender; // object type
    $this -> hobby = $hobby; // object type
    
  }
  public function getRetrunLengkap(){ //Method
    $str = "Nama : {$this->name} {$this->marga} <br> Tempat Tanggal Lahir : {$this->tptlhr}/{$this->tgglhr}";  // object type
    if ($this -> name == "Salmanso") {
      $str .= "<br>Hobi : {$this->hobby}";
   }else if($this -> name == "Isco") {
      $str .= "<br>Jenis Kelamin : {$this->gender}";
   }
    return $str;
  }
}

//Object
$ObjectResult1 = new Coba('Salmanso', 'Pakpahan', 'Tarutung', '09-10-2003', 0, "Tidur");
echo $ObjectResult1 -> getRetrunLengkap();
$ObjectResult2 = new Coba('Isco', 'Pakpahan', 'Tarutung', '20-10-1991', "lakilaki", 0);
echo "<br><hr>";
echo $ObjectResult2 -> getRetrunLengkap();
?>