<?php
echo date('d F Y');
 
echo "<br/>";
 
echo date('d F Y', strtotime('1994-02-15'));

echo "<br/>";

echo tgl_indo(date('Y-m-d'));
 
echo "<br/>";
 
echo tgl_indo("1994-02-15");

?>


<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}