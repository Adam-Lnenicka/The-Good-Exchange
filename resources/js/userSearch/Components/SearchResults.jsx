import React from 'react';

const SearchResults = (props) => {
  return(
    <div>
      {props.searchResults.map(result => (
        <h2>{result.title}</h2>
      ))}
    </div>
  )
}


export default SearchResults;