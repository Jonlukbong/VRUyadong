<div class="form-group {{ $errors->has('revenue') ? 'has-error' : ''}}">
    <label for="revenue" class="control-label">{{ 'รายรับ' }}</label>
    <input class="form-control" name="revenue" type="number" id="revenue" value="{{ isset($finance->revenue) ? $finance->revenue : ''}}" >
    {!! $errors->first('revenue', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expenses') ? 'has-error' : ''}}">
    <label for="expenses" class="control-label">{{ 'รายจ่าย' }}</label>
    <input class="form-control" name="expenses" type="number" id="expenses" value="{{ isset($finance->expenses) ? $finance->expenses : ''}}" >
    {!! $errors->first('expenses', '<p class="help-block">:message</p>') !!}
</div>
<!-- <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($finance->user_id) ? $finance->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> -->


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
