<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
               
                  <script> 
                 function panier()
                    {
                     var a= this.document.getElementById("wess").textContent;
                      var b= parseInt(a);
                        document.getElementById("wess").innerHTML=b+1;
                        console.log(b);

                        }
                     </script> 
                    
                   <a href="voirpanier.php" ><img src=img/pannier.png alt=pannier width=30px heignt=30px>(<span id="wess"> 0</span>)</a>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="shop.html" class="nav-item nav-link active">Shop</a>
                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">Login</a>
                            <a href="" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form method="post"  action="rechercher.php">
                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name" name="motcle">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                    </div>
                           <br>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    
                     <p>Dans la catégorie : </p>
                     <div>
                     <select name="categorie"> 
                     <option value="tous">Tous</option>
                    <option value="dress">dress</option>
                    <option value="Accessoires">Accessoires</option>
                    <option value="bags">bags</option>
                    <option value="Shirts">Shirts</option>
                    </select>
                    </div>
                    </div>
                    <p>Filter by prix : </p>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    
                     <input type="number" name="prix" placeholder="prix">
                    
                     </div>
                     <p>En ordre : </p>
                     <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                      
                      <label for="">Croissant</label>
                        <input type="radio" name="ordre" value="ASC" checked="checked"/>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                
                      <label for="">DéCroissant</label>
                        <input type="radio" name="ordre" value="ASC" checked="checked"/>
                    </div>
                       
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                    <input type="submit" name="" value="OK"/>
                    </div>
                    </form>
                </div>
               
            </div>






<?php
    include("connexion.php");
    $idcom=connexpdo('magasine','myparam');
if(!empty($_POST ['motcle'])) 
{

$motcle=strtolower($_POST ['motcle']); 
$categorie=($_POST ['categorie']); 
$ordre=($_POST ['ordre']); 
$prix=($_POST ['prix']); 
// Requête SQL
$reqcategorie=($_POST['categorie']=="tous")?"":"AND categorie='$categorie'";  
$idcom=connexpdo('magasine','myparam');
$result=$idcom->prepare("SELECT * FROM article WHERE prix='$prix' and lower(desgin)LIKE'$motcle'");
$result->bindColumn('id_client',$id_client);
$result->bindColumn('nom', $nom); 
$result->bindColumn('prenom', $prenom); 
$result->bindColumn('adresse', $adresse);
$result->bindColumn('ville', $ville);
$result->bindColumn('mail', $age);
$result->bindColumn('age', $age);
$result->execute();
$requete=$idcom->prepare("SELECT  img FROM article WHERE prix='$prix' and lower(desgin)LIKE'$motcle'");
$requete->execute();

//$result=$idcom->query($requete); 
if(!$result && !$requete) 
{
echo "Lecture impossible";
}
else
{
 $nb=$requete->rowCount();
$nbcol=$result->columnCount();
$nbart=$result->rowCount();
echo $nb;
echo $nbart;
if($nbart==0)
{
echo "<h3>Il n'y a aucun article correspondant au mot-clé : $motcle</h3>";
exit;
}
$ligne=$result->fetch(PDO::FETCH_ASSOC); // Tableau associatif
$titres=array_keys($ligne);
$ligne=array_values($ligne);
$im=$requete->fetch(PDO::FETCH_ASSOC);

// print_r($titres);


// Affichage des valeurs du tableau

do
{

foreach($im as $val )
{   
    echo"<div class=col-lg-4 col-md-6 col-sm-12 pb-1>";
    echo"<div class=card product-item border-0 mb-4>";
        echo"<div class=card-header product-img position-relative overflow-hidden bg-transparent border p-0>";
            echo"<img class=img-fluid w-100 src=$val alt=>";
        echo"</div>";
        echo"<div class=card-body border-left border-right text-center p-0 pt-4 pb-3>";
            echo"<h6 class=text-truncate mb-3>$ligne[0]</h6>";
            
            echo"<div class=d-flex justify-content-center>";
                echo"<h6>$prix</h6><h6 class=text-muted ml-2><del>$prix</del></h6>";
            echo"</div>";
        echo"</div>";
        echo"<div class=card-footer d-flex justify-content-between bg-light border>";
            
            echo"<form method=post>";
            //echo"<button name=add>Add To panier</button>";
            //echo"<a href= class=btn btn-sm text-dark p-0><i class=fas fa-eye text-primary mr-1></i>View Detail</a>";
            //echo"<a href= class=btn btn-sm text-dark p-0><i class=fas fa-eye text-primary mr-1></i>Add To panier</a>";
            echo"<div class=\"card-footer d-flex justify-content-between bg-light border\">
            <a  class=\"btn btn-sm text-dark p-0\"><i class=\"fas fa-eye text-primary mr-1\"></i>View Detail</a>
            <a  class=\"btn btn-sm text-dark p-0\" onclick=panier()><i class=\"fas fa-shopping-cart text-primary mr-1\"></i>Add To panier</a>
        </div>";
            echo"</form>";
           // echo"<img src=img/pannier.png alt=pannier width=30px heignt=30px onclick=panier()>" ;
        echo"</div>";
    echo"</div>";
echo"</div>";
$retour = $idcom->prepare("INSERT INTO panier (id_panier,design,categorie,prix,img) VALUES ('$ligne[0]','$ligne[1]','$ligne[2]','$prix','$val')");
    $retour->execute(array($ligne[0],$ligne[1],$ligne[2],$prix,$val));
 
}



}
while($im=$requete->fetch(PDO::FETCH_NUM));
}

$idcom=null;
}
?>

<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>