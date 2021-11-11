<div class="col-auto">
    <label for="{{$input['default'] ?? ''}}">{{$input['label'] ?? " "}}</label>
    <br>
    <input type="radio" for="{{$input['for'] ?? ''}}" name="{{$input['name'] ?? ''}}" class="mt-4" value="{{$input['default'] ?? ''}}" {{getCorrectClass($input['default'],$input['correct'],'internal')?'checked':''}}>
    @if(isset($input['error']))
    <div class="text text-danger"><small>{{$error_msg}}</small></div>
    @endif
</div>
