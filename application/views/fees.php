
<?php

if($results){
  $tbl_array = array();

  for( $i = 0; $i < count($results); $i++){
    $salutation = array('','Dr. ','Mr. ','Ms. ');
    $food_diet = array('','Regular','Muslim','Vegetarian');
    $salutation = $salutation[$results[$i]['salutation']];
    $food_diet = $food_diet[$results[$i]['food_diet']];

    $tbl_array[$i]['Name'] = $salutation.$results[$i]['first_name'].' '.$results[$i]['last_name'];
    $tbl_array[$i]['Email'] = $results[$i]['email'];
    $tbl_array[$i]['Birth Date'] = $results[$i]['birthdate'];
    $tbl_array[$i]['Phone'] = $results[$i]['contact'];
    $tbl_array[$i]['Address'] = $results[$i]['contact'];
    $tbl_array[$i]['Food Diet'] = '<center>'.$food_diet.'</center>';
    $tbl_array[$i]['Amount'] = 'PHP '.number_format($results[$i]['amount']);
    $tbl_array[$i]['Invoice'] = $results[$i]['reg_no'];
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
  $this->table->set_heading('Name','Email','Birth Date','Phone','Address','Food Diet','Amount','Invoice');

  echo $this->table->generate($tbl_array);
  echo $this->pagination->create_links();
}

?>