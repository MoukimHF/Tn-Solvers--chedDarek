<!DOCTYPE html>
<html lang="fr">
<?php 

include('head.php');
?>

<body id="page-top">
<style>
    .gallery {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-evenly;
    width: 100%;
    max-width: 1200px;
    margin: auto;
}
.card {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    cursor: pointer;
    width: 1200px;
    margin: 10px 10px 5px;
    padding: 0px;
    background: #52bab3;
    border-radius: 0.25em;
    border: 1px solid rgba(50, 50, 50, 0.3);
    transition: .4s ease-out;
    overflow: hidden;
    border-radius: 5px;
}
section {
    padding: 10px 0;
}
@media (max-width: 960px)
section {
    padding: 10px 0;
}
.card-img {
    width: 250px;
    margin: 10px 15px auto 10px;
    border-radius: 20%;
}

.card-info-container {
    text-align: left;
}

.card-name {
    margin: 20px auto 0;
}

.card-text {
    font-size: 0.9em;
    color: rgba(50, 50, 50, 0.7);
    margin: 7px auto;
    transition: .4s ease-out;
}

.cap {
    text-transform: capitalize;
}

    </style>

   <?php 
   include('nav.php');
   ?>
 <section class="download bg-primary pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-heading text-center mb-5">
                     
                        <h2>أخبار فيروس كورونا في جميع أنحاء العالم
</h2>
                    </div>
                    <div id="gallery" class="gallery">
            
            </div>
                    

</section>

</div>
</div>
</div>
<script language="javascript" src="./news/js/script.js"></script>