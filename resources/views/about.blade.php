<x-home.index-master>
    @section('content')
    <section class="bg blog-cover">
        <div class="container">
            <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
                <h5 class="text-capitalize alt-font text-white margin-20px-bottom font-weight-700">
                    About Us</h5>

                <div class="page_nav">
                    <span class="text-white"></span> <a href="index.html" class="text-white">Home</a> <span class="text-white"><i class="fa fa-angle-double-right"></i> About</span>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="position-relative" style="padding:40px;">
        <div class="container">
            <div class="row">
                <div class="half-section-left sm-display-none" aria-hidden="true">
                    <img src="{{asset('img/planets-solar-system.jpg')}}" alt="image">
                </div>

                <div class="col-md-6 col-sm-12 float-right sm-text-center sm-float-none">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="team-quote margin-50px-bottom padding-20px-lr">
                                <h4 class="area-title alt-font text-dark-gray margin-20px-bottom font-weight-300 sm-width-100 xs-width-100">
                                    We <span class="text-red font-weight-500">love</span> what we do<br>& we do it with <span
                                        class="text-blue font-weight-500">passion!</span></h4>
                                        <p class="xs-margin-lr-auto margin-20px-bottom" style="text-align: justify;">Delspace Consult in partnership with Defence Space Administration is to organize a 3-day Satellite Capabilities Conference to draw attention of various experts and stakeholders to capabilities, products and services available with the recently launched Earth Observation Satellite and highlight areas of possible collaboration. Speakers and attendees for the Conference will include notable individuals in the Space industry, public and private sectors and academia from all over the world. A total of 6 papers would be presented during the Conference.
                                        </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @endsection
</x-home.index-master>
