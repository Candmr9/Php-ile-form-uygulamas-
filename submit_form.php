<?php
// Veritabanı bağlantısı
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "is_basvuru"; 

// Veritabanı bağlantısını oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Form verilerini alma
$ad_soyad = $_POST['ad_soyad'];
$dogum_yeri_tarihi = $_POST['dogum_yeri_tarihi'];
$mail_adresi = $_POST['mail_adresi'];
$cep_telefonu = $_POST['cep_telefonu'];
$ev_telefonu = $_POST['ev_telefonu'];
$adres = $_POST['adres'];
$cinsiyet = $_POST['cinsiyet'];
$medeni_hal = $_POST['medeni_hal'];
$ehliyet = $_POST['ehliyet'];
$askerlik_durumu = $_POST['askerlik_durumu'];
$mezun_okul = $_POST['mezun_okul'];
$calistigi_yerler_ve_tarihler = $_POST['calistigi_yerler_ve_tarihler'];
$yetenekler = $_POST['yetenekler'];

// SQL sorgusuyla veritabanına veri ekleme
$sql = "INSERT INTO basvuru_formu (ad_soyad, dogum_yeri_tarihi, mail_adresi, cep_telefonu, ev_telefonu, adres, cinsiyet, medeni_hal, ehliyet, askerlik_durumu, mezun_okul, calistigi_yerler_ve_tarihler, yetenekler)
VALUES ('$ad_soyad', '$dogum_yeri_tarihi', '$mail_adresi', '$cep_telefonu', '$ev_telefonu', '$adres', '$cinsiyet', '$medeni_hal', '$ehliyet', '$askerlik_durumu', '$mezun_okul', '$calistigi_yerler_ve_tarihler', '$yetenekler')";

if ($conn->query($sql) === TRUE) {
    echo "<strong>Başvuru formu başarıyla gönderildi.</strong>";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


// Veritabanı bağlantısını kapatma
$conn->close();
?>
