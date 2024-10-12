<?php

namespace App\Service;

final readonly class PythagoreUtility
{
    public function display(): string
    {
        $html = "<table>";

        for ($i = 0; $i <= 10; $i++) {
            $html .= "<tr>";
            $html .=  sprintf("<td>%s</td>",$i );

            for ($j = 1; $j <= 10; $j++) {
                if ($i === 0) {
                    $html .=  sprintf("<td>%s</td>", $j );
                } else if ($i === $j) {
                    $html .=  "<td> X </td>";
                } else {
                    $html .=  sprintf("<td>%s</td>",$i * $j );
                }
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }
}