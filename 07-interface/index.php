<?php
interface Kendaraan {
    public function startEngine();
}

class Motor implements Kendaraan {
    public function startEngine(): void {
        echo "Mesin motor dinyalakan" . PHP_EOL;
    }
}