const getCookie = function (name) {
  var value = '; ' + document.cookie;
  var parts = value.split('; ' + name + '=');
  if (parts.length == 2) return parts.pop().split(';').shift();
};

export default getCookie;

// Example
// var cookieVal = getCookie('sandwich'); // returns "turkey"
