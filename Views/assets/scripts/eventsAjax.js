$('#indexAjax').on('click','.edit', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        showModal(url);
    });

    $('#indexAjax').on('click', '.confirmation', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var result = confirm('Are you sure you want do delete this record ?');
        if( result ) {
            $.ajax({
              url: url,
              type:'GET',
              success: function(dt){
                loadPage('index_ajax.php',$('#indexAjax'));
                $('.message').html(`<div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>Deleted Successfully.</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times; </span>
                          </button>
                        </div>`);
              },
              error: function(){
                alert('Error deleting');
              }
            });
        }
    });
$('#EditModal').on('submit','form', function(e) {
       e.preventDefault();
       var formData = $(this).serialize();
       var action = $(this).attr('action');
       submitForm(action, formData);
       $('.message').html(`<div class="alert alert-success alert-dismissable fade show" role="alert">
                        <strong>Saved Successfully.</stong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"> &times; </span>
                          </button>
                        </div>`);
    });