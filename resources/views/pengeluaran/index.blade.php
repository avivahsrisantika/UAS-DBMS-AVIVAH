<h1>Data Pengeluaran</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Nobk</td>
    <td>Tanggal</td>
    <td>Noref</td>
    <td>Bagian ID</td>
    <td>petugas ID</td>
    <td>Keterangan</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluaran_avivah as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->nobk?></td>
    <td><?php echo $row->tanggal?></td>
    <td><?php echo $row->noreff?></td>
    <td><?php echo $row->bagianid?></td>
    <td><?php echo $row->petugasid?></td>
    <td><?php echo $row->keterangan?></td>
</tr>
<?php
}
?>

</table>