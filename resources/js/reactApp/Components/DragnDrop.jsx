import React, {useState, useEffect, useCallback} from 'react';
import Dropzone, {useDropzone} from 'react-dropzone';




export default function DragnDrop({handleFile , onDrop }){

  
  const {acceptedFiles, getRootProps, getInputProps} = useDropzone();


  

  // files is the name of the target in the event so that is why you console.log files to check


const Getfile =(e) => {
  console.log(e.target.file[0]);
}

// In this example I used dropzone wrapper and put the on Drop function within the Dropzone component.
// The entire component is also wrapped in curly brackets . 

return (
              <>
       <Dropzone onDrop={acceptedFiles => console.log(acceptedFiles)} >
                {({getRootProps, getInputProps}) => (
                  <section className="container mt-3  mb-3 border-dashed border-gray-400  ">


                               
                                      <div className="h-20 w-11/12 mx-3 pr-6"
                                        {...getRootProps({
                                          onDrop: event => event.preventDefault()

                                         
                                        })}
                                      >
                                        <svg className="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                                        </svg>


<<<<<<< HEAD
                                              {/* This get =>  getInputProps must be  in the input tag  */}
                                                <input type="file"  name="uploadedm_photo_path" value={ } {...getInputProps()}  />
=======
                                              
                                                <input type="file" value="value" name="uploadedm_photo_path" {...getInputProps()}  />
>>>>>>> 2ec8ef3247fe821b567fadb7c8d960ffb2eae49b
                                                <p class="text-center">Click or Drag 'n' Drop images </p>
         
                                      </div>
                </section>
              )}
      </Dropzone>
            
              </>

                );
            }


         /*  comments ------------------------
        

          {/* 
            1.This in a way setting the State is also wrapped around the entire component 
            
            2.The div below has the rootprops and is set to prevent the default action of opening another window 
            
            3.This get =>  getInputProps must be  in the input tag  
        
         */