@extends('layouts.app')
@section('home')
    <div class="container vh-100 p-5 mt-5">
        <div class="content text-center border border-success rounded-2 p-3">
            <P>LAST MINUTE</P>
            <a href="{{ route('trains') }}">
                <p>Treni in partenza oggi</p>
            </a>
        </div>

    </div>
@endsection
