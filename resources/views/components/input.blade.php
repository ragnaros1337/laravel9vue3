<div class="kugoo-input-box">
    @if($attributes['label'])
        <label for="{{$attributes['id']}}">{{$attributes['label']}}</label>
    @endif
    <input id="{{$attributes['id']}}" type="text" class="kugoo-input {{$attributes['class']}}" placeholder="{{$attributes['placeholder']}}"/>
</div>
