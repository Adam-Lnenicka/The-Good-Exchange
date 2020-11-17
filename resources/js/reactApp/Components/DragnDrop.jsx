import React, {useState, useEffect, useCallback} from 'react';
import Dropzone, {useDropzone} from 'react-dropzone';




export default function DragnDrop(){
  const {acceptedFiles, getRootProps, getInputProps} = useDropzone();

  //files is the name of the target in the event so that is why you console.log files to check
const test =( files) => {
  console.log(files)
}

// In this example I used dropzone wrapper and put the on Drop function within the Dropzone component.
//The entire component is also wrapped in curly brackets . 
   
return (
              <>
       <Dropzone onDrop={test }>

            {/* This in a way setting the State is also wrapped around the entire component  */}
                {({getRootProps, getInputProps}) => (
                  <div className="container">


                               {/* The div below has the rootprops and is set to prevent the default action of opening another window */}
                                      <div
                                        {...getRootProps({
                                          onDrop: event => event.preventDefault()
                                        })}
                                      >

                                              {/* This get =>  getInputProps must be  in the input tag  */}
                                                <input {...getInputProps()} />
                                                <p>Drag 'n' drop some files here, or click to select files</p>

                                                
                                      </div>

                </div>
              )}
      </Dropzone>
            
              </>

                );
            }