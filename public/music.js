// Grabs user name from the getUser route
 console.log('Hello');

$.ajax({
 url: '/goldenMusic/index.php/main',
 method: 'get',
 success: function(data){
   console.log(data);
 }
});