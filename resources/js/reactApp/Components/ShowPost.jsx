import React, {useState, useEffect} from 'react';



export default function ShowPost(){
 const { values , setValues } = useState({
    image: '',
    lat :'',
    long :'',
    cost: '',
    service_category : '',
    description : '',

 });


}

 const fetchPost =  async () =>{
    const response = await fetch('http://localhost:3000/api');
    setValues({

    })

}


export default function ShowPost(){
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