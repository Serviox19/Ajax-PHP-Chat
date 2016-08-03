$(document).ready(function(){
  $('#submit').on('click', function() {
      var name = $('#name').val();
      var message = $('#message').val();
      var date = getDate();
      var dataString = 'name=' + name + '&message=' + message + '&date=' + date;

      //Validation
      if (name == '' || message == '') {
        alert('Please fill in All Fields');
      } else {
        $.ajax({
          type: "POST",
          url: '../chat.php',
          data: dataString,
          cache: false,
          success: function (html) {
            $('#chats ul').prepend(html);
          }
        })
      }

      return false;

      // console.log(dataString);
  });
});

//date fuction and formatter
function getDate() {
  var date;
  date = new Date;
  date = date.getUTCFullYear() + '-' +
    ('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
    ('00' + date.getUTCDate()).slice(-2) + ' ' +
    ('00' + date.getUTCHours()).slice(-2) + ':' +
    ('00' + date.getUTCMinutes()).slice(-2) + ':' +
    ('00' + date.getUTCSeconds()).slice(-2);
  return date;
}
