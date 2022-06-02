<?php
namespace App\Core;
abstract class HtmlProvider{
    /**
     * Cette fonction permet de generer
     * @param string $text,
     * @param string $class
     */
    
    
    
    public static function navInfo(string $text="vue",string $color="dark",int $textSize=6,string $textBtn="bouton",string $btnColor="primary",string $link="#"){
        echo "<nav class='container bg-$color p-3'>
        <span class='mt-2 text-white display-$textSize'>
            $text
        </span>
        <a class='mt-2 text-white float-end btn btn-sm btn-$btnColor' href='$link'>$textBtn</a>
        </nav>";
    }

    public static function GenerateTable(){
    }

    public static function td(array $columns,object $row){
        $html="";
        foreach ($columns as $column) {
            $html.="<td>".$row->$column."</td>";
        }
        echo $html;
    }

    public static function startTr(){
        echo "<tr>";
    }

    public static function endTr(){
        echo "</tr>";
    }

    public static function th(){
        echo "<th class='text-dark text-center'></th>";
    }
}