<div class="form-group {{ $errors->has('promotion') ? 'has-error' : ''}}">
    <label for="promotion" class="control-label">{{ 'Promotion' }}</label>
    <textarea class="form-control" rows="5" name="promotion" type="textarea" id="promotion" >{{ isset($promotion->promotion) ? $promotion->promotion : ''}}</textarea>
    {!! $errors->first('promotion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('picture') ? 'has-error' : ''}}">
    <label for="picture" class="control-label">{{ 'Picture' }}</label>
    <input class="form-control" name="picture" type="file" id="picture" value="{{ isset($promotion->picture) ? $promotion->picture : ''}}" >
    {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
