<!DOCTYPE html>
<html lang="id">
<head>
    <title>BS4 Collapse - Fawzy Muhammad Dzaake</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body { background-color: white; font-family: 'Segoe UI', Arial, sans-serif; color: #333; }

        /* Layout Utama */
        .wrapper { max-width: 1100px; margin: 20px auto; padding: 0 15px; }
        .header { background: white; padding: 20px 0; border-bottom: 1px solid #ddd; margin-bottom: 20px; }

        /* Komponen Link */
        .search-item { margin-bottom: 30px; }
        .link-title { font-size: 1.2rem; color: #1a0dab; text-decoration: none; font-weight: 500; }
        .link-title:hover { text-decoration: underline; }
        .link-url { color: #006621; font-size: 0.9rem; margin: 0; }
        .description { font-size: 0.95rem; color: #545454; }

        /* Panel Samping */
        .side-panel { background: white; border: 1px solid #ccc; border-radius: 5px; padding: 15px; }
        .side-panel img { width: 100%; border-radius: 3px; margin-bottom: 10px; }

        /* Bagian FAQ / Collapse */
        .faq-box { background: white; border: 1px solid #ddd; border-radius: 5px; margin: 20px 0; padding: 10px; }
        .faq-item { border-bottom: 1px solid #eee; }
        .faq-item:last-child { border-bottom: none; }
        .faq-btn { width: 100%; text-align: left; padding: 10px; background: none; border: none; font-weight: bold; }

        .footer { text-align: center; padding: 20px; font-size: 0.8rem; color: #666; margin-top: 50px; }
    </style>
</head>
<body>

<div class="header">
    <div class="container">
        <h2 style="font-weight: bold; display: inline-block; margin-right: 20px;">AlaAlaSearchEngine</h2>
        <input type="text" class="form-control d-inline-block w-50" value="Sistem Informasi ITS">
    </div>
</div>

<div class="wrapper">
    <div class="row">

        <div class="col-md-8">
            <p class="small text-muted">Sekitar 5 hasil ditemukan</p>

            <div class="search-item">
                <p class="link-url">https://its.ac.id/si</p>
                <a href="https://its.ac.id/si" target="_blank" class="link-title">Departemen Sistem Informasi - ITS</a>
                <p class="description">Fokus pada solusi teknologi informasi untuk bisnis dan organisasi, menggabungkan aspek manajemen dan teknik.</p>
            </div>

            <div class="faq-box">
                <div class="faq-item">
                    <button class="faq-btn" data-toggle="collapse" data-target="#ans1">Perbedaan SI dan IT? ▼</button>
                    <div id="ans1" class="collapse p-2">SI fokus pada integrasi bisnis, IT pada algoritma dan software.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-btn" data-toggle="collapse" data-target="#ans2">Status Akreditasi? ▼</button>
                    <div id="ans2" class="collapse p-2">Terakreditasi Unggul BAN-PT dan Internasional IABEE.</div>
                </div>
            </div>

            <div class="search-item">
                <p class="link-url">instagram.com/its_sisteminformasi</p>
                <a href="https://www.instagram.com/its_sisteminformasi/" target="_blank" class="link-title">Instagram SI ITS</a>
                <p class="description">Update harian mengenai kegiatan mahasiswa dan info akademik.</p>
            </div>

            <div class="search-item">
                <p class="link-url">youtube.com/sisteminformasiits</p>
                <a href="https://www.youtube.com/sisteminformasiits" target="_blank" class="link-title">YouTube Channel SI ITS</a>
                <p class="description">Kanal resmi untuk webinar, profil departemen, dan karya mahasiswa.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="side-panel">
                <img src="https://masuk-ptn.com/images/department/3de4ce88f45caf360b9e01126718301b238c8e5e.jpg" alt="ITS">
                <h4>Sistem Informasi ITS</h4>
                <p class="small text-muted">Departemen Pendidikan</p>
                <hr>
                <p class="small"><b>Fakultas:</b> Fakultas Teknologi Elektronika dan Informatika Cerdas (FTEIC)</p>
                <p class="small"><b>Lokasi:</b> Kampus ITS Sukolilo, Surabaya</p>
                <p class="small"><b>Gelar:</b> S.Kom</p>
                <a href="https://its.ac.id/si" target="_blank" class="btn btn-sm btn-primary btn-block">Kunjungi Situs</a>
            </div>
        </div>

    </div>
</div>

<div class="footer">
    Fawzy Muhammad Dzaake - 5026241064 - Tugas BS4 Collapse
</div>

</body>
</html>
