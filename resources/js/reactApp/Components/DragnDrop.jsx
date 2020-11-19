import React, {useState, useEffect, useCallback} from 'react';
import Dropzone, {useDropzone} from 'react-dropzone';




export default function DragnDrop({handleChange ,}){

  
  const {acceptedFiles, getRootProps, getInputProps} = useDropzone();

  //files is the name of the target in the event so that is why you console.log files to check
// const test =( files) => {
//   const uploaded_file = files.name.value; 
//   setImage(uploaded_file);


//   console.log(uploaded_file);

// }

// In this example I used dropzone wrapper and put the on Drop function within the Dropzone component.
//The entire component is also wrapped in curly brackets . 
   
return (
              <>
       <Dropzone onDrop={onChange }>

            {/* This in a way setting the State is also wrapped around the entire component  */}
                {({getRootProps, getInputProps}) => (
                  <div className="container mt-3  mb-3 border-dashed border-gray-400  ">


                               {/* The div below has the rootprops and is set to prevent the default action of opening another window */}
                                      <div className="h-20 w-11/12 mx-3 pr-6"
                                        {...getRootProps({
                                          onDrop: event => event.preventDefault()
                                         
                                        })}
                                      >
                                        <svg className="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                                        </svg>


                                              {/* This get =>  getInputProps must be  in the input tag  */}
                                                <input type="image"  name="uploadedm_photo_path" value={image.uploadedm_photo_path} {...getInputProps()}  />
                                                <p class="text-center">Click or Drag 'n' Drop images </p>

                                                
                                      </div>

                </div>
              )}
      </Dropzone>
            
              </>

                );
            }