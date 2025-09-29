<?php
    $menu = [
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" => [
                [
                    "nama" => "Wisata",
                    "subMenu" => [
                        ["nama" => "Pantai"],
                        ["nama" => "Hiburan"]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ]
    ];

    function tampilkanMenuBertingkat(array $menu) {
        echo "<ul>";
        foreach ($menu as $key => $item) {
            echo "<li>{$item['nama']} </li>";

            // check is there a submenu?
            if (array_key_exists('subMenu', $item)) {
                // recursion
                tampilkanMenuBertingkat($item['subMenu']);
            }
        }
        echo "</ul>";
    }

    tampilkanMenuBertingkat($menu);
?>
