<?php

/**
 * Functions to read details for a calendar from file into arrays.
 */

/**
 * Get the name days "namnsdagar" enligt Svenska akademin, include all details
 * where the each key contain an array with details.
 *
 * @return array where the key is the name and the value is the date.
 */
function getNameDaysByNameFull(): array
{
    $filename = "../data/Svenska_akademin_namnlista.csv";
    $nameDays = [];
    $handle = fopen($filename, "r");
    if ($handle !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $key = $data[0];
            //$value = $data[1];
            $nameDays[$key] = $data;
        }
        fclose($handle);
    }

    return $nameDays;
}



/**
 * Get the explanation of the some common names.
 *
 * @return array where the key is the name and the value is the explanation.
 */
function getNameExplanation(): array
{
    $filename = "../data/Svenska_akademin_namn_betydelse.csv";
    $nameDays = [];
    $handle = fopen($filename, "r");
    if ($handle !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $key = $data[0];
            $value = $data[1];
            $nameDays[$key] = $value;
        }
        fclose($handle);
    }

    return $nameDays;
}
