<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kayıt Düzenleme Sayfası</title>
</head>
<body>

    <h3>Kayıt Düzenle</h3>

    <form action="<?php echo base_url("personel/update/$row->personel_id") ?>" method="post">

        <label for="perosnel_title">Personelin Adını Giriniz</label> <br>
        <input type="text" id="personel_title" name="personel_title" value="<?php echo $row->personel_title; ?>">
        <br>
        <label for="personel_detail">Açıklama</label><br>   
        <textarea name="personel_detail" id="personel_detail" cols="30" rows="10"><?php echo $row->personel_detail; ?></textarea><br>
        <button type="submit">Kaydet</button>
        <a href="<?php echo base_url("personel") ?>">Geri Dön</a>

    </form>
    
</body>
</html>