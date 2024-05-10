<?php 
class Product
{
    //  public $name = "soap";
    // public $price = 1.50;
    public $name = "";
    public $price;

    public function priceCurrency(){
        $priceCurrency = $this->price / 100;

        return $priceCurrency;
    }

}

$soapObject = new Product();
$soapObject->name= "Soap";
$soapObject->price=150;
$priceCurrency = $soapObject->priceCurrency();

var_dump($priceCurrency). PHP_EOL;
echo $priceCurrency;