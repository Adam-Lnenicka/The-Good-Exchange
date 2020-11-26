import React, {useState, useEffect} from 'react';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";


import ShowPost from './ShowPost';

export default function App(){



    return (
  <>
   <Router>


      <Switch> 
        
     
          <Route  exact path="/dashboard" children={<ShowPost />} /> 
         
         
       </Switch> 


     </Router> 

  </> 

); 
}