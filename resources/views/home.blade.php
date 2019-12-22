@extends('layouts.master')

{{-- css --}}
@section('active_home')
   wcrlo-active
@endsection

@section('content')
   @include('components.bannerCarousel')

   <section class="wcrlo-section wcrlo-section-2">
      <div class="container-fluid">
         <div class="row">
            <div class="col text-center mb-5  wcrlo-animate2">
               <h3>HOW YOU CAN HELP</h3>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 wcrlo-animate2 text-center">
               <div class="media text-left">
                     <div class="icon"><i class="flaticon-donation-1"></i></div>
                     <div class="media-body p-2">
                        <h3 class="heading">Donation</h3>
                        <p>
                           Do you want to make a donation?
                        </p>
                        
                     </div>
               </div>
               <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Click Here</a></p> 
            </div>
            <div class="col-md-6 wcrlo-animate2 text-center">
               <div class="media text-left">
                     <div class="icon"><i class="flaticon-charity"></i></div>
                     <div class="media-body p-1">
                        <h3 class="heading">Volunteer</h3>
                        <p>
                           you can also give your time and efforts to the cause
                        </p>
                     </div>
               </div>
               <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Become A Volunteer</a></p>     
            </div>
            <div class="col-md-6 wcrlo-animate2 text-center">
               <div class="media text-left">
                     <div class="icon"><i class="flaticon-donation"></i></div>
                     <div class="media-body p-1">
                        <h3 class="heading">WCRLO Fund-raiser</h3>
                        <p>
                           Fund-raiser for the advancement of women & children
                        </p>
                     </div>
               </div>
               <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Be a WCRLO Fund-raiser</a></p>
         </div>
         <div class="col-md-6 wcrlo-animate2 text-center">
            <div class="media text-left">
                  <div class="icon"><i class="flaticon-donation"></i></div>
                  <div class="media-body p-1">
                     <h3 class="heading">Crowfunding</h3>
                     <p>
                        Raise small amounts of money from large number of people
                     </p>
                  </div>
            </div>
            <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Click Here</a></p>
      </div>
       </div>
      </div>
   </section>

   @include('components.objective_action_point')
@endsection