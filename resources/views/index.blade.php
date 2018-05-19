@extends('outline')

@section('body')

    <div class="row center-block">
        <div class="col-xs-12 panel">
            <div class="wood-border">
                <h1 class="text-center">Stardew Valley Helpers</h1>
                <h4 class="text-center">For Stardew Valley v1.2</h4>
            </div>
        </div>
    </div>

    <div class="row center-block">
        <ul class="nav nav-tabs" role="tablist" id="navigation">
            <li class="col-xs-12 col-sm-4 active">
                <a href="#calendar" data-toggle="tab">
                    Villager Calendar
                </a>
            </li>
            <li class="col-xs-12 col-sm-4">
                <a href="#artifact" data-toggle="tab">
                    Artifact Finder
                </a>
            </li>
            <li class="col-xs-12 col-sm-4">
                <a href="#forage" data-toggle="tab">
                    Forage Finder
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="calendar">
            @include('calendar')
        </div>
        <div role="tabpanel" class="tab-pane" id="artifact">
            @include('artifact')
        </div>
        <div role="tabpanel" class="tab-pane" id="forage">
            @include('forage')
        </div>
    </div>

    <div class="row center-block panel text-center">
        <div class="wood-border text-muted">
            Currently working for Stardew Valley v1.2 (the currently released version at time of writing). v1.3 update
            will come when it is released.
            <br />
            Huge thanks to <a href="http://upload.farm">upload.farm</a> for allowing me to use their bootstrap theme
            <br />
            All Stardew Valley assets copyright <a href="http://twitter.com/concernedape">Concerned Ape</a>
        </div>
    </div>

@endsection