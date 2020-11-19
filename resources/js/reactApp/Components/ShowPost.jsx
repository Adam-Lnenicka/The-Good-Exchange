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

// let content = '';

//     if (loading) {
//         content = (
//             <div className="message">
//                 <div className="loader"><div></div><div></div><div></div><div></div></div>
//                 Loading
//             </div>
//         )
//     } else if (loaded) {
//         content = (
//             <>
//                 <ul>
//                     {
//                         data.map(user_post => (
//                             <li key={ user_post.id }>
                             
//                              { user_post.helpmate}
//                             </li>
//                         ))
//                     }
//                 </ul>
//             </>
//         )
//     }

   return (
  <>
{/* <div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           
           <img src="{}" alt=""/>  

   <div>{}{}</div>

            <div>{text}</div>

            <a href="">Send a message</a>
        </div>
    </div>
</div>  */}
 show me 



  </>

    );
}