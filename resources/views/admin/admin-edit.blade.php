@extends('adminLayout')

@section('content')
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Edit User
                        <small>profile</small>
                    </h3>
                </div>
            </div>
            <!-- .row -->
            @if($message['info'] !== null)
                {{ $message['info'] }}
                @endif


            <div class="row">
                <div class="col-xs-12">

                    <form class="form-horizontal" method="post">
                        <div class="row flex-row">
                            <div class="col-md-6">

                                <div class="with_border with_padding">

                                    <h4>User info</h4>

                                    <hr>

                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label" for="user-profile-avatar">Select Avatar</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('pic'))
                                                @foreach($errors->get('pic') as $error)
                                                    {{ $error }}<br>
                                                    @endforeach
                                                @endif
                                            <input type="file" name="pic" value="@if(isset($data['pic'])){{$data['pic']}}@elseif(isset($profile)){{$profile->pic}}@endif" id="user-profile-avatar">
                                            <p class="help-block">Select your 200x200px avatar</p>

                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Country:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('country'))
                                                @foreach($errors->get('country') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <select class="form-control" name="country">
                                                <option selected="">Select Country</option>
                                                <option @if($data['country'] === 'USA'))  selected @elseif($profile->country === 'USA') selected @endif>USA</option>
                                                <option @if($data['country'] === 'United Kingdom'))  selected @elseif($profile->country === 'United Kingdom') selected @endif>United Kingdom</option>
                                                <option @if($data['country'] === 'Australia'))  selected @elseif($profile->country === 'Australia') selected @endif>Australia</option>
                                                <option @if($data['country'] === 'Germany'))  selected @elseif($profile->country === 'Germany') selected @endif>Germany</option>
                                                <option @if($data['country'] === 'France'))  selected @elseif($profile->country === 'France') selected @endif>France</option>
                                                <option @if($data['country'] === 'Other'))  selected @elseif($profile->country === 'Other') selected @endif>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Company name:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('company'))
                                                @foreach($errors->get('company') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <input type="text" name="company" value="@if(isset($data['company'])){{$data['company']}}@elseif(isset($profile)){{$profile->company}}@endif" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Position:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('position'))
                                                @foreach($errors->get('position') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <input type="text" name="position" value="@if(isset($data['position'])){{$data['position']}}@elseif(isset($profile)){{$profile->position}}@endif" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <!-- .with_border -->

                            </div>
                            <!-- .col-* -->

                            <div class="col-md-6">
                                <div class="with_border with_padding">

                                    <h4>Contact info</h4>

                                    <hr>


                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Work number:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('number'))
                                                @foreach($errors->get('number') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <input type="tel" name="number" value="@if(isset($data['number'])){{$data['number']}}@elseif(isset($profile)){{$profile->number}}@endif" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Mobile number:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('mobile'))
                                                @foreach($errors->get('mobile') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <input type="tel" name="mobile" value="@if(isset($data['mobile'])){{$data['mobile']}}@elseif(isset($profile)){{ $profile->mobile }}@endif" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">E-mail address:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('email'))
                                                @foreach($errors->get('email') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif

                                            <input type="email" name="email" value="@if(isset($data['email'])){{$data['email']}}@elseif(isset($profile)){{$profile->email}}@endif" class="form-control">

                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Work address:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('adress'))
                                                @foreach($errors->get('adress') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <textarea rows="2" name="adress">@if(isset($data['adress'])){{$data['adress']}}@elseif(isset($profile)){{$profile->address}}@endif</textarea>
                                        </div>
                                    </div>


                                </div>
                                <!-- .with_border -->
                            </div>
                            <!-- .col-* -->

                        </div>
                        <!-- .row -->

                        <div class="row flex-row">
                            <div class="col-md-6">
                                <div class="with_border with_padding">

                                    <h4>Security</h4>

                                    <hr>

                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Old password:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('password_old'))
                                                @foreach($errors->get('password_old') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            @if($message['password'] !== null)
                                                {{ $message['password'] }}
                                                @endif
                                            <input type="password" name="password_old" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">New password:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('password'))
                                                @foreach($errors->get('password') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <input type="password" name="password" value="{{$data['password']}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Repeat New password:</label>
                                        <div class="col-lg-9">
                                            @if($errors !== null && $errors->has('password_confirmation'))
                                                @foreach($errors->get('password_confirmation') as $error)
                                                    {{ $error }}<br>
                                                @endforeach
                                            @endif
                                            <input type="password" value="{{$data['password_confirmation']}}" name="password_confirmation" class="form-control">
                                        </div>
                                    </div>


                                </div>
                                <!-- .with_border -->

                            </div>
                            <!-- .col-* -->
                            <div class="col-md-6">
                                <div class="with_border with_padding">

                                    <h4>Social Networks</h4>

                                    <hr>

                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">FaceBook:</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="facebook" value="@if(isset($data['facebook'])){{$data['facebook']}}@elseif(isset($profile)){{$profile->facebook}}@endif" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Twitter:</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="twitter" value="@if(isset($data['twitter'])){{$data['twitter']}}@elseif(isset($profile)){{$profile->twitter}}@endif" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">LinkedIn:</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="linkedln" value="@if(isset($data['linkedln'])){{$data['linkedln']}}@elseif(isset($profile)){{$profile->linkedln}}@endif" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Instagram:</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="instagram" value="@if(isset($data['instagram'])){{$data['instagram']}}@elseif(isset($profile)){{$profile->instagram}}@endif" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <!-- .with_border -->
                            </div>
                            <!-- .col-* -->
                        </div>
                        <!-- .row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div>

                                    <button type="submit" class="theme_button wide_button">Submit</button>
                                    <a href="/admin-profile" class="theme_button color2">Cancel</a>

                                </div>

                            </div>

                        </div>
                        <!-- .row -->
                    </form>
                </div>
                <!-- .col-* main column -->

            </div>
            <!-- .row main columns -->
        </div>
        <!-- .container -->
    </section>
@endsection
