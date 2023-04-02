<?php
class Division
{
    public $n1;
    public $n2;

    public function __construct()
    {
    $this->n1 = $_POST['numero-1'];
    $this->n2 = $_POST['numero-2'];
    }

    public function Division()
    {
        return $this->n1 / $this->n2;
    }
}
$total = new Division();
$resultado = $total->Division();
echo "El resultado de la divison es: " . $resultado;

?>
