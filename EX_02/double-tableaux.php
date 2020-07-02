<html>
<?php

$panier = array (
        array("T-shirt rouge","15.50","5"),
        array("T-shirt vert","15.50","6"),
        array("T-shirt argent","15.50","8"),
        array("Short bleu","16.50","5"),
        array("Short ver","19.99","5"),
        array("Veste argent","19.99","10"),
        array("Veste argent","35.00","3")
                );


function afficher_panier ($panier)
{
    $total = 0;
    foreach($panier as $produit)
    {
        $total = $produit[1] * $produit[2] + $total;
        echo "<ul>";
        echo "<li>$produit[0]</li>" , "<li>$produit[1]</li>" , "<li>$produit[2]</li>";
        echo "</ul>";
    }
    
}

function calculer_total_panier ($panier)
{
    $total = 0;
    foreach($panier as $produit)
    {
        $total = $produit[1] * $produit[2] + $total;    
    }
        echo "<p>$total</p>";
    
}
        afficher_panier($panier);
        calculer_total_panier($panier);
        
?>
</html>