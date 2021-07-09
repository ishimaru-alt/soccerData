@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header"><i class="far fa-star"></i>My Favorite Team</div>
                <div class="card-body">
                <div class="card-body">
                        <div class="container">
                            @foreach($teamtableFavorite as $team)
                                <div class="row mt-1">
                                    <div class="col-sm">
                                        <div class="mt-1">
                                        <p>{{$team->teamName}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <form action="{{ route('home.destroy', $team->teamName)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link"><i class="fas fa-times"></i></button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
                    <div class="card-body">
                    <form action="{{ route('home.store')}}" method="POST">
                        @csrf
                        <ul class="nav nav-tabs  justify-content-center">
                        <li  class="nav-item">
                            <a  class="nav-link active" href="#j1" data-toggle="tab">J1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#j2" data-toggle="tab">J2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#j3" data-toggle="tab">J3</a>
                        </li>
                        </ul>
                        <div class="tab-content">
                            <div id="j1" class="tab-pane active">
                                <div class="container">
                                    @foreach($teamtablej1 as $team)
                                        <form action="{{ route('home.store')}}" method="POST">
                                        <!-- CSRF保護 -->
                                        @csrf
                                        <div class="row mt-1">
                                            <div class="col-sm">
                                                <div class="mt-1">
                                                <p>{{$team->teamName}}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <input type="hidden" name="team" value= "{{ $team->teamName }}" >
                                                <button type="submit"><i class="far fa-star"></i></button>
                                            </div>
                                        </div>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                            <div id="j2" class="tab-pane">
                                <div class="container">
                                    @foreach($teamtablej2 as $team)
                                        <div class="row mt-1">
                                            <div class="col-sm">
                                                <div class="mt-1">
                                                    <p>{{$team->teamName}}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <button type="submit" class="btn btn-link"><i class="far fa-star"></i></button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="j3" class="tab-pane">
                                <div class="container">
                                    @foreach($teamtablej3 as $team)
                                        <div class="row mt-1">
                                            <div class="col-sm">
                                                <div class="mt-1">
                                                <p>{{$team->teamName}}</p>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <button type="submit" class="btn btn-link"><i class="far fa-star"></i></button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
