<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css.css">
  <title>Document</title>
</head>
<body>
<?php
// Interface
interface Model {
    public function cabang();
}
// interable
function getIterable():iterable {
  return ["<h2>Selamat Datang Di Gallaxy Center</h2>"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Produk {
    // Access modifiers Public
    // properti
  public $merk,
            $proci,
            $harga;

  // contruktor
  function __construct ($merk, $proci, $harga) {
    $this->merk = $merk;
    $this->proci = $proci;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Produk proccesor : Merk : {$this->merk} | Sistem : {$this->proci} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Produk2 extends Produk implements Model{
    public  function cabang (){
        echo "<hr>Silahkan di order kak";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $pertama = 12, $kedua = 22;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Produk AMD = 10 <br> Produk Intel = 20";
        echo "<hr>";
    }
}
// objek
$produk1 = new Produk2("AMD", "Ryzen 9 5950x", 12400000);
$produk2 = new Produk2("AMD", "Ryzen 5 3500x", 5000000);
$produk3 = new Produk2("AMD", "Ryzen 5 3400g", 3400000);
$produk4 = new Produk2("AMD", "Ryzen 3 3300g", 2000000);
$produk5 = new Produk2("Intel", "i3 1005g1", 2400000);
$produk6 = new Produk2("Intel", "i7 8700k", 5000000);
$produk7 = new Produk2("Intel", "i7 7700k", 3400000);
$produk8 = new Produk2("Intel", "i9 9900k", 6600000);
$produk2 -> cabang();
Stok::staticMethod();
echo "AMD Terjual: " . Terjual::$pertama;
echo "<br> INTEL Terjual : " . Terjual::$kedua;
echo "<hr>";
?>
</body>
</html>