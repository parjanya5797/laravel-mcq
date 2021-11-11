@for($i = 1 ; $i <= 4; $i++)
<div class="form-check">
    <input class="form-check-input" type="radio" name="option" data-pos={{$i}}>
    <label class="form-check-label fw-bolder" for="{{$i}}">
        {{$question['ans_'.$i]}}
    </label>
</div>
@endfor
