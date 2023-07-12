<h1>Data Barang</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Barang ID</td>
    <td>Nama Barang</td>
    <td>Satuan</td>
    <td>Harga</td>
    <td>Kategori ID</td>
</tr>

<?php 
$no=0;
 foreach ($barang_avivah as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->bagianid?></td>
    <td><?php echo $row->namabarang?></td>
    <td><?php echo $row->satuan?></td>
    <td><?php echo $row->harga?></td>
    <td><?php echo $row->kategoriid?></td>
</tr>
<?php
}
?>

</table>