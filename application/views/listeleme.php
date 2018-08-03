<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listeleme Sayfası</title>
</head>
<body>

    <h3>Personel Listesi</h3>

    <a href="<?php echo base_url("Personel/insertPage"); ?>">[Kayıt Ekle]</a> 
    <label for="">Sıralama</label> 
    <a href="<?php echo base_url("Personel/siralaid") ?>">İd'ye göre</a>
    <a href="<?php echo base_url("Personel/siralad") ?>">Ad'a göre</a>
    <a href="<?php echo base_url("Personel/siralaciklama") ?>">Açıklama'ya göre</a>
    <br><br>
    <table border="1">
        <thead>
            <th>id</th>
            <th>Ad Soyad</th>
            <th>Açıklama</th>
            <th>İşlem</th>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td><?php echo $row->personel_id; ?></td>
                    <td><?php echo $row->personel_title; ?></td>
                    <td><?php echo $row->personel_detail; ?></td>
                    <td>
                        <a href="<?php echo base_url("personel/updatePage/$row->personel_id"); ?>">[Düzenle]</a>
                        <a href="<?php echo base_url("personel/delete/$row->personel_id"); ?>">[Sil]</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>