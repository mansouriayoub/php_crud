function showModal(url) {
        $.ajax({
          url: url,
          type:'GET',
          success: function(dt){
            $('#EditModal .modal-content').html(dt);
            $('#EditModal').modal('show');
          },
          error: function(){
            alert('Page not found');
          }
        });
    }

    loadPage('index_ajax.php',$('#indexAjax'));

    function loadPage(url,element) {
        $.ajax({
          url: url,
          type:'GET',
          success: function(dt){
            element.html(dt);
          },
          error: function(){
            alert('Page not found');
          }
        });
    }

    function submitForm(url,formData) {
        $.ajax({
          url: url,
          type:'POST',
          data:formData,
          success: function(dt){
            $('#EditModal').modal('hide');
            loadPage('index_ajax.php',$('#indexAjax'));
          },
          error: function(){
            alert('Error saving data');
          }
        });
    }