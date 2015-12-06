{!! Form::open(array('action' => 'ContactController@contact', 'method' => 'post', 'class' => 'form-horizontal')) !!}
<h2>Contáctanos</h2>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <p>Please fix the following errors:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-success">
        <p>/Your message has been sent.</p>
    </div>
@endif
<div class="form-group">
    <label for="name" class="col-sm-3 control-label blue">Name</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-3 control-label blue">Email</label>
    <div class="col-sm-9">
        <input type="email" class="form-control" name="email" value="{{old('email')}}">
        <input type="hidden" name="honey">
    </div>
</div>
<div class="form-group">
    <label for="desc" class="col-sm-3 control-label blue">How can we help you?</label>
    <div class="col-sm-9">
        <textarea name="desc" class="form-control" rows="4">{{old('desc')}}</textarea>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success">Contact Us</button>
    </div>
</div>
{!! Form::close() !!}