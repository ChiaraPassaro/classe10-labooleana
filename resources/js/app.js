require('./bootstrap');

$(document).ready(function () {
  // $.ajax({
  //   'url': '/api/tags',
  //   'method' : 'POST',
  //   'headers' : {
  //     'authorization' : 'Bearer Pippo?123'
  //   },
  //   'success': function (response) {
  //     console.log(response);
  //   },
  //   'error': function (errors) {
  //     console.log(errors); 
  //   }
  // });

  axios( {
      'method': 'POST',
      'url': '/api/tags',
      'headers': {
              'Authorization': 'Bearer Pippo?123'
          },
        }
      )
      .then(function (response) {
          // handle success
          console.log(response);
      })
      .catch(function (error) {
          // handle error
          console.log(error);
      });
});