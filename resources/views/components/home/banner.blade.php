<div style="background-image: url( {{ $data['data'][0]['image'] }} )" id="banner">

    <div class="row">
        <div class="col-md-6 animate__animated animate__fadeIn">
            <div class="title-banner">
                <h1>{{ $data['data'][0]['title'] }}</h1>
            </div>
            <div class="description-banner">
                <div class="col-md-10">
                    <h2>{{ $data['data'][0]['description'] }}</h2>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">
            @include('components.home.contact')
        </div>
    </div>


</div>