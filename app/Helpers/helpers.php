<?php

use App\Models\Modality;

function getAllModalities()
{
    return Modality::all();
}

function getModality($id)
{
    return Modality::find($id);
}
