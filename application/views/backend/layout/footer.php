
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    
    <!-- Ajax form nilai -->
    <script>
    $(document).ready(function(){
      var row=0;

      $('.btn-plus').click(function(e){
        e.preventDefault();
        row++;
        var html = '<tr id="row'+row+'">';
        html += '<input type="hidden" name="id_nilai[]" class="form-control">';
        html += '<td><input type="text" name="tanggal[]" class="form-control" required value="<?= date('Y-m-d') ?>" readonly/></td>';
        html += '<td><select name="id_kat[]"><option value="">- Pilih -</option><option value="1">Gelombang 1</option><option value="2">Gelombang 2</option><option value="3">Gelombang 3</option><option value="4">Gelombang 4</option><option value="5">Leader</option><option value="6">Ass. Supervisor</option><option value="7">Supervisor</option><option value="8">Admin</option><option value="9">Kasir</option></select></td>';
        html += '<td><input type="text" name="nama_peserta[]" class="form-control" required></td>';
        html += '<td><select name="id_departemen[]"><option value="">- Pilih -</option><option value="1">CW1</option><option value="2">CW2</option><option value="3">CW3</option><option value="4">CW4</option><option value="5">CW5</option><option value="6">CW6</option><option value="7">CW7</option><option value="8">CW8</option><option value="9">CW9</option><option value="10">CW10</option><option value="11">CW11</option><option value="12">CW12</option><option value="13">CW13</option><option value="14">Office</option></select></td>';
        html += '<td><input type="text" name="jabatan[]" class="form-control" required></td>';
        html += '<td><input type="text" name="nilai[]" class="form-control" required></td>';
        html += '<td><button type="button" data-row="row'+row+'" class="btn btn-sm btn-danger fa fa-minus btn-minus"></button></td>';
        html += '</tr>';
        $('#nilai_table').append(html);
    });
      
    $(document).on('click', '.btn-minus', function(e){
        e.preventDefault();
        var data_row = $(this).attr('data-row');
      
        $('#'+data_row).remove();

        row--;
        
      });
    });
    </script>

  </body>
</html>