
<script>

function deleteUser(id) {
  var c = confirm('Are you sure you want to delete this user?');
  if(c === true) 
  {
    location.href = "<?php echo $this->config->config['base_url']; ?>users/delete/"+id;
  }
}

</script>

<?php

if($results){
  $tbl_array = array();

  for( $i = 0; $i < count($results); $i++){
    $tbl_array[$i]['Username'] = $results[$i]['name'];
    $tbl_array[$i]['Password'] = $results[$i]['password'];
    $tbl_array[$i]['Datetime Created'] = $results[$i]['created_at'];
    $tbl_array[$i]['Action'] = "<center> <a href='".$this->config->config['base_url']."users/edit/".$results[$i]['id']."' class='btn btn-success'><i class='glyphicon glyphicon-edit'></i> Edit</a>
                                <span class='btn btn-danger' onclick='deleteUser(".$results[$i]['id'].")'><i class='glyphicon glyphicon-trash' onclick='deleteUser(".$results[$i]['id'].")'></i> Delete</span> </center>";
  }


  $tmpl = array (
  'table_open'          => '<table class="table table-hover">',

  'heading_row_start'   => '<tr>',
  'heading_row_end'     => '</tr>',
  'heading_cell_start'  => '<th>',
  'heading_cell_end'    => '</th>',

  'row_start'           => '<tr>',
  'row_end'             => '</tr>',
  'cell_start'          => '<td>',
  'cell_end'            => '</td>',

  'row_alt_start'       => '<tr>',
  'row_alt_end'         => '</tr>',
  'cell_alt_start'      => '<td>',
  'cell_alt_end'        => '</td>',

  'table_close'         => '</table>'
  );

  $this->table->set_template($tmpl);
  $this->table->set_heading('Username','Password','Created At','<center>Action</center>');

  echo $this->table->generate($tbl_array);
  echo $this->pagination->create_links();
  echo "<a href='".$this->config->config['base_url']."users/add' style='float:right;' class='btn btn-primary'>Add New</a>";
}
?>