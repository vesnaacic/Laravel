<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtikalResurs;
use App\Models\Artikal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikalController extends HandleController
{
    public function index()
    {
        $sve = Artikal::all();
        return $this->success(ArtikalResurs::collection($sve), 'Vraceni su svi artikli.');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'sifra' => 'required',
            'proizvodjacID' => 'required',
            'polID' => 'required',
            'cena' => 'required'
        ]);
        if($validator->fails()){
            return $this->error($validator->errors());
        }

        $artikal = Artikal::create($input);

        return $this->success(new ArtikalResurs($artikal), 'Novi artikal je kreiran.');
    }


    public function show($id)
    {
        $artikal = Artikal::find($id);
        if (is_null($artikal)) {
            return $this->error('Artikal sa zadatim id-em ne postoji.');
        }
        return $this->success(new ArtikalResurs($artikal), 'Artikal sa zadatim id-em je vracen.');
    }


    public function update(Request $request, $id)
    {
        $artikal = Artikal::find($id);
        if (is_null($artikal)) {
            return $this->error('Artikal sa zadatim id-em ne postoji.');
        }

        $input = $request->all();

        $validator = Validator::make($input, [
            'sifra' => 'required',
            'proizvodjacID' => 'required',
            'polID' => 'required',
            'cena' => 'required'
        ]);

        if($validator->fails()){
            return $this->error($validator->errors());
        }

        $artikal->sifra = $input['sifra'];
        $artikal->proizvodjacID = $input['proizvodjacID'];
        $artikal->polID = $input['polID'];
        $artikal->cena = $input['cena'];
        $artikal->save();

        return $this->success(new ArtikalResurs($artikal), 'Artikal je azuriran.');
    }

    public function destroy($id)
    {
        $artikal = Artikal::find($id);
        if (is_null($artikal)) {
            return $this->error('Artikal sa zadatim id-em ne postoji.');
        }

        $artikal->delete();
        return $this->success([], 'Artikal je obrisan.');
    }
}
