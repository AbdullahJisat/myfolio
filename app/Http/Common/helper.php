<?php

function message($key)
{
    switch ($key) {
        case 'save':
            return 'Save successfully!!';
            break;
        case 'update':
            return 'Update successfully!!';
            break;
        case 'delete':
            return 'Delete successfully!!';
            break;
        default:
            return 'Data loaded successfully!!';
            break;
    }
}
