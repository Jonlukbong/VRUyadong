<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($admindatum->name) ? $admindatum->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<!-- <div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
    <label for="surname" class="control-label">{{ 'Surname' }}</label>
    <input class="form-control" name="surname" type="text" id="surname" value="{{ isset($admindatum->surname) ? $admindatum->surname : ''}}" >
    {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
</div> -->
<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ 'Number' }}</label>
    <input class="form-control" name="number" type="number" id="number" value="{{ isset($admindatum->number) ? $admindatum->number : ''}}" >
    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('picture') ? 'has-error' : ''}}">
    <label for="picture" class="control-label">{{ 'Picture' }}</label>
    <input class="form-control" name="picture" type="file" id="picture" value="{{ isset($admindatum->picture) ? $admindatum->picture : ''}}" >
    {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('line') ? 'has-error' : ''}}">
    <label for="line" class="control-label">{{ 'Line' }}</label>
    <input class="form-control" name="line" type="text" id="line" value="{{ isset($admindatum->line) ? $admindatum->line : ''}}" >
    {!! $errors->first('line', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
    <label for="facebook" class="control-label">{{ 'Facebook' }}</label>
    <input class="form-control" name="facebook" type="text" id="facebook" value="{{ isset($admindatum->facebook) ? $admindatum->facebook : ''}}" >
    {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('emall') ? 'has-error' : ''}}">
    <label for="emall" class="control-label">{{ 'Emall' }}</label>
    <input class="form-control" name="emall" type="text" id="emall" value="{{ isset($admindatum->emall) ? $admindatum->emall : ''}}" >
    {!! $errors->first('emall', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($admindatum->address) ? $admindatum->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
