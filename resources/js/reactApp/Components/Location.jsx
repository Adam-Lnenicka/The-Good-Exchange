import React, {useState, useEffect} from 'react';

export default function Location(props){
   
   
  
  var options = {
    enableHighAccuracy: true,
    timeout: 50,
  };


  
  function success(pos) {
    

  const  lat =  pos.GeolocationCoordinates.latitude;
   const long =  pos.GeolocationCoordinates.longitude;

   console.log(lat);
   console.log(long);
  
    
  }
  
  function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
  }
  
  navigator.geolocation.getCurrentPosition(success, error, options);



    return (
  <>
 
  </>

    );
}