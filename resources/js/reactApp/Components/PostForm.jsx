import React, {useState, useEffect} from 'react';

import DragnDrop from './DragnDrop';
import Location from './Location';
import TextContent from './TextContent';



export default function PostForm(){
  const [values, setValues] = useState({
     uploadFile: '',
     text: '',
     location:'',
  });
   

  const handleSubmit = (e) => {

  }

    return (
  <>

  <form action="" method="post">




  </form>

  </>

    );
}