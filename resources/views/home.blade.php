@extends('layouts.master')

@section('content')
   @include('components.bannerCarousel')

   <section class="wcrlo-section">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-4 wcrlo-animate2">
               <div class="media">
                     <div class="icon"><i class="flaticon-donation-1"></i></div>
                     <div class="media-body">
                        <h3 class="heading">Make Donation</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Make Donation</a></p>
                     </div>
               </div>     
            </div>
            <div class="col-md-4 wcrlo-animate2">
               <div class="media">
                     <div class="icon"><i class="flaticon-charity"></i></div>
                     <div class="media-body">
                        <h3 class="heading">Become A Volunteer</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Become A Volunteer</a></p>
                     </div>
               </div>      
            </div>
            <div class="col-md-4 wcrlo-animate2">
               <div class="media">
                     <div class="icon"><i class="flaticon-donation"></i></div>
                     <div class="media-body">
                        <h3 class="heading">Sponsorship</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Sponsorship</a></p>
                     </div>
               </div>    
         </div>
       </div>
      </div>
   </section>
@endsection