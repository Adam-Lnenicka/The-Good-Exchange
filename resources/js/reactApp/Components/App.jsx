import React, {useState, useEffect} from 'react';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";



import PostForm from './PostForm';



export default function App(){



    return (
  <>
  {/* <Router>


      <Switch> */}
        
           {/* <Route path="/createpost" children={<PostForm />} />
           <Route path="/newpost" children={<ShowPost />} /> */}
          

           <PostForm  />


<<<<<<< HEAD
      {/* </Switch>
=======
          <Route  exact path="/dashboard" children={<ShowPost />} /> 
          <Route  exact path="/newpost" children={<PostForm />} />
         
       </Switch>
>>>>>>> b329453e601d3261a7d5ffd7f04845ab2cd8d1a6


 </Router> */}
  </>

    );
}