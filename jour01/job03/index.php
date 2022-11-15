<style><?php include "style.css"; ?></style>
<?php   
    $my_bool = true;
    $my_str = "Bonjour";
    $my_int = 5;
    $my_float = 5.5;

    echo "
    <table>
        <thead>
            <tr>
                <td><strong>Type</strong></td>
                <td><strong>Nom</strong></td>
                <td><strong>Valeur</strong></td>
            </tr>
        </thead>

        <tbody>
        <tr>
            <td>Boolean</td>
            <td>my_bool</td>
            <td>$my_bool</td>
        </tr>
        <tr>
            <td>String</td>
            <td>my_str</td>
            <td>$my_str</td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>my_integer</td>
            <td>$my_int</td>
        </tr>
        <tr>
            <td>Float</td>
            <td>my_float</td>
            <td>$my_float</td>
        </tr>
        </tbody>
    </table>
    "
?>