<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'id','motivo','patient_id','anemia','asma','cancer', 'colesterol','convulsiones','diabetes','enf_cardicacas',
        'epilepsia','homofilia','hepatitis','hipertiroidismo','hipotiroidismo','infartos','marcapasos',
        'migrañas','presion_alta','presion_baja','prob_riñones','quimioterapias','sangrado','taquicardias',
        'tuberculosis','ulceras_gastricas','vih','embarazo','amamantando','anticonceptivo','medicamentos',
        'alergias','prob_dental_previo','tabaquismo','alcoholismo','drogas'
    ];
    public function paciente(){
        $this->belongsTo('App\Paciente');
    }
}
