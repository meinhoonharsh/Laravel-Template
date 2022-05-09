<div class="card mb-3 free-card" style="max-width: 540px">
    <div class="row g-0">
        <div class="col-md-5 bg-image hover-overlay ripple" style="background-image:url( {{ asset('storage/app/public/walls/'.$wall->image) }});min-height:200px;" data-mdb-ripple-color="light"></div>
        <div class="col-md-7">
            <div class="card-body">
            <h5 class="card-title text-primary">{{ $wall->name }}</h5>
            <p class="card-text" style="font-size:80%;">
                <h6 class="text-dark">₹{{ $wall->price }}/month</h6>
                <strong>Location: </strong>{{ $wall->address }}<br/>
                <strong>Footfall: </strong>
                @if( $wall->price == 500 )
                    Upto 500
                @elseif( $wall->price == 1000 )
                    500 to 1000
                @elseif( $wall->price == 1500 )
                    1000 to 1500
                @elseif( $wall->price == 2000 )
                    1500 to 2000
                @elseif( $wall->price == 2500 )
                    2500+
                @endif
                <br/>
                <strong>Categories: </strong>
                @foreach($wallcat as $wallcatkey)
                    @if($wallcatkey->wall_id ==  $wall->id)
                        @if( $wallcatkey->category == "standee")
                            Standee
                        @elseif( $wallcatkey->category == "staticbillboard")
                            Static Billboard
                        @elseif( $wallcatkey->category == "digitalbillboard")
                            Digital Billboard
                        @elseif( $wallcatkey->category == "mobilebillboard")
                            Mobile Billboard
                        @elseif( $wallcatkey->category == "hoarding")
                            Hoarding
                        @elseif( $wallcatkey->category == "scaffoldwraps")
                            Scaffold Wraps
                        @elseif( $wallcatkey->category == "buildingwraps")
                            Building Wraps
                        @elseif( $wallcatkey->category == "liftgraphics")
                            Lift Graphics
                        @elseif( $wallcatkey->category == "floorgraphics")
                            Floor Graphics
                        @elseif( $wallcatkey->category == "mallmedia")
                            Mall Media
                        @elseif( $wallcatkey->category == "counterdisplaystands")
                            Counter Display Stands
                        @elseif( $wallcatkey->category == "advertsabovecontainer")
                            Adverts Above Container
                        @elseif( $wallcatkey->category == "bus")
                            Bus Advertisement
                        @elseif( $wallcatkey->category == "van")
                            Vans Advertisement
                        @elseif( $wallcatkey->category == "cab")
                            Cabs Advertisement
                        @elseif( $wallcatkey->category == "parking")
                            Parking Advertisement
                        @elseif( $wallcatkey->category == "garden")
                            Garden Advertisement
			            @endif
                    @endif
                @endforeach
            </p>
            <p class="card-text justify-content-end d-flex">
                <a class="text-primary" href="{{ route('wall',[$wall->slug]) }}">Know More</a>
            </p>
            </div>
        </div>
    </div>
</div>