<?php 

    echo "Masukkan nomor Manual atau Tidak (y/n) : ";
    $answer = trim(fgets(STDIN));
    if($answer === "y") {
        echo "Masukkan digit awalan (5/6 digits) : ";
        $awal = trim(fgets(STDIN));
        echo "Jumlah : ";
        $jumlah = trim(fgets(STDIN));
        $file = fopen("nomor.txt", "w");
        if (strlen($awal) === 6 && is_numeric($awal) && is_numeric($jumlah)){
            for ($i=0; $i < $jumlah; $i++) { 
                $rand = mt_rand(100000, 999999);
                $generate = $awal . $rand . "\n";
                echo $generate;
                fwrite($file, $generate);
            }
            echo "Nomor sudah dimasukkan kedalam file nomor.txt";
        } elseif (strlen($awal) === 5 && is_numeric($awal) && is_numeric($jumlah)){
            for ($i=0; $i < $jumlah; $i++) { 
                $rand = mt_rand(1000000, 9999999);
                $generate = $awal . $rand . "\n";
                echo $generate;
                fwrite($file, $generate);
            }
            echo "Nomor sudah dimasukkan kedalam file nomor.txt";
        } else {
            echo "Kesalahan input, coba lagi . . .";
        }
    } elseif($answer === "n") {
        $awal = "085216";
        echo "Otomatis Nomer Awalan ($awal) \n";
        echo "Jumlah : ";
        $jumlah = trim(fgets(STDIN));
        $file = fopen("nomor.txt", "w");
        if (strlen($awal) === 6 && is_numeric($awal) && is_numeric($jumlah)){
            for ($i=0; $i < $jumlah; $i++) { 
                $rand = mt_rand(100000, 999999);
                $generate = $awal . $rand . "\n";
                echo $generate;
                fwrite($file, $generate);
            }
            echo "Nomor sudah dimasukkan kedalam file nomor.txt";
        } elseif (strlen($awal) === 5 && is_numeric($awal) && is_numeric($jumlah)){
            for ($i=0; $i < $jumlah; $i++) { 
                $rand = mt_rand(1000000, 9999999);
                $generate = $awal . $rand . "\n";
                echo $generate;
                fwrite($file, $generate);
            }
            echo "Nomor sudah dimasukkan kedalam file nomor.txt";
        } else {
            echo "Kesalahan input, coba lagi . . .";
        }
    } else {
        echo "Kesalahan input, coba lagi . . .";
    }

?>
