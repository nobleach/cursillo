@extends('layouts.app')

@section('content')
<h1>You have successfully submitted your Pilgrim Application!</h1>
<h3>Someone will contact you shortly!</h3>
<strong>Sponsor name:</strong> {{ $success_data->fullname }}
<strong>Pilgrim first name:</strong> {{ $success_data->firstname }}
<strong>Pilgrim email:</strong> {{ $success_data->email }}

@endsection
