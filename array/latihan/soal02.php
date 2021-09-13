<?php
$data = [
    [
        "namawalidosen" => "Aceng Fikri",
        "mahasiswa" => [
            [
                "nama" => "Nisa",
                "matakuliah" => [
                    ["nama" => "Informatika"],
                    ["nama" => "Psikologi"],
                    ["nama" => "Sastra"]
                ],
                "hobi" =>[
                    ["hobi" => "Main Game"],
                    ["hobi" => "Membaca"],
                ]
            ],
            [
                "nama" => "Kirana",
                "matakuliah" => [
                    ["nama" => "Fisika"],
                    ["nama" => "Matematika"],
                    ["nama" => "Astronomi"]
                ],
                "hobi" =>[
                    ["hobi" => "Memasak"],
                    ["hobi" => "Mewarnai"],
                ]
            ],
            [
                "nama" => "Juki",
                "matakuliah" => [
                    ["nama" => "Kimia"],
                    ["nama" => "Biologi"],
                    ["nama" => "Sejarah"]
                ],
                "hobi" =>[
                    ["hobi" => "Main Catur"],
                    ["hobi" => "Bola Basket"],
                ]
            ],
    ],
    
],  [
    "namawalidosen" => "Ujang Betok",
        "mahasiswa" => [
            [
                "nama" => "Galang",
                "matakuliah" => [
                    ["nama" => "PKN"],
                    ["nama" => "Indonesia"],
                    ["nama" => "IPS"]
                ],
                "hobi" =>[
                    ["hobi" => "Berpetualang"],
                    ["hobi" => "Mendaki"],
                ]
            ],
            [
                "nama" => "Caca",
                "matakuliah" => [
                    ["nama" => "IPA"],
                    ["nama" => "KWU"],
                    ["nama" => "BK"]
                ],
                "hobi" =>[
                    ["hobi" => "Menyanyi"],
                    ["hobi" => "Menari"],
                ]
            ],
            [
                "nama" => "Ahmad",
            "matakuliah" => [
                ["nama" => "Sastra Jawa"],
                ["nama" => "Sastra Sunda"],
                ["nama" => "Inggris"]
            ],
            "hobi" =>[
                ["hobi" => "Bermain"],
                ["hobi" => "Menonton TV"],
            ]
        ],
    ]
]
];
$no = 1;
foreach ($data as $val)
{
    echo "Nama Wali Dosen : " . $val ['namawalidosen'] . "<br>";
    echo "Daftar Mahasiswa :";
    echo "<ul>";
    
    foreach ($val['mahasiswa'] as $data)
    {   
        echo "<li> Data ke-" . $no++ . "<br>";
        echo " Nama Mahasiswa : " . $data ['nama'] . "<br>" ;
        echo "Daftar Mata Kuliah : ";
        echo "<ol>";
        foreach($data['matakuliah'] as $matkul)
        {
            
            echo "<li>" . $matkul['nama'] . "</li>";
        }
        echo "</ol>";
        
        echo "Daftar Hobi: ";
        echo "<ol>";
        foreach($data['hobi'] as $hobi)
        {
            
            echo "<li>" . $hobi ['hobi'] . "</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}
?>

    