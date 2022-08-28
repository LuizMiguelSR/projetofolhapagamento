<?php
    require_once "valeTransporte.php";
    require_once "inss.php";
    require_once "irrf.php";
    
    class salarioliquido {
        public function calcularSalarioLiquido() {
            global $salarioBase;
            $objeto1 = new valeTransporte();
            $valeTransporte = $objeto1 -> calcularValeTransporte();
            $objeto2 = new inss();
            $inss = $objeto2 -> calcularInss();
            $objeto3 = new irrf();
            $irrf = $objeto3 -> calcularIrrf();
            return $salarioBase - $valeTransporte - $inss - $irrf;
        }
    }
    $objeto = new salarioLiquido();
    $salarioLiquido = $objeto ->calcularSalarioLiquido();
?>