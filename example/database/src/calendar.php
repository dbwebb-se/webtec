<?php

/**
 * Functions to read details for a calendar from file into arrays.
 */

/**
 * Get the name days "namnsdagar" enligt Svenska akademin.
 * 
 * @return array where the key is the name and the value is the date. 
 */
function getNameDaysByName(): array
{
    $filename = __DIR__ . "/../data/Svenska_akademin_namnlista.csv";
    if (!is_readable($filename)) {
        throw new Exception("The data file '$filename' is not there!");
    }

    $nameDays = [];
    if (($handle = fopen($filename, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $key = $data[0];
            $value = $data[1];
            $nameDays[$key] = $value;
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
    $filename = __DIR__ . "/../data/Svenska_akademin_namn_betydelse.csv";
    if (!is_readable($filename)) {
        throw new Exception("The data file '$filename' is not there!");
    }

    $nameDays = [];
    if (($handle = fopen($filename, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $key = $data[0];
            $value = $data[1];
            $nameDays[$key] = $value;
        }
        fclose($handle);
    }

    return $nameDays;
}


