@extends('layouts.app')

@section('content')
<h3>Pilgrim info:</h3>
{{ $pilgrim_info->firstname }}
<h3>Sponsor Info:</h3>
{{ $sponsor_info->fullname }}
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pastor Application</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/pastor/insert">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <label for="fullname" class="col-md-4 control-label">Full Name:</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                @if ($errors->has('fullname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('churchname') ? ' has-error' : '' }}">
                            <label for="churchname" class="col-md-4 control-label">Church Name:</label>

                            <div class="col-md-6">
                                <input id="churchname" type="text" class="form-control" name="churchname" value="{{ old('churchname') }}" required>

                                @if ($errors->has('churchname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('churchname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address:</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City:</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State:</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" required>

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Zip:</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" required>

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone:</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('goodcandidateexplanation') ? ' has-error' : '' }}">
                            <label for="goodcandidateexplanation" class="col-md-4 control-label">Why Is This A Good Candidate:</label>

                            <div class="col-md-6">
                               <textarea id="goodcandidateexplanation" class="form-control" name="goodcandidateexplanation" required cols="50" rows="10"></textarea>


                                @if ($errors->has('goodcandidateexplanation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goodcandidateexplanation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('signed') ? ' has-error' : '' }}">
                            <label for="signed" class="col-md-4 control-label">Type Full Name For Signature:</label>

                            <div class="col-md-6">
                                <input id="signed" type="text" class="form-control" name="signed" required>

                                @if ($errors->has('signed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('signed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date Signed:</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" required>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-primary">
                                    Clear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
