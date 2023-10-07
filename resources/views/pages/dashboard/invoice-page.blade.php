@extends('layout.sidenav-layout')
@section('content')
    @include('components.invoice.nvoice-list')
    @include('components.invoice.invoice-delete')
    @include('components.invoice.invoice-details')
@endsection
