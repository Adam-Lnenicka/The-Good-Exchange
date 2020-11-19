import React, {useState, useEffect} from 'react';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";


import ShowPost from './ShowPost';
import PostForm from './PostForm';



export default function App(){



    return (
  <>
  <Router>


      <Switch>

          <Route exact path="/newpost" children={<ShowPost />} /> 
          <Route path="/createpost" children={<PostForm />} />
         
       </Switch>


 </Router> 
  </>

    );
}