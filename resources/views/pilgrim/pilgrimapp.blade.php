@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pilgrim Application</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/pilgrim/insert">
                        {{ csrf_field() }}

                        {{ Form::select('sponsor', $sponsors ) }}
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name:</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name:</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
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

                        <div class="form-group{{ $errors->has('aptsuite') ? ' has-error' : '' }}">
                            <label for="aptsuite" class="col-md-4 control-label">Apt/Suite:</label>

                            <div class="col-md-6">
                                <input id="aptsuite" type="text" class="form-control" name="aptsuite" value="{{ old('aptsuite') }}" required autofocus>

                                @if ($errors->has('aptsuite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aptsuite') }}</strong>
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

                        <div class="form-group{{ $errors->has('bestcalltime') ? ' has-error' : '' }}">
                            <label for="bestcalltime" class="col-md-4 control-label">Best Time To Call:</label>

                            <div class="col-md-6">
                                <input id="bestcalltime" type="text" class="form-control" name="bestcalltime" value="{{ old('bestcalltime') }}" required autofocus>

                                @if ($errors->has('bestcalltime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bestcalltime') }}</strong>
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
                        <div class="form-group{{ $errors->has('over18') ? ' has-error' : '' }}">
                            <label for="over18" class="col-md-4 control-label">Over 18?:</label>

                            <div class="col-md-6">
                              <input name="over18" type="radio" value="Yes"> Yes <br>
                              <input name="over18" type="radio" value="No"> No

                                @if ($errors->has('over18'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('over18') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                            <label for="occupation" class="col-md-4 control-label">Occupation:</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control" name="occupation" required>

                                @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tagname') ? ' has-error' : '' }}">
                            <label for="tagname" class="col-md-4 control-label">Name To Put On Name Tag:</label>

                            <div class="col-md-6">
                                <input id="tagname" type="text" class="form-control" name="tagname" required>

                                @if ($errors->has('tagname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tagname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('maritalstatus') ? ' has-error' : '' }}">
                            <label for="maritalstatus" class="col-md-4 control-label">Marital Status:</label>

                            <div class="col-md-6">
                              <input name="maritalstatus" type="radio" value="single"> Single <br>
                              <input name="maritalstatus" type="radio" value="married"> Married <br>
                              <input name="maritalstatus" type="radio" value="separated"> Separated <br>
                              <input name="maritalstatus" type="radio" value="divorced"> Divorced <br>
                              <input name="maritalstatus" type="radio" value="widowed"> Widowed
                                @if ($errors->has('maritalstatus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('maritalstatus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('marriagepartner') ? ' has-error' : '' }}">
                            <label for="marriagepartner" class="col-md-4 control-label">Spouse's Name:</label>

                            <div class="col-md-6">
                                <input id="marriagepartner" type="text" class="form-control" name="marriagepartner" required>

                                @if ($errors->has('marriagepartner'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('marriagepartner') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('homechurch') ? ' has-error' : '' }}">
                            <label for="homechurch" class="col-md-4 control-label">Home Church:</label>

                            <div class="col-md-6">
                                <input id="homechurch" type="text" class="form-control" name="homechurch" required>

                                @if ($errors->has('homechurch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homechurch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('homechurchcity') ? ' has-error' : '' }}">
                            <label for="homechurchcity" class="col-md-4 control-label">City:</label>

                            <div class="col-md-6">
                                <input id="homechurchcity" type="text" class="form-control" name="homechurchcity" required>

                                @if ($errors->has('homechurchcity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homechurchcity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('homechurchpastor') ? ' has-error' : '' }}">
                            <label for="homechurchpastor" class="col-md-4 control-label">Pastor:</label>

                            <div class="col-md-6">
                                <input id="homechurchpastor" type="text" class="form-control" name="homechurchpastor" required>

                                @if ($errors->has('homechurchpastor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homechurchpastor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('homechurchattendance') ? ' has-error' : '' }}">
                            <label for="homechurchattendance" class="col-md-4 control-label">How Often Do You Attend Church:</label>

                            <div class="col-md-6">
                                <input id="homechurchatendance" type="text" class="form-control" name="homechurchattendance" required>

                                @if ($errors->has('homechurchattendance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('homechurchattendance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12"><p><strong>SPECIAL NEEDS?</strong> If you require a special diet
                                    and/or any physical/mobility accommodations, please check the applicable box
                                    below and give a detailed explanation.  This is very important information so
                                    that we can make sure you can fully experience all the events/activities
                                    throughout the weekend.</p>
                          </div>
                          <div class="form-group{{ $errors->has('specialneeds') ? ' has-error' : '' }}">
                              <label for="specialneeds" class="col-md-4 control-label">Special Needs:</label>

                              <div class="col-md-6">
                                <input name="specialneeds" type="radio" value="allergies">
                                Allergies to Food (i.e. dairy, nuts,shellfish)<br>
                                <input name="specialneeds" type="radio" value="medical">
                                Medical necessary Diets (i.e. vegetarian, no salt, diabetic, gluten free,etc...)<br>
                                <input name="specialneeds" type="radio" value="physical">
                                Medical / Physical Requirements (ie: cpap machine & plug, language or hearing assistance, medications at a
                                specific time , mobility issues, wheelchair assistance, recent surgeries, hygiene assistance)
 <br>

                                  @if ($errors->has('specialneeds'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('specialneeds') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('reasontoattend') ? ' has-error' : '' }}">
                              <label for="reasontoattend" class="col-md-4 control-label">
                                Applicant - Please tell us why you would like to attend Cursillo and
                                list in detail your current involvement within your church:</label>

                              <div class="col-md-6">
                                  <textarea id="reasontoattend" class="form-control" name="reasontoattend" cols="50" rows="10" required></textarea>
                                  @if ($errors->has('reasontoattend'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('reasontoattend') }}</strong>
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
