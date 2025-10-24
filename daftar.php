<html>
    <head>
        <title>::Data Registrasi::</title>
        <style type="text/css">
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-size: cover;
                background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                padding: 20px;
            }
            .container{
                background-color: white;
                border: 3px solid grey;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                max-width: 800px;
                width: 100%;
            }
            h1{
                text-align: center;
                color: #333;
                margin-bottom: 30px;
                font-size: 28px;
            }
            .success-message{
                background-color: #d4edda;
                color: #155724;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #c3e6cb;
                border-radius: 5px;
                text-align: center;
                font-weight: bold;
            }
            .error-message{
                background-color: #f8d7da;
                color: #721c24;
                padding: 20px;
                margin-bottom: 20px;
                border: 1px solid #f5c6cb;
                border-radius: 5px;
                text-align: center;
            }
            .error-icon{
                color: #dc3545;
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .error-text{
                color: #721c24;
                font-size: 14px;
                font-weight: bold;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            th, td{
                padding: 12px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th{
                background-color: white;
                font-weight: bold;
                color: #333;
                text-align: center;
            }
            td{
                color: #666;
            }
            .back-button{
                text-align: center;
                margin-top: 20px;
            }
            .back-button a{
                background-color: #007bff;
                color: white;
                padding: 12px 24px;
                text-decoration: none;
                border-radius: 5px;
                display: inline-block;
                transition: background-color 0.3s;
            }
            .back-button a:hover{
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Data Registrasi User</h1>
            
            <?php 
            if (isset($_POST['submit'])) {
                $nama_depan = $_POST['nama_depan'];
                $nama_belakang = $_POST['nama_belakang'];
                $umur = intval($_POST['umur']);
                $asal_kota = $_POST['asal_kota'];
                $nama_lengkap = $nama_depan . " " . $nama_belakang;
                
                if ($umur < 10) {
                    echo '<div class="error-message">';
                    echo '<div style="color: #dc3545; font-size: 24px; font-weight: bold; margin-bottom: 10px;">✖ <span style="color: #721c24;">Error!</span></div>';
                    echo '<div class="error-text">Umur harus minimal 10 tahun!</div>';
                    echo '</div>';
                    echo '<div class="back-button">';
                    echo '<a href="index.html">Kembali ke Form Registrasi</a>';
                    echo '</div>';
                } else {
                    echo '<div class="success-message">';
                    echo 'Registrasi Berhasil !!';
                    echo '</div>';
                    
                    echo '<table>';
                    echo '<tr>';
                    echo '<th>No</th>';
                    echo '<th>Nama Lengkap</th>';
                    echo '<th>Umur</th>';
                    echo '<th>Asal Kota</th>';
                    echo '</tr>';
                    
                    $counter = 0;
                    $nomor = 1; 
                    
                    while ($counter < $umur) {

                        if ($nomor == 7 || $nomor == 13) {
                            $nomor += 2;
                            continue;
                        }
                        
                        echo '<tr>';
                        echo '<td style="text-align: center;">' . $nomor . '</td>';
                        echo '<td>' . $nama_lengkap . '</td>';
                        echo '<td style="text-align: center;">' . $umur . '</td>';
                        echo '<td>' . $asal_kota . '</td>';
                        echo '</tr>';
                        
                        $nomor += 2;
                        $counter++;
                    }
                    
                    echo '</table>';
                    
                    echo '<div class="back-button">';
                    echo '<a href="index.html">Kembali ke Form Registrasi</a>';
                    echo '</div>';
                }
            } else {
                echo '<div style="text-align: center; color: #dc3545; padding: 20px;">';
                echo '<h3>Error: Data tidak ditemukan</h3>';
                echo '<p>Silakan isi form registrasi terlebih dahulu.</p>';
                echo '<div class="back-button">';
                echo '<a href="index.html">Kembali ke Form Registrasi</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </body>
</html>