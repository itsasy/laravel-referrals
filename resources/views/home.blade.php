@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <div>
                            <strong>My referral is:</strong> {{$referred_by}}
                        </div>

                        <div>
                            <strong>Your code is:</strong> <a href="{{$referral_link}}">{{$referral_code}}</a>
                        </div>

                        <div class="mt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="row">Referral Code</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($referrals as $referral)
                                    <tr>
                                        <th scope="row">
                                            {{$referral->referral_code}}
                                        </th>
                                        <td>
                                            {{$referral->name}}
                                        </td>
                                        <td>
                                            {{$referral->email}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
