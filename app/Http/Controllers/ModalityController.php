<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ModalityController extends Controller
{
    public function groups($modalityId)
    {
        $modalityId = $this->checkModalityValid($modalityId);

        Auth::user()->changeModalityLogged($modalityId);

        return view('admin.grupos');
    }

    public function sortitions($modalityId)
    {
        $modalityId = $this->checkModalityValid($modalityId);
        Auth::user()->changeModalityLogged($modalityId);

        return view('admin.sorteios');
    }

    public function results($modalityId)
    {
        $modalityId = $this->checkModalityValid($modalityId);
        Auth::user()->changeModalityLogged($modalityId);

        return view('admin.resultados');
    }

    public function checkModalityValid($modalityId)
    {
        try {
            $modalityId = decrypt($modalityId);

            if ($modalityId > getAllModalities()->count())
                throw ValidationException::withMessages(['error' => 'Modalidade inválida']);

            return $modalityId;
        }catch (\Exception $e){
            throw ValidationException::withMessages(['error' => 'Erro ao redirecionar à modalidade']);
        }
    }
}
