@extends('layouts.app')
@section('content')
<div class="py-12">
    
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
        <div id="app"></div>


       
       
                    <script src="{{asset('js/search.js')}}"></script>
        
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZUsMAE6-pDVlWR_vyGJj-N_B_0HLFoks&callback=initMap"
                    type="text/javascript"></script>
                </div>
   
</div>
@endsection