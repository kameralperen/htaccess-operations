<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    function SEO($Deger){
        $Icerik     =   trim($Deger);
        $Degisecekler   =   array("ğ", "Ğ", "ü", "Ü", "ş", "Ş", "i", "İ", "ö", "Ö", "ç", "Ç");
        $Degisenler     =   array("g", "g", "u", "u", "s", "s", "i", "i", "o", "o", "c", "c");
        $Icerik         =   str_replace($Degisecekler, $Degisenler, $Icerik);
        $Icerik         =   mb_strtolower($Icerik, "utf-8");
        $Icerik         =   preg_replace("/([^a-z0-9])/", "-", $Icerik);
        $Icerik         =   preg_replace("/-+/", "-", $Icerik);
        $Icerik         =   trim($Icerik, "-");
        return $Icerik;
    }

    $Urun   =   "BEYRUHA İNŞAAT DAN SON KAT HEM HESAPLI HEM KALİTELİ 1098212527";

    echo "Orjinal Metin: " . $Urun . "<br /><br />";
    echo "SEF Link / Permalink yapısı ile oluşturulmuş metin: " . "<b>" . SEO($Urun) . "</b>";
    ?>
</body>
</html>
