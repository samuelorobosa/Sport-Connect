$(function() {
    $('form').submit(function(e) {
  
      //prevent default form submission
      e.preventDefault();
  
     //ajax form submission
        $.ajax({
            type: 'POST',
            url: 'form.php',
            data: $(this).serialize(),
            success: (message) => {
             // add an action to be carried out when submission is successful
             document.querySelector('#email').value = '';
              swal("Good job!","Registration successful", "success");
            },
            // add an action to be carried out when submission is successful
            error: (error) => {
              swal("Couldn't register, try again","error")
            }
        })
    }); 
  })