import React from 'react';

const SearchResults = (props) => {
  return(
    <div>
      {props.searchResults.map(result => (
      <div className ="userInfo" >
        <div className="picture"><img src={result.profile_photo_path}></img></div>
        <p>{result.name}</p>
        <p><a class="link" href="users">{result.hopefuls_helpmates}</a></p>
        <p>{result.handy_points}</p>
        <p>{result.service}</p>
        <p>{result.email}</p>
      </div>
      ))}

    </div>
  )
}


export default SearchResults;
