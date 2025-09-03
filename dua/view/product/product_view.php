<?php

class ProductView extends ProductController
{
    public function show()
    {
        $stastay = $this->getProducts(); 
        foreach ($stastay as $stastay) { ?>
        <tr>
        <td><?php echo $stastay['id']; ?></td>
        <td><?php echo $stastay['name']; ?></td>
        <td><?php echo $stastay['price']; ?></td>
        <td><?php echo $stastay['stock']; ?></td>
        </tr>
        <?php
        }
    }

    public function find()
    {
        $detailProduct = $this->getProductBy(); 
        if (empty($detailProduct))
        return;
        foreach ($detailProduct as $detail) { ?>
        <div>
        <h3><?php echo $detail['name']; ?></h3>
        <p>Harga: Rp. <?php echo $detail['price']; ?></p>
        <p>Stok: <?php echo $detail['stock']; ?></p>
        </div>
        <?php
        }
    }
}

?>
