
<link rel="stylesheet" href="assets/css/style.css">

<?php
$images = [
    "https://wallsdesk.com/wp-content/uploads/2017/01/Bulbasaur-Pictures.jpg",
    "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/f484215b-4e9a-42b5-9feb-77c3dec3a385/dala92b-9ecf2fc6-d8aa-4c90-b728-ef6509eebd90.png",
    "http://fc09.deviantart.net/fs71/i/2011/230/a/2/hi_res_squirtle_by_elektro_omega-d4708gi.png",
    "http://img08.deviantart.net/dce1/i/2015/277/f/2/eevee_by_ruki_makino-d9by2a2.png",
    "https://pngimg.com/uploads/pokemon/pokemon_PNG14.png"
];

$pokemons = ["bubasaur", "charmander", "squirtle", "eevee", "pikachu"];

for ($i=0; $i < count($pokemons); $i++) { 
    echo '<img src="' . $images[$i] . '" alt="' . $pokemons[$i] . '">';
    echo '<p>' . $pokemons[$i] . '</p>';
}
?>
