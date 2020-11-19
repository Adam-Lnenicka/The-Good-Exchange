import React, {useState, useEffect} from 'react';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";


import ShowPost from './ShowPost';
import PostForm from './PostForm';



export default function App(){



    return (
  <>
  <Router>


      <Switch>
        
          {/* <Route path="/createpost" children={<PostForm />} />
          <Route path="/newpost" children={<ShowPost />} /> */}
          

          <ShowPost />
       </Switch>


 </Router> 
  </>

    );
}