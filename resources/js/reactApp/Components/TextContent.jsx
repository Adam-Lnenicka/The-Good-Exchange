import React, {useState, useEffect} from 'react';



export default function TextContent({props , description}){

    const textfield = document.querySelector("textarea");

    return (
        <>
           <textarea 
                    form="post-form"
                    onChange={(e) => props.onChange(e.textfield.value)}
                    cols="20" wrap="hard" 
                    placeholder="Insert description here "
                    className="bg-orange-200 rounded-lg h-20 w-11/12 mx-3 break-words text-center pr-2" >  

           </textarea>
           
        </>
    );

  
}