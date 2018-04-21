<?php declare(strict_types = 1);

namespace Example\Controllers;

interface Crud
{
    function Create();
    function Read() : object;
    function ReadById($id) : object;
    function Update($object);
    function Delete($id);
}