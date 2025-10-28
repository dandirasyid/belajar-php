<?php

namespace Service;

use Entity\Product;

class Cart {
    private array $items = [];

    public function addProduct(Product $product) {
        $this->items[] = $product;
        echo "✅ Produk " . $product->getName() . " " . "Berhasil Di Tambahkan" . PHP_EOL;
    }

    public function showProduct() {
        echo "\n ====== Daftar Produk ====== \n";

        if (empty($this->items)) {
            echo "🙏 Maaf, Produk Belum Tersedia" . PHP_EOL;
        }

        $total = 0;
        foreach ($this->items as $index => $product) {
            $no = $index + 1;
            echo "$no. " . $product->getName() . " " . $product->getPrice() . PHP_EOL;
            $total += $product->getPrice();
        }

        echo "-------------------" . PHP_EOL;
        echo "💰 Total : $total " . PHP_EOL;
        echo "-------------------" . PHP_EOL;
    }
}
