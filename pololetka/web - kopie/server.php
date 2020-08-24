<?php
session_start();

function kmenDB()
{
    return new mysqli("localhost", "root", '', "pololetka");
}
function startDB()
{
    return new mysqli("localhost", "root", '');
}
