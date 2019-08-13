@extends('layouts.app')

@section('title', 'Edit Officer')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Top Officers</h1>
            </div>
            <ul class="app-breadcrumb list-unstyled">
                <li class="breadcrumb-item h5 font-italic pt-2">{{date('l  F jS, Y')}}</li>
            </ul>
        </div>
        <div class="app-title1">
            @include('layouts.includes.messages')
        </div>
    </main>
    <main class="app-content1 ">
                <div class="card">
                    <div class="card-header h4 text-dark">Edit Officer Information</div>
                    <div class="card-body">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('officer/update/'.$user->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Full Name*</label>
                                <input class="form-control" type="text" name="name" value="{{$user->name}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Employee Code*</label>
                                <input class="form-control" type="text" name="reg_number" value="{{$user->reg_number}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Serial Code*</label>
                                <input class="form-control" type="text" name="code" value="{{$user->code}}" required>
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label d-block h6">Gender</label>
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="gender" value="Male" @if($user->gender == 'Male') checked @endif required>Male
                                </label>
                                </div> 
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="gender" value="Female" @if($user->gender == 'Female') checked @endif required>Female
                                </label>
                                </div>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="h6" for="class">Occupation</label>
                                <select class="form-control" name="occupation" id="class" required>
                                    <option value="{{$user->occupation}}">{{$user->occupation}}</option>
                                    <option value="Headmaster">Headmaster</option>
                                    <option value="Headmistress">Headmistress</option>
                                    <option value="Vice Headmaster">Vice Headmaster</option>
                                    <option value="Vice Headmistress">Vice Headmistress</option>
                                    <option value="Bursor">Bursor</option>
                                </select>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="h6" for="class">Teaching Subject</label>
                                <select class="form-control" name="subject" id="class" required>
                                    <option value="{{$user->subject}}">{{$user->subject}}</option>
                                    @foreach ($subjects as $subject)
                                        <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="h6" for="level">Education Level</label>
                                <select class="form-control" name="level" id="level" required>
                                    <option value="{{$user->level}}">{{$user->level}}</option>
                                    <option value="Certificate in Nursery Schools">Certificate in Nursery Schools</option>
                                    <option value="Certificate in Primary Education">Certificate in Primary Education</option>
                                    <option value="Diploma in Secondary School">Diploma in Secondary School</option>
                                    <option value="Degree">Degree</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Email Address*</label>
                            <input class="form-control" type="email" name="email" value="{{$user->email}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Passport size (<em>Less than 2MB</em>)</label>
                                <input class="form-control-file" type="file" name="cover_image">
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Phone Number*</label>
                                <input class="form-control" type="tel" name="phone" value="{{$user->phone}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Salary (Amount in Tshs)*</label>
                                <input class="form-control" type="number" name="salary" value="{{$user->salary}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Date of birth*</label>
                                <input class="form-control demoDate"  type="text" name="date_of_birth" value="{{$user->date_of_birth}}"  required>
                            </div>
                            </div>
                        </div>
                            <input type="hidden" name="role_id" value="2">
                            <a href="{{\Illuminate\Support\Facades\URL::to('/officer')}}" class="btn btn-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg m-auto">Submit</button>
                        </form>
                    </div>
                </div>
    </main>

@endsection