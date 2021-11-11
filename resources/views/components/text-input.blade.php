<div class="form-group">
    <div class="row">
        <div class="{{isset($input['radio']) ?'col-md-8':'col-md-12'}}">
            <label for="{{$input['name'] ?? ''}}">{{$input['label'] ?? " "}}</label>
            <input type="text" name="{{$input['name'] ?? ''}}" class="form-control" placeholder="{{$input['placeholder'] ?? ''}}" value="{{$input['default'] ?? ''}}">
            @if(isset($input['error']))
            <div class="text text-danger"><small>{{$error_msg}}</small></div>
            @endif
        </div>

        @if(isset($input['radio']))
        <div class="{{$input['radio'] ?'col-md-4':''}}">
            <x-radio-input :input="['name' => 'correct_answer','required' => true ,'default' => $input['name'],'correct' => $input['correct']]"></x-radio-input>
        </div>
        @endif
    </div>
</div>
