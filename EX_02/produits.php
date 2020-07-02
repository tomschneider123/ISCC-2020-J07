<?php

$produits = array (
        array("T-shirt rouge","15.50"),
        array("T-shirt vert","15.50"),
        array("T-shirt argent","16.50"),
        array("T-shirt bleu","19.99"),
        array("T-shirt ver","19.99"),
        array("Veste argent","35.00")
                );


function afficher_produits ($produits)
{
    echo "<table border=1><tr><td>vetements</td><td>prix</td></tr>";
    foreach($produits as $produit)
    {
        echo "<tr>";
        echo "<td>$produit[0]</td> <td>$produit[1]</td>";
        echo "</tr>";
    }
    echo "</table>";    
}
        afficher_produits($produits);
        
?>