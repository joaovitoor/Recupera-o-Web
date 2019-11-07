<?php

    include 'banco.php';
    
    $link = conectar();
function quest1(){
    global $link;
    $sql = "select Name from country, countrylanguage where country.Code = countrylanguage.CountryCode and Language = 'Portuguese' and IsOfficial = 'T'";
    $resposta = mysqli_query($link, $sql);
    if($resposta){
        $linha = mysqli_fetch_assoc($resposta);
        echo "<h1>Países com idioma oficial Português</h1>";
        echo "<table>";
        while($linha){
            echo "<tr>";
            echo "<td>{$linha['Name']}</td>";
            echo "</tr>";
            $linha = mysqli_fetch_assoc($resposta);
        }
        echo "</table>";
    }
}
quest1();

function quest2(){
    global $link;
    
    $sql = "select city.Name, city.Population, country.Population as total from country, city where country.Code = city.CountryCode and country.code = 'BRA'";
    $resposta = mysqli_query($link, $sql);
    
    if($resposta){
        $linha = mysqli_fetch_assoc($resposta);
        echo "<h1>Cidades e População do Brazil</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<td>População Total do Brazil:{$linha['total']}</td>";
        echo "</tr>";
        while($linha){
            echo "<tr>";
            echo "<td>{$linha['Name']}</td>";
            echo "<td>{$linha['Population']}</td>";
            echo "</tr>";
            $linha = mysqli_fetch_assoc($resposta);
        }
        echo "</table>";
    }

}
quest2();

function quest3(){
    global $link;

    $sql = "select Name, Population, LifeExpectancy, GNP from country where Continent = 'South America' order by LifeExpectancy desc";
    $resposta = mysqli_query($link, $sql);

    if($resposta){
        $linha = mysqli_fetch_assoc($resposta);
        echo "<h1>Países Sul-Americanos</h1>";
        echo "<table>";
        while($linha){
            echo "<tr>";
            echo "<td>{$linha['Name']}</td>";
            echo "<td>{$linha['Population']}</td>";
            echo "<td>{$linha['LifeExpectancy']}</td>";
            echo "<td>{$linha['GNP']}</td>";
            echo "</tr>";
            $linha = mysqli_fetch_assoc($resposta);

        }
        echo "</table>";
    }

}
quest3();

function quest4(){
    global $link;

    $sql = "select Name, Population, LifeExpectancy, GNP from country where Continent = 'Africa' order by GNP desc";
    $resposta = mysqli_query($link, $sql);

    if($resposta){
        $linha = mysqli_fetch_assoc($resposta);
        echo "<h1>Países Africanos</h1>";
        echo "<table>";
        while($linha){
            echo "<tr>";
            echo "<td>{$linha['Name']}</td>";
            echo "<td>{$linha['Population']}</td>";
            echo "<td>{$linha['LifeExpectancy']}</td>";
            echo "<td>{$linha['GNP']}</td>";
            echo "</tr>";
            $linha = mysqli_fetch_assoc($resposta);
        }    
    }
    echo "</table>";

}
quest4();