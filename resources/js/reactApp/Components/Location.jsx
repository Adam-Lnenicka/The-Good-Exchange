import React, {useState, useEffect} from 'react';

export default function Location(){
   
  
  var options = {
    enableHighAccuracy: true,
    timeout: 50,
  };
  
  function success(pos) {
    var crd = pos.coords;

    console.log(crd)
  
    console.log('Your current position is:');
    console.log(`Latitude : ${crd.latitude}`);
    console.log(`Longitude: ${crd.longitude}`);
    console.log(`More or less ${crd.accuracy} meters.`);
  }
  
  function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
  }
  
  navigator.geolocation.getCurrentPosition(success, error, options);



    return (
  <>
  <div></div>
  </>

    );
}