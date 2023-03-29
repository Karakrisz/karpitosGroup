<?php

function homeController()
{

    return [
        "home",
        [
            "title" => "Kezdőlap"
        ]
    ];
}

function aboutController()
{

    return [
        "vallalatrol",
        [
            "title" => "A vállalatról"
        ]
    ];
}

function projectsController()
{

    return [
        "projektek",
        [
            "title" => "Projektek"
        ]
    ];
}
function servicesController()
{

    return [
        "szolgaltatasok",
        [
            "title" => "Szolgáltatások"
        ]
    ];
}

function contactController()
{

    return [
        "kapcsolat",
        [
            "title" => "Kapcsolat"
        ]
    ];
}


function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}