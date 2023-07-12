<h1>Data Pengeluaran Item</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>ID</td>
    <td>Nobk</td>
    <td>Barang ID</td>
    <td>Jumlah</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluaranitem_avivah as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->id?></td>
    <td><?php echo $row->nobk?></td>
    <td><?php echo $row->barangid?></td>
    <td><?php echo $row->jumlah?></td>
</tr>
<?php
}
?>

</table>