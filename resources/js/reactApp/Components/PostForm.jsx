import React, {useState, useEffect} from 'react';

import DragnDrop from './DragnDrop';
import Location from './Location';
import TextContent from './TextContent';



export default function PostForm(){

  
<<<<<<< HEAD
  const [value , setValues] = useState({
    lat :'',
    long:'',
    file: '',
    description: ''
})
=======
   const [value , setValues] = useState({
     lat :'',
     long:'',
     file: '',
     description: ''
 })

>>>>>>> b329453e601d3261a7d5ffd7f04845ab2cd8d1a6
//  -> value of uploaded image ->file[0].path
 const handleChange = (event) => {
    const allowed_values = ['description','lat', 'long','file'],
    uploadedm_photo_path = event.file[0].path,
    description = event.target.value,
    
 }
  
  
  const handleSubmit = (e) => {
    const allowed_fields = [ 'file' , 'text ','location' ],

<<<<<<< HEAD

  }
=======
  // }
 console.log(value);
>>>>>>> b329453e601d3261a7d5ffd7f04845ab2cd8d1a6

    return (
  <>

        <form className=" flex-1" action="" method="post" encType="multipart/form-data">
               
              <Location handlePosition={ (lat, lng) => { setValues({latitude: lat, longitude: lng}) } }/>
              <DragnDrop  handleFile={ (file) => { setValues({ uploadFile: file }) } }/>
              <TextContent />
              
          
          <br/>  
          
        <button className="bg-purple-400 m-3 w-11/12 p-2 rounded-xl ring-pink-100 " type="submit" value="submit"  onSubmit={}> Post </button>
        
        </form>
        
  </>

    );
}