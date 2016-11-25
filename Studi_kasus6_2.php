<?php 
    @$jari_jari = 92/2;
    @$luas_l= 22/7 * $jari_jari * $jari_jari;
    @$keliling_l = 2 * 22/7 * $jari_jari;
    @$volume_l = 4/3 * 22/7 * $jari_jari * $jari_jari * $jari_jari;
    
    @$panjang = 24;
    @$lebar = 521;
    @$tinggi = 152;
    @$luas_pp = $panjang * $lebar;
    @$keliling_pp = 2 * ($panjang + $lebar);
    @$volume_balok = $panjang * $lebar * $tinggi;
?>
<!DOCTYPE html>
<hmtl>
    <head>
        <title>LINGKARAN dan PERSEGI PANJANG</title>
    </head>  
    <body>
        <form method="POST">
        <H2>LINGKARAN</H2>
            <table border="1">
                <tr>
                    <td>Diameter</td>
                    <td>=</td>
                    <td>092 cm<br/></td>
                </tr>
                <tr>
                    <td>jari-jari</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$jari_jari." cm";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Luas Lingkaran</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$luas_l." cm";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Keliling Lingkaran</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$keliling_l." cm";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Volume Lingkaran</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$volume_l." cm";
                        ?>
                    </td>
                </tr>
            </table>
            <H2>PERSEGI PANJANG</H2>
            <table border="1">
                <tr>
                    <td>Panjang</td>
                    <td>=</td>
                    <td>042 cm<br/></td>
                </tr>
                <tr>
                    <td>lebar</td>
                    <td>=</td>
                    <td>521</td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>=</td>
                    <td>152</td>
                </tr>
                <tr>
                    <td>Luas Persegi Panjang</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$luas_pp." cm";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Keliling Persegi Panjang</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$keliling_pp." cm";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Volume Persegi Panjang</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$volume_balok." cm";
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</hmtl> 
