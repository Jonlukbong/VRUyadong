<div class="form-group  {{ $errors->has('nameproduct') ? 'has-error' : ''}}">
    <label for="nameproduct" class="control-label">{{ 'Nameproduct' }}</label>
    <input class="form-control " name="nameproduct" type="text" id="nameproduct" value="{{ isset($product2->nameproduct) ? $product2->nameproduct : ''}}" >
    {!! $errors->first('nameproduct', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'Amount' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($product2->amount) ? $product2->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($product2->price) ? $product2->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
