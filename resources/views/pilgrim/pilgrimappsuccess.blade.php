@extends('layouts.app')

@section('content')
<h1>You have successfully submitted your Pilgrim Application!</h1>
<h3>Someone will contact you shortly!</h3>
<strong>Pilgrim name:</strong> {{ $pilgrimInfo->firstname }} {{ $pilgrimInfo->lastname }}
@endsection
