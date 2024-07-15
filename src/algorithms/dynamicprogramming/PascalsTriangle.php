<?php

namespace src\algorithms\dynamicprogramming;

class PascalsTriangle
{
    public function generate($numRows) {
        $triangle = [[1]]; // Initialize Pascal's Triangle with the first row

        for ($row = 1; $row < $numRows; $row++) {
            $currentRow = [1]; // Initialize the current row with the first element

            // Calculate the elements of the current row based on the previous row
            for ($col = 1; $col < $row; $col++) {
                $currentRow[] = $triangle[$row - 1][$col - 1] + $triangle[$row - 1][$col];
            }

            $currentRow[] = 1; // Add the last element of the current row
            $triangle[] = $currentRow; // Add the current row to Pascal's Triangle
        }

        return $triangle;
    }
}
