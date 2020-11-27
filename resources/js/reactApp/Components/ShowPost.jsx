import React, {useState, useEffect} from 'react';

import SimpleMap from './SimpleMap.jsx';
import '../../../css/app.css';
import Marker from './Marker';


export default function ShowPost(props){
  const [{loading, loaded, data}, setDataState] = useState({
    loading: false,
    
    loaded: false,
    data: null
})

const url = 'http://localhost:3000/api'

const fetchPosts = async () => {
  if (url) {
      setDataState({
          loading: true,
          loaded: false,
          data: null
      });
    const response = await fetch(url);
    const data = await response.json();

    setDataState({
      loading: false,
      loaded: true,
      data: data
  });

  

  } 
}
useEffect(() => {
  fetchPosts();
}, [])

console.log(data);

let content = '';

    if (loading) {
        content = (
            <div >
              <div className="loading">
                <div className="circle"></div>
                <div className="circle"></div>
                <div className="circle"></div>
                <div className="circle"></div>
             </div>

            </div>
        )
    } else if (loaded) {
        content = (
            <>
                {
                  data.map(id => (
                     
                    <div  className="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2.5 m-2.5" key={id.id}>
                    <div className="flex space-x-56  ">
                      <img className="h-14 rounded-2xl mb-2.5 w-14" src={id.user.profile_photo_path} alt="profile pic" />
                      <div>
                      <a className="  mt-2.5 -m-2mt-8 h-10 ml-2 px-2 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white  hover:bg-purple-600 focus:outline-none focus:text-black focus:bg-purple-400 transition duration-150 ease-in-out"
                     href={"/post/" + id.id + "/edit"}>Edit</a>
                      </div>
                    </div>
                    <img className=""  src={id.uploadedm_photo_path} alt="post pic"/>
                    <div className=" p-2.5" >{id.description}</div>
                     <span className="">Cost:{id.cost}</span>  
                     <br/>
                     <SimpleMap/>
                     <Marker
                      lat={id.lat}
                      lng={id.long}
                      text="My Marker"
                    />
                     <a className=" bg-purple-600 mt-2.5 -m-2mt-8 h-10 ml-2 px-2 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-purple-600 focus:outline-none focus:text-black focus:bg-purple-400 transition duration-150 ease-in-out"
                     href={"/post/" + id.id + "/message"}>Send a message</a> 
                    </div>
                  ))

                  })
                
            </>
        )
    }
   return (
  <>
<div className="py-12 ">
    <div className="max-w-xl mx-auto sm:px-6 lg:px-8">
       
           
          {content}
           
        
    </div>
</div>  
  </>
    );
}