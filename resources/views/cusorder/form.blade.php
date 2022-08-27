<div class="form-group {{ $errors->has('nameproduct') ? 'has-error' : ''}}">
    <label for="nameproduct" class="control-label">{{ 'Nameproduct' }}</label>
    <input class="form-control" name="nameproduct" type="text" id="nameproduct" value="{{ isset($cusorder->nameproduct) ? $cusorder->nameproduct : ''}}" >
    {!! $errors->first('nameproduct', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'Amount' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($cusorder->amount) ? $cusorder->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($cusorder->price) ? $cusorder->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('picture') ? 'has-error' : ''}}">
    <label for="picture" class="control-label">{{ 'Picture' }}</label>
    <input class="form-control" name="picture" type="file" id="picture" value="{{ isset($cusorder->picture) ? $cusorder->picture : ''}}" >
    {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idproduct') ? 'has-error' : ''}}">
    <label for="idproduct" class="control-label">{{ 'Idproduct' }}</label>
    <input class="form-control" name="idproduct" type="number" id="idproduct" value="{{ isset($cusorder->idproduct) ? $cusorder->idproduct : ''}}" >
    {!! $errors->first('idproduct', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($cusorder->user_id) ? $cusorder->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($cusorder->status) ? $cusorder->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
