<label for="parent">{{ __('Padre o tutor') }}</label>
<input id="parent" type="text" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" parent="parent" value="{{ old('parent') }}" autofocus> 
@if ($errors->has('parent'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('parent') }}</strong>
    </span>
@endif

<div>
        <label id="label-form" for="occupation">{{ __('Ocupación') }}</label>
        <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="{{ old('occupation') }}"> 
        @if ($errors->has('occupation'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('occupation') }}</strong>
            </span>
        @endif
</div>
protected $fillable = [
        'name_patient','fecha','medicamento','doctor_id'
    ];

    public function doctor(){
        $this->belongsTo('App\Doctor');
    }

