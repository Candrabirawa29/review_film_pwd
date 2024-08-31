'use strict';

const api_key = '9370a83e3e0bf7ffd664a63fbb69a913';
const imageBaseURL = 'https://image.tmdb.org/t/p/';


const fetchDataFromServer = function (url, callback, optionalParam) {
    fetch(url)
    .then(response => response.json())
    .then(data => callback(data, optionalParam));
}

export { imageBaseURL, api_key, fetchDataFromServer };