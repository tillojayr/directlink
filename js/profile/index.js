$(function(){
  $(this).scrollTop(0);
  fetchuserProfile();
})

function fetchuserProfile(){
  $.ajax({
    url: "php_scripts/profile/getProfile.php",
    dataType: "json",
    type: "GET",
  }).then(function (data) {
    if(data){
      for (var key in data) {
        if (data.hasOwnProperty(key)) {
            var val = data[key];
            if(key == 'description'){
              $('#'+key).text(val);
            }
            else{
              $('#'+key).val(val);
            }
        }
    }
    }
  });
}

$("#profile_form").submit(function (e) {
    e.preventDefault();
  });
  
  $("#profile_submit_button").click(function () {
    if ($("#profile_form").valid()) {
      Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Saving...',
            html: 'Please wait',
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: () => {
              Swal.showLoading()
            }
          });
          saveProfile($("#profile_form").serialize());
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "", "info");
        }
      });
      
    }
  });
  
  function saveProfile($formData) {
    $.ajax({
      url: "php_scripts/profile/profile.php",
      dataType: "json",
      type: "POST",
      data: $formData,
    }).then(function (response) {
      if(response != false){
        swal.close();
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1500
        }).then((result) => {
          location.reload();
        });
      }
    });
  }