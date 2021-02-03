<!-- Popular Locations Start -->
<div class="popular-location section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span>Most visited places</span>
                    <h2>Popular Locations</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($popular_locations as $rs)
            <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-location mb-30">
                        <div class="location-img">
                            <img src="{{Storage::url($rs->image)}}" height="205px" alt="">
                        </div>
                        <div class="location-details">
                            <p>{{$rs->title}}</p>
                            <a href="#" class="location-btn">65 <i class="ti-plus"></i> Location</a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        <!-- More Btn -->
            <div class="row justify-content-center">
                <div class="room-btn pt-20">
                    <a href="{{route('listing')}}" class="btn view-btn1">View All Places</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Locations End -->
</div>
