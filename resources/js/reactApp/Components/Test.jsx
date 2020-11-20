import React, { Component } from "react";
import { Map, GoogleApiWrapper, Marker  } from 'google-maps-react';

const mapStyles = {
  width: '100%',
  height: '100%'
};

export default function ShowLocation(props){
       const [ location , setLocation] = useState([]);


       return (
        <div>
          <Map
            google={this.props.google}
            zoom={14}
            style={mapStyles}
            initialCenter={{
              lat: YOUR_LATITUDE,
              lng: YOUR_LONGITUDE
            }}
          >
           <Marker
            onClick={data.onMarkerClick}
            name={'This is test name'}
          />
          </Map>
        </div>
      );
    }


export default GoogleApiWrapper({
  apiKey: 'AIzaSyAZUsMAE6-pDVlWR_vyGJj-N_B_0HLFoks'
})(ShowLocation);

// My apiKey: AIzaSyAZUsMAE6-pDVlWR_vyGJj-N_B_0HLFoks