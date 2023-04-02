<?php
class Suma
{
    public $n1;
    public $n2;

    public function __construct()
    {
    $this->n1 = $_POST['numero-1'];
    $this->n2 = $_POST['numero-2'];
    }

    public function Sumar()
    {
        return $this->n1 + $this->n2;
    }
}
$total = new Suma();
$resultado = $total->Sumar();
echo "El resultado de la suma es: " . $resultado;

?>
