<div class="form-group {{ $errors->has('ratingName') ? 'has-error' : ''}}">
    <label for="ratingName" class="col-md-4 control-label">{{ 'Ratingname' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ratingName" type="text" id="ratingName" value="{{ $rating->ratingName or ''}}" >
        {!! $errors->first('ratingName', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="col-md-4 control-label">{{ 'Image' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="image" type="file" id="image" value="{{ $rating->image or ''}}" >
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
