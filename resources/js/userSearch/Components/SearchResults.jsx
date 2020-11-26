import React from 'react';

const SearchResults = (props) => {
  return(
    <div>
      {props.searchResults.map(result => (
        <h2>{result.name}</h2>
      ))}
    </div>
  )
}


export default SearchResults;