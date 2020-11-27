import React, { useEffect, useState } from 'react';
import SearchBar from './Components/SearchBar';
import SearchResults from './Components/SearchResults';

const App = () => {
  // state is created in parent so we can pass it down to children as props
  const [searchValue, setSearchValue] = useState('');
  const [searchResults, setSearchResults] = useState([]);

  // useEffect is hook function that in functional components stands for lifecycle methods, when you pass [] as a 2. parameter to this function it is exactly the same as componentDidMount() in classes.
  // when you pass [value] as a 2. parameter, than this method will be called everytime the value in [] has changed.
  useEffect(() => {
    fetchData();
    console.log(searchResults);
  }, [searchValue])

  const fetchData = async () => {
    const url = 
      "/api/users?search=";
    const response = await fetch(url + searchValue); 

    const data = await response.json();

   
    setSearchResults(data); 
    // }
  
  }

  return (

    <div className="App">
    
      {console.log(searchResults)}
      <SearchBar setSearchValue={setSearchValue} />
      <SearchResults searchValue={searchValue} searchResults={searchResults} />
      
    
    </div>
    
  );
}

export default App;