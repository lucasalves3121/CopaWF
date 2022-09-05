@extends('layouts.main')

@section('title','Imagens    | Copa Wesley Ferreira')

@section("content")
<div class="container-fluid pb-video-container">
    <div class="col-md-10 offset-md-1">
        <h3 class="text-xs-center">Videos | Copa Wesley Ferreira</h3>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
            <iframe class="pb-video-frame" width="100%" height="230"  src="https://www.youtube.com/embed/nd-86bHzrNQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Homenagem | Copa WF</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/wjT2JVlUFY4?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Manuel Riva - Mhm Mhm</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/papuvlVeZg8?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Clean Bandit - Rockabye</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Y1_VsyLAGuk?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Burak Yeter - Tuesday</label>
            </div>
        </div>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/UY1bt8ilps4?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">F.O. and Peeva - Lichnata</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/QpbQ4I3Eidg?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Machine Gun - Bad Things</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/h3kRIxLruDs?ecver=" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">INNA - Say it with your body</label>
            </div>
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Jr4TMIU9oQ4?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">INNA - Gimme Gimme</label>
            </div>
        </div>
    </div>
</div>

<style>
    .pb-video-container {
        padding-top: 20px;
        background: #fff;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>
@endsection