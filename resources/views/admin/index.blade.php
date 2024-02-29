@extends('layouts.app') <!--extends sert a appeler le layout (le chemin vers le layout commence à partir de views utiliser des points à la place des slashs)-->

@section('body') <!-- injecte dans le yield body du layout-->
<x-admin.navbar /><!--cet balise sert à injecter le composant blade (ici navbar qui doit être importer dans app.scss)-->
<x-sidebar />

<div class="home">
    <div class="home-title">
        <h1>Accueil</h1>
        <span>Ici, c'est l'accueil de mon BackOffice</span>
    </div>
    <div class="home-content">
        <h1>Mon BackOffice</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum maiores, cum magnam facilis aperiam sit dignissimos iste. Excepturi earum fuga eveniet blanditiis voluptates. Delectus eaque cum vel illo earum necessitatibus!
            Veritatis perferendis fugit ratione assumenda? Quibusdam porro reprehenderit ratione quos perferendis aut minima labore sint rem consequatur dolorum, animi provident expedita magnam, neque voluptatum et laudantium vero ipsum, corrupti quam.
            Optio iure numquam esse fuga autem in sequi velit nemo repudiandae, nobis nesciunt maiores excepturi facere pariatur quidem repellendus consequuntur quisquam? Suscipit laboriosam maiores dolores ipsum, ipsa saepe provident aperiam!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellendus molestiae facilis perspiciatis, animi provident ut debitis eveniet sequi itaque ab! Quae officiis dolorum laudantium quaerat veniam earum asperiores expedita!
            Enim, aut aspernatur animi molestias doloribus quos eveniet. Iste, placeat? Reprehenderit repudiandae quaerat sint veniam minima eum eos repellat, fugit earum nostrum? Tempora, minus. Hic voluptatum nostrum quaerat consectetur harum.
            Temporibus labore ex perspiciatis earum, praesentium quam beatae error nisi doloribus eum iusto iure quisquam vitae animi alias aperiam id eligendi magni? A ratione ut, libero laboriosam fugiat perferendis dicta.
            Accusantium odio vel placeat atque enim laboriosam aliquid minus veniam. Mollitia explicabo eius alias aliquid, deleniti minus quis cumque sunt laborum officia consectetur, eos quidem fugit tempora! Cum, veritatis nesciunt.
            Sapiente ad nisi repudiandae, minima amet architecto, vitae quam ipsa quas facilis aspernatur quae temporibus officia a consequuntur inventore sunt ipsum quos fuga explicabo, blanditiis tenetur. Consequuntur harum deleniti molestiae!
        </p>
    </div>
</div>
@endsection