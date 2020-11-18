import React, {useState, useEffect} from 'react';

import DragnDrop from './DragnDrop';
import Location from './Location';
import TextContent from './TextContent';



export default function PostForm(){
  const [values, setValues] = useState({
      file: '',
      text:'',
      location: '',
  });
   

  const handleSubmit = (e) => {

  }

    return (
  <>

        <form className=" flex-1" action="" method="post" encType="multipart/form-data">

              <DragnDrop />
              <TextContent />
              <Location />
          
          <br/>  
          
        <button className="bg-purple-400 m-3 w-11/12 p-2 rounded-xl ring-pink-100 " type="submit" value="submit" > Post </button>
        
        </form>

  </>

    );
}