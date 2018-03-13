<?php
function atur_template(){
  $ci=& get_instance();
  $template = array(
        'table_open'            => '<table  class="table table-striped table-borderd js-exportable">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

$ci->table->set_template($template);
}

//format rupiah
function rupiahku($angka){
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
function rupiah_non($angka){
	$hasil_rupiah = number_format($angka,0,',','.');
	return $hasil_rupiah;
}
//mengubah angka
function nomor($string){
  return sprintf("%05d", $string);
}

 ?>
