import React, {useState, useEffect, useCallback} from 'react';
import axios from 'axios';

import DragnDrop from './DragnDrop';
import Location from './Location';
import TextContent from './TextContent';

export default function PostForm(){
  const [value , setValues] = useState({
     lat :'',
     long:'',
     file: '',
     description: ''
 })

 function updateText(e){
  setValues({...value , [e.target.name] :e.target.value});
 }

const onDrop = useCallback((acceptedFiles) => {
   acceptedFiles.forEach((file) => {
     const reader = new FileReader()
    reader.onabort = () => console.log('file reading was aborted')
      reader.onerror = () => console.log('file reading has failed')
       reader.onload = () => {
       // Do whatever you want with the file contents
        const binaryStr = reader.result
         console.log(binaryStr)
       }
      reader.readAsArrayBuffer(file)
   })
},[])
 //-> value of uploaded image ->file[0].path


 const handleSubmit = (e) => {
   e.preventDefault();
   await fetch('/sanctum/csrf-cookie');
   let crsf_token = browser.cookies.get()

  const response = await fetch('.//localhost:3000/api',{
     method: 'post',
    body: JSON.stringify(values),
    headers: {
       'Accept' : 'application/json',
      'Content-type':'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
     }
   })

  //    const reponse_data = await response.json();
    
  //     await axios.post('http://localhost:3000/api', {

     
  //   })
  //    .then(function (response) {
  //       handle success
  //     })
  //    .catch(function (error) {
  //     handle error
  //  });

}
 

   return (
 <>
      <form className=" flex-1" onSubmit={} action="/dashboard" method="post" id="post-form" encType="multipart/form-data">
               
               <Location 
               handlePosition={ (lat, lng) => { setValues({lat: lat, long: lng}) } 
               }/>  

             <DragnDrop  handleFile={ onDrop }

                /> 


                <TextContent />
              
        <br/>  
          
       <button className="bg-purple-400 m-3 w-11/12 p-2 rounded-xl ring-pink-100 " type="submit" value="submit" > Post </button>
        
      </form>
        
 </>

  );
   
//     // out function on submit button -  onSubmit={}
 }