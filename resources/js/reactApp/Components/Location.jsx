import React, {useState, useEffect} from 'react';

export default function Location({handlePosition}){

  var options = {
    enableHighAccuracy: true,
    timeout: 50,
  };

  function success(pos) {
    

  const  lat =  pos.coords.latitude;
  const  lng =  pos.coords.longitude;


  handlePosition(lat, lng);
   console.log(lat);
   console.log(lng);
  
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