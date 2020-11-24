import React, {useState, useEffect} from 'react';


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
            <div className="message">
                <div className="animate-spin">
                <svg className="animate-spin h-1 w-1 mr-3 ..." viewBox="0 0 24 24">
                </svg>
                Loading
                </div>
            </div>
        )
    } else if (loaded) {
        content = (
            <>
                {
                  data.map(id => (
                    <div  className="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2.5 m-2.5" key={id.id}>
                    <img className=""  src={id.uploadedm_photo_path} alt="profile pic"/>
                    <div className=" p-2.5" >{id.description}</div>
                     <span className="">Cost:{id.cost}</span>  
                     <br/>
                     <div>maplocation</div>
                     <a className=" bg-purple-600 -m-2mt-8 h-10 ml-2 px-2 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-purple-600 focus:outline-none focus:text-black focus:bg-purple-400 transition duration-150 ease-in-out"href="/users/create
                     ">Send a message</a> 
                    </div>
                  ))

                  })
                
            </>
        )
    }

   return (
  <>
  <div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
           <img src="{}" alt=""/>  

           <div>location</div>

            <div>{text}</div>

            <a href="">Send a message</a>
        </div>
    </div>
</div>

  </>

    );
}