<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Bagian ID</td>
    <td>Nama Bagian</td>
    <td>Kepala Bagian</td>
    <td>telp</td>
</tr>

<?php 
$no=0;
 foreach ($bagian_avivah as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->bagianid?></td>
    <td><?php echo $row->namabagian?></td>
    <td><?php echo $row->kepalabagian?></td>
    <td><?php echo $row->telp?></td>
</tr>
<?php
}
?>

</table>