<?php 
    @$jari_jari = 92/2;
    @$luas = 22/7 * $jari_jari * $jari_jari;
    @$keliling = 2 * 22/7 * $jari_jari;
    @$volume = 4/3 * 22/7 * $jari_jari * $jari_jari * $jari_jari;
?>
<!DOCTYPE html>
<hmtl>
    <head>
        <title>LINGKARAN</title>
    </head>    <body>
        <form method="POST">

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
                             echo "".$luas." cm";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Keliling Lingkaran</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$keliling." cm";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Volume Lingkaran</td>
                    <td>=</td>
                    <td><?php 
                             echo "".$volume." cm";
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</hmtl> 
